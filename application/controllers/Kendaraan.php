<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kendaraan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Kendaraan_model');
		$this->load->model('Kategori_model');
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('Kendaraan_model');
		if($this->session->userdata('logged_in')!=TRUE) {
			$this->session->set_flashdata('pesan3','Baca Bismillah Dulu, Baru Masuk !!!');
				redirect(site_url().'User/loginform');
		}
	}

	public function index()
    {
        //pagination settings
        $config['base_url'] = site_url('Kendaraan/index');
        $config['total_rows'] = $this->db->count_all('kendaraan');
        $config['per_page'] = "5";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        // get kendaraan list
        $data['kendaraanlist'] = $this->Kendaraan_model->get_kendaraan($config["per_page"], $data['page'], NULL);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // load view
        $data['produk']='null';
        $data['main_content'] = 'admin/kendaraan/index';
    $this->load->view('admin/layouts/main',$data);
    }
    
	function tulis_kendaraan(){
		$this->load->library('form_validation');
		$data['kategori'] = $this->Kategori_model->kategori();
		$data['produk']='null';
        $data['main_content'] = 'admin/kendaraan/add';
    $this->load->view('admin/layouts/main',$data);
	}
	function kendaraan_act(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('nama_kendaraan','Nama','required');
		$this->form_validation->set_rules('id_kategori','ID Kategori','required');
		$this->form_validation->set_rules('status','Status Kategori','required');
		$this->form_validation->set_rules('harga','Harga','numeric|required');
		if($this->form_validation->run() != true ){
			$data['kategori'] = $this->Kategori_model->kategori();
		$data['produk']='null';
       $data['main_content'] = 'admin/kendaraan/add';
	   $this->load->view('admin/layouts/main',$data);
		}else{
			$tanggal = $this->input->post('tanggal');
			$nama_kendaraan = $this->input->post('nama_kendaraan');
			$id_kategori = $this->input->post('id_kategori');
			$status = $this->input->post('status');
			$harga = $this->input->post('harga');
			$config['upload_path'] = './assets/gambar_posting/';
			$config['allowed_types'] = 'gif|jpg|png';			
			$this->load->library('upload', $config);
			$this->upload->do_upload('foto');
			$data = array('upload_data' => $this->upload->data());
			$d = array(
				'tanggal' => $tanggal,
				'nama_kendaraan' => $nama_kendaraan,
				'id_kategori' => $id_kategori,
				'status' => $status,
				'harga' => $harga,
				'foto' => $data['upload_data']['file_name']
				);
			$this->Kendaraan_model->kendaraan_act($d);
			redirect('Kendaraan','refresh');
		}		
	}
	function edit_kendaraan($id_kendaraan){
		$this->load->library('form_validation');
		$data['kendaraan'] = $this->Kendaraan_model->edit_kendaraan($id_kendaraan);
		$data['kategori'] = $this->Kategori_model->kategori();
		$data['produk']='null';
       $data['main_content'] = 'admin/kendaraan/edit';
	   $this->load->view('admin/layouts/main',$data);
	}
	function update_kendaraan(){
		$this->load->library('form_validation');
		$id_kendaraan = $this->input->post('id_kendaraan');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('nama_kendaraan','Nama','required');
		$this->form_validation->set_rules('id_kategori','ID Kategori','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('harga','Harga','numeric|required');
		if($this->form_validation->run() != true ){
			$data['kendaraan'] = $this->Kendaraan_model->edit_kendaraan($id_kendaraan);
			$data['kategori'] = $this->Kategori_model->kategori();
		$data['produk']='null';
       $data['main_content'] = 'admin/kendaraan/edit';
	   $this->load->view('admin/layouts/main',$data);
		}else{			
			$tanggal = $this->input->post('tanggal');
			$nama_kendaraan = $this->input->post('nama_kendaraan');
			$id_kategori = $this->input->post('id_kategori');
			$status = $this->input->post('status');
			$harga = $this->input->post('harga');
			
			if($_FILES['foto']['name'] == ""){				
				$d = array(
					'tanggal' => $tanggal,
					'nama_kendaraan' => $nama_kendaraan,
					'id_kategori' => $id_kategori,			
					'status' => $status,
					'harga' => $harga
					);
				$this->Kendaraan_model->update_kendaraan($d,$id_kendaraan);
				redirect('Kendaraan','refresh');
			}else{				
				$config['upload_path'] = './assets/gambar_posting/';
				$config['allowed_types'] = 'gif|jpg|png';			
				$this->load->library('upload', $config);
				$this->upload->do_upload('foto');
				$data = array('upload_data' => $this->upload->data());
				$d = array(
					'tanggal' => $tanggal,
					'nama_kendaraan' => $nama_kendaraan,
					'id_kategori' => $id_kategori,			
					'status' => $status,
					'harga' => $harga,
												
					'foto' => $data['upload_data']['file_name']
					);
				$this->Kendaraan_model->update_kendaraan($d,$id_kendaraan);
				redirect('Kendaraan','refresh');
			}			
		}		
	}
	function hapus_kendaraan($id_kendaraan){
		$this->Kendaraan_model->hapus_kendaraan($id_kendaraan);
		redirect('Kendaraan','refresh');
	}

}