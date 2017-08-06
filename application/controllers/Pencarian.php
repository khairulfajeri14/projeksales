<?php
    
class Pencarian extends MY_Controller{

	function index(){
		$this->load->model('Berita_model');
		$this->load->model('Kategori_model');
		$this->load->model('Kendaraan_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();

	

		$data['kendaraan']='null';
		$data['isi'] = $this->input->post("nama");

		$search = ($this->input->post("nama"))? $this->input->post("nama") : "NIL";

        $search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

        // pagination settings
        $config = array();
        $config['base_url'] = site_url("Search/index/$search");
        $config['total_rows'] = $this->Berita_model->get_berita_count($search);
        $config['total_rows2'] = $this->Kendaraan_model->get_kendaraan_count($search);
        $config['per_page'] = "100";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $choice2 = $config["total_rows2"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        $config["num_links2"] = floor($choice2);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // get berita list
        $data['beritalist'] = $this->Berita_model->get_berita($config['per_page'], $data['page'], $search);
        $data['kendaraanlist'] = $this->Kendaraan_model->get_kendaraan($config['per_page'], $data['page'], $search);

        $data['pagination'] = $this->pagination->create_links();

        //load view
        $data['isi'] = $this->input->post("nama");

		$data['main_content'] = 'v_produk_android';
	   $this->load->view('android',$data);
	}
	function news(){
		$this->load->model('Berita_model');
		$this->load->model('Kategori_model');
		$this->load->model('Kendaraan_model');
		$data['kategorilist'] = $this->Kategori_model->all_kategori();

	
		$data['news']='null';
		$data['isi'] = $this->input->post("nama");

		$search = ($this->input->post("nama"))? $this->input->post("nama") : "NIL";

        $search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

        // pagination settings
        $config = array();
        $config['base_url'] = site_url("Search/index/$search");
        $config['total_rows'] = $this->Berita_model->get_berita_count($search);
        $config['total_rows2'] = $this->Kendaraan_model->get_kendaraan_count($search);
        $config['per_page'] = "100";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $choice2 = $config["total_rows2"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        $config["num_links2"] = floor($choice2);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // get berita list
        $data['beritalist'] = $this->Berita_model->get_berita($config['per_page'], $data['page'], $search);
        $data['kendaraanlist'] = $this->Kendaraan_model->get_kendaraan($config['per_page'], $data['page'], $search);

        $data['pagination'] = $this->pagination->create_links();

        //load view
        $data['isi'] = $this->input->post("nama");

		$data['main_content'] = 'v_berita_android';
	   $this->load->view('android',$data);
	}
}