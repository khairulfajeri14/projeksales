<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Detail_model');
		$this->load->model('Kendaraan_model');
		if($this->session->userdata('logged_in')!=TRUE) {
			$this->session->set_flashdata('pesan3','Baca Bismillah Dulu, Baru Masuk !!!');
				redirect(site_url().'User/loginform');
		}
	}

	public function index()
    {
        //pagination settings
        $config['base_url'] = site_url('Detail/index');
        $config['total_rows'] = $this->db->count_all('detail');
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
        
        // get detail list
        $data['detaillist'] = $this->Detail_model->get_detail($config["per_page"], $data['page'], NULL);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // load view
       $data['detil']='null';
       $data['main_content'] = 'admin/detail/index';
	   $this->load->view('admin/layouts/main',$data);
    }
    
    
    function tulis_detail(){
		$this->load->library('form_validation');
		$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
		$data['detil']='null';
       $data['main_content'] = 'admin/detail/add';
	   $this->load->view('admin/layouts/main',$data);
	}
	function detail_act(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_kendaraan','id_kendaraan','required|numeric');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		if($this->form_validation->run() != true ){
			$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
			$data['detil']='null';
       $data['main_content'] = 'admin/detail/add';
	   $this->load->view('admin/layouts/main',$data);
		}else{
			$id_kendaraan = $this->input->post('id_kendaraan');
			$deskripsi = $this->input->post('deskripsi');
			$d = array(
				'id_kendaraan' => $id_kendaraan,
				'deskripsi' => $deskripsi,
				);
			$this->Detail_model->detail_act($d);
			redirect('Detail','refresh');
		}		
	}
	function edit_detail($id_kendaraan){
		$this->load->library('form_validation');
		$data['detail'] = $this->Detail_model->edit_detail($id_kendaraan);
		$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
		$data['detil']='null';
       $data['main_content'] = 'admin/detail/edit';
	   $this->load->view('admin/layouts/main',$data);
	}
	function update_detail(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_kendaraan','id_kendaraan','required|numeric');
		$this->form_validation->set_rules('deskripsi','deskripsi detail','required');
		if($this->form_validation->run() != true ){
			$data['detail'] = $this->Detail_model->edit_detail($id_kendaraan);
			$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
			$data['detil']='null';
       $data['main_content'] = 'admin/detail/add';
	   $this->load->view('admin/layouts/main',$data);
		}else{			
			$id_kendaraan = $this->input->post('id_kendaraan');
			$deskripsi = $this->input->post('deskripsi');
			$d = array(
				'id_kendaraan' => $id_kendaraan,
				'deskripsi' => $deskripsi,
				);
				$this->Detail_model->update_detail($d,$id_kendaraan);
				redirect('Detail','refresh');
		}			
	}		
	function hapus_detail($id_kendaraan){
		$this->Detail_model->hapus_detail($id_kendaraan);
		redirect('Detail','refresh');
	}
}