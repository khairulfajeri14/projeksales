<?php
class Kategori_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function all_kategori($id=null){
        if($id !=null){
            $sql = "select * from kategori where id=".$id;
            $query = $this->db->query($sql);
            return $query->result();
        }
        else {
            $sql = "select * from kategori order by id desc";
            $query = $this->db->query($sql);
            return $query->result();
        }
    }

    function kategori_set($id){
        $sql = "select nama from kategori where id=".$id;
            $query = $this->db->query($sql);
            return $query->result();
    }

    function kategori(){
        $sql = "select * from kategori order by kategori.id desc";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //fetch kategori
    function get_kategori($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from kategori where nama like '%$st%' order by kategori.id desc limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_kategori_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from kategori where nama like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    function kategori_act($data){
		$this->db->insert('kategori',$data);		
	}
	function edit_kategori($id){
		$this->db->where('id',$id);
		return $this->db->get('kategori')->result();
	}
	function update_kategori($data,$id){
		$this->db->where('id',$id);
		$this->db->update('kategori',$data);
	}
	function hapus_kategori($id){
		$this->db->where('id',$id);
		$this->db->delete('kategori');
	}
}
?>