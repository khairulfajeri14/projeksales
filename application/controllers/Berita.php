<?php
    
class Berita extends MY_Controller{


        function __construct(){
                parent::__construct();
                $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('Berita_model');
                if($this->session->userdata('logged_in')!=TRUE) {
                        $this->session->set_flashdata('pesan3','Baca Bismillah Dulu, Baru Masuk !!!');
                                redirect(site_url().'User/loginform');
                }

        
        }


	public function index(){
		$config['base_url'] = site_url('Berita/index');
        $config['total_rows'] = $this->db->count_all('berita');
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
        
        // get berita list
        $data['beritalist'] = $this->Berita_model->get_berita($config["per_page"], $data['page'], NULL);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // load view

        $data['news']='null';
       $data['main_content'] = 'admin/berita/index';
	   $this->load->view('admin/layouts/main',$data);
	}

    public function tulis_berita(){
        
        // load view
        $data['news']='null';
        $data['main_content'] = 'admin/berita/add';
    $this->load->view('admin/layouts/main',$data);

    }
    function berita_act(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run() != true ){
            $data['kategori'] = $this->Berita_model->berita();
            $data['news']='null';
      
            $data['main_content'] = 'admin/berita/add';
    $this->load->view('admin/layouts/main',$data);
        }else{
            $tanggal = $this->input->post('tanggal');
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $status = $this->input->post('status');
            $config['upload_path'] = './assets/gambar_posting/';
            $config['allowed_types'] = 'gif|jpg|png';           
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data = array('upload_data' => $this->upload->data());
            $d = array(
                'tanggal' => $tanggal,
                'judul' => $judul,
                'isi' => $isi,
                'status' => $status,
                'foto' => $data['upload_data']['file_name']
                );
            $this->Berita_model->berita_act($d);
            redirect('Berita','refresh');
        }       
    }
    function edit_berita($id){
        $this->load->library('form_validation');
        $data['berita'] = $this->Berita_model->edit_berita($id);
        $data['news']='null';
      
$data['main_content'] = 'admin/berita/edit';
    $this->load->view('admin/layouts/main',$data);
    }
    function update_berita(){
        $this->load->library('form_validation');
        $id = $this->input->post('id');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run() != true ){
            $data['berita'] = $this->Berita_model->edit_berita($id);
            $data['news']='null';
      
$data['main_content'] = 'admin/berita/edit';
    $this->load->view('admin/layouts/main',$data);
        }else{          
            $tanggal = $this->input->post('tanggal');
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $status = $this->input->post('status');
            if($_FILES['foto']['name'] == ""){              
                $d = array(
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi,
                    'status' => $status                 
                    );
                $this->Berita_model->update_berita($d,$id);
                redirect('Berita','refresh');
            }else{              
                $config['upload_path'] = './assets/gambar_posting/';
                $config['allowed_types'] = 'gif|jpg|png';           
                $this->load->library('upload', $config);
                $this->upload->do_upload('foto');
                $data = array('upload_data' => $this->upload->data());
                $d = array(
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi,
                    'status' => $status,                                        
                    'foto' => $data['upload_data']['file_name']
                    );
                $this->Berita_model->update_berita($d,$id);
                redirect('Berita','refresh');
            }           
        }       
    }
    function hapus_berita($id){
        $this->Berita_model->hapus_berita($id);
        redirect('Berita','refresh');
    }
}