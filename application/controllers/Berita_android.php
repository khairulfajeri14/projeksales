<?php
    
class Berita_android extends MY_Controller{
	public function index(){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();
		$this->load->model('Berita_model');
		$data['beritalist'] = $this->Berita_model->all_berita();
		$data['news']='null';
		$data['main_content'] = 'v_berita_android';
	   $this->load->view('android',$data);

	}

	public function more($id){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();
		$this->load->model('Berita_model');
		$data['beritalist'] = $this->Berita_model->all_berita($id);
		$data['detail_news']='null';
		$data['main_content'] = 'v_berita_android_more';
		$this->load->view('android',$data);		
	}


}