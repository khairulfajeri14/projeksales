<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Angsuran extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Angsuran_model');
		$this->load->model('Kendaraan_model');
		if($this->session->userdata('logged_in')!=TRUE) {
			$this->session->set_flashdata('pesan3','Baca Bismillah Dulu, Baru Masuk !!!');
				redirect(site_url().'User/loginform');
		}
	}

	public function index()
    {
        //pagination settings
        $config['base_url'] = site_url('Angsuran/index');
        $config['total_rows'] = $this->db->count_all('detail_angsuran');
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
        
        // get angsuran list
        $data['angsuranlist'] = $this->Angsuran_model->get_angsuran($config["per_page"], $data['page'], NULL);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // load view
        $data['angsurance']='null';
        $data['main_content'] = 'admin/angsuran/index';
	    $this->load->view('admin/layouts/main',$data);
    }
    
    
	function tulis_angsuran(){
		$this->load->library('form_validation');
		$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
		$data['angsurance']='null';
        $data['main_content'] = 'admin/angsuran/add';
	    $this->load->view('admin/layouts/main',$data);
	}
	function angsuran_act(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_produk','ID Kendaraan','required|numeric');
		$this->form_validation->set_rules('lama','Lama Angsuran','required');
		$this->form_validation->set_rules('dp','DP','numeric|required');
		$this->form_validation->set_rules('besar','Besar Angsuran','numeric|required');
		if($this->form_validation->run() != true ){
			$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
			$data['angsurance']='null';
        $data['main_content'] = 'admin/angsuran/add';
	    $this->load->view('admin/layouts/main',$data);
		}else{
			$id_produk = $this->input->post('id_produk');
			$lama = $this->input->post('lama');
			$dp = $this->input->post('dp');
			$besar = $this->input->post('besar');
			$lama2 = $this->input->post('lama2');
			$besar2 = $this->input->post('besar2');
			$lama3 = $this->input->post('lama3');
			$besar3 = $this->input->post('besar3');
			$d = array(
				'id_produk' => $id_produk,
				'lama' => $lama,
				'dp' => $dp,
				'besar' => $besar,
				'lama2' => $lama2,
				'besar2' => $besar2,
				'lama3' => $lama3,
				'besar3' => $besar3,
				);
			$this->Angsuran_model->angsuran_act($d);
			redirect('Angsuran','refresh');
		}		
	}
	function edit_angsuran($id_detail_a){
		$this->load->library('form_validation');
		$data['angsuran'] = $this->Angsuran_model->edit_angsuran($id_detail_a);
		$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
		$data['angsurance']='null';
        $data['main_content'] = 'admin/angsuran/edit';
	    $this->load->view('admin/layouts/main',$data);
	}
	function update_angsuran(){
		$this->load->library('form_validation');
		$id_detail_a = $this->input->post('id_detail_a');
		$this->form_validation->set_rules('id_produk','ID Kendaraan','required|numeric');
		$this->form_validation->set_rules('lama','Lama Angsuran','required');
		$this->form_validation->set_rules('dp','DP','required');
		$this->form_validation->set_rules('besar','Besar Angsuran','numeric|required');
		if($this->form_validation->run() != true ){
			$data['angsuran'] = $this->Angsuran_model->edit_angsuran($id_detail_a);
			$data['kendaraan'] = $this->Kendaraan_model->kendaraan();
			$data['angsurance']='null';
        $data['main_content'] = 'admin/angsuran/edit';
	    $this->load->view('admin/layouts/main',$data);
		}else{			
			$id_produk = $this->input->post('id_produk');
			$lama = $this->input->post('lama');
			$dp = $this->input->post('dp');
			$besar = $this->input->post('besar');
			$lama2 = $this->input->post('lama2');
			$besar2 = $this->input->post('besar2');
			$lama3 = $this->input->post('lama3');
			$besar3 = $this->input->post('besar3');
			$d = array(
				'id_produk' => $id_produk,
				'lama' => $lama,
				'dp' => $dp,
				'besar' => $besar,
				'lama2' => $lama2,
				'besar2' => $besar2,
				'lama3' => $lama3,
				'besar3' => $besar3,
				);
				$this->Angsuran_model->update_angsuran($d,$id_detail_a);
				redirect('Angsuran','refresh');
		}			
	}		
	function hapus_angsuran($id_detail_a){
		$this->Angsuran_model->hapus_angsuran($id_detail_a);
		redirect('Angsuran','refresh');
	}
}