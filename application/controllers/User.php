<?php
class User extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index() {
		$this->loginform();
	}

	public function loginform() {
		$d['judul'] = "Area Login Administrator";
		$d['judulform'] = "Login Administrator";
		$this->load->view('login',$d);
	}

	//input dari form login
	public function proseslogin() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
	

		//validasi form
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		//jalankan validasi form
		if($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan1','username dan password masih kosong!');
			redirect(site_url().'/User/loginform');
		}
		else {
			$this->load->model('M_User','',TRUE);
			$cekdata=$this->M_User->ceklogin($username,$password); //ambil data dari model
			//cek login
			if($cekdata) {
				foreach ($cekdata as $datalogin) {
					$username =$datalogin['username'];
					$email	  =$datalogin['email'];
				}
				//buat array
				$dlogin=array(
					'username'=>$username,
					'email'=>$email,
					'logged_in'=>TRUE
					);
				//buat sessi
				$this->session->set_userdata($dlogin);
				//direct kehalaman dashboard
				redirect(site_url());
			}	
			else {
				//login gagal
				$this->session->set_flashdata('pesan2','OOWW!!..username dan password salah!');
				redirect(site_url().'User/loginform');
			}
		}
	}

	public function logout() {
		$dlogin=array(
			'username'=>'',
			'logged_in'=>'',
			'email'=>''
			);
		$this->session->unset_userdata($dlogin);
		$this->session->sess_destroy();
		redirect(site_url().'User');
	}

	
}