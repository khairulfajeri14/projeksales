<?php
    
class Contact_android extends MY_Controller{
	public function index(){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();
		$this->load->model('Berita_model');
		$data['beritalist'] = $this->Berita_model->all_berita();
		$data['contact']='null';
		$data['main_content'] = 'v_contact_android';
	   $this->load->view('android',$data);

	}
}