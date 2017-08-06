<?php
    
class Dashboard extends MY_Controller{


        function __construct(){
                parent::__construct();
                $this->load->model('Berita_model');
                $this->load->model('Kendaraan_model');
                if($this->session->userdata('logged_in')!=TRUE) {
                        $this->session->set_flashdata('pesan3','Baca Bismillah Dulu, Baru Masuk !!!');
                              redirect(site_url().'User/loginform');
                }

        
        }


	public function index(){
        // get berita list
        $data['beritalist'] = $this->Berita_model->get_berita2(5);
        $data['kendaraanlist'] = $this->Kendaraan_model->get_kendaraan2();
        
        
        // load view
        $data['overview']='null';
       $data['main_content'] = 'admin/dashboard/index';
	   $this->load->view('admin/layouts/main',$data);
	}

   
}