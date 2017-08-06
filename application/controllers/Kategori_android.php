<?php
    
class kategori_android extends MY_Controller{
	

	public function more($id){
		$this->load->model('Kategori_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori($id);
		$data['detail_news']='null';
		$data['main_content'] = 'v_kategori_android_more';
		$this->load->view('android',$data);		
	}


}