<?php

class M_User extends CI_Model {
	var $tabel = 'usersistem';
	public function __construct() {
		parent::__construct();
	}

	public function ceklogin($username,$password) {
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get($this->tabel);
		if($query->num_rows()>0) {
			return $query->result_array();
		}
	}
}