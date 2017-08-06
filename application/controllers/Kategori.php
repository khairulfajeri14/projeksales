<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->helper('form');
        //$this->load->helper('url');
        //$this->load->database();
        //$this->load->library('pagination');
        $this->load->model('Kategori_model');
		$this->load->model('Kategori_model');
		if($this->session->userdata('logged_in')!=TRUE) {
			$this->session->set_flashdata('pesan3','Baca Bismillah Dulu, Baru Masuk !!!');
				redirect(site_url().'User/loginform');
		}
		
	}

	public function index()
    {
        //pagination settings
        $config['base_url'] = site_url('Kategori/index');
        $config['total_rows'] = $this->db->count_all('kategori');
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
        
        // get kategori list
        $data['kategorilist'] = $this->Kategori_model->get_kategori($config["per_page"], $data['page'], NULL);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // load view
          $data['categori']='null';
       $data['main_content'] = 'admin/kategori/index';
	   $this->load->view('admin/layouts/main',$data);
    }
    
    	//function index(){
	//	$data['kategori'] = $this->Kategori_model->kategori();	
	//	$this->load->view('admin/header');		
	//	$this->load->view('admin/kategori/v_kategori',$data);	//	//
		//$this->load->view('admin/footer');		
	//}
	function tulis_kategori(){
		$this->load->library('form_validation');
		$data['categori']='null';
       $data['main_content'] = 'admin/kategori/add';
	   $this->load->view('admin/layouts/main',$data);
	}	
	function kategori_act(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('pabrikan','pabrikan','required');
		
		if($this->form_validation->run() != true ){
			$data['categori']='null';
       $data['main_content'] = 'admin/kategori/index';
	   $this->load->view('admin/layouts/main',$data);
		}else{
			$nama = $this->input->post('nama');
			$pabrikan = $this->input->post('pabrikan');
			$kendaraan = $this->input->post('kendaraan');
			$d = array(
				'nama' => $nama,
				'pabrikan' => $pabrikan,
				
				);
			$this->Kategori_model->kategori_act($d);
			redirect('Kategori','refresh');
		}		
	}
	function edit_kategori($id){
		$this->load->library('form_validation');
		$data['kategori'] = $this->Kategori_model->edit_kategori($id);
		$data['categori']='null';
       $data['main_content'] = 'admin/kategori/edit';
	   $this->load->view('admin/layouts/main',$data);
	}
	function update_kategori(){
		$this->load->library('form_validation');
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('pabrikan','pabrikan','required');
		
		if($this->form_validation->run() != true ){
			$data['kategori'] = $this->Kategori_model->edit_kategori($id);
			$data['categori']='null';
       $data['main_content'] = 'admin/kategori/edit';
	   $this->load->view('admin/layouts/main',$data);
		}else{			
			$nama = $this->input->post('nama');
			$pabrikan = $this->input->post('pabrikan');
			$kendaraan = $this->input->post('kendaraan');
			$d = array(
					'nama' => $nama,
					'pabrikan' => $pabrikan,
					
					);
			$this->Kategori_model->update_kategori($d,$id);
			redirect('Kategori','refresh');
		}			
	}
	function hapus_kategori($id){
		$this->Kategori_model->hapus_kategori($id);
		redirect('Kategori','refresh');
	}		
}