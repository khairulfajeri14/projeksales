<?php
    
class Kendaraan_android extends MY_Controller{
	public function index(){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();
		$this->load->model('Kendaraan_model');
		$data['kendaraanlist'] = $this->Kendaraan_model->all_kendaraan();
		$data['kendaraan']='null';
		$data['main_content'] = 'v_produk_android';
	   $this->load->view('android',$data);
	}

	public function more($id){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();
		$this->load->model('Kendaraan_model');
		$data['kendaraanlist'] = $this->Kendaraan_model->all_kendaraan($id);
		$data['detail_product']='null';
		$data['main_content'] = 'v_produk_android_more';
		$this->load->view('android',$data);		
	}

	public function kategori($id){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();
		$this->load->model('Kendaraan_model');
		$data['kendaraanlist'] = $this->Kendaraan_model->all_kategori($id);
		$data['gor']=$this->Kategori_model->all_kategori($id);
		$data['main_content'] = 'v_produk_android';
		$this->load->view('android',$data);		
	}

}