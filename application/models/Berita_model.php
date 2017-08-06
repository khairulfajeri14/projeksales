<?php
class Berita_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function all_berita($id=null){
        if($id !=null){
            $sql = "select * from berita where id=".$id;
            $query = $this->db->query($sql);
            return $query->result();
        }
        else {
            $sql = "select * from berita order by id desc";
            return $this->db->query($sql)->result();
             
        }
    }

    function get_berita2($limit)
    {
        $sql = "select * from berita order by id desc limit " . 0 . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    //fetch berita
    function get_berita($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from berita where judul like '%$st%' order by id desc limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_berita_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from berita where judul like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    
    function berita_act($data){
        $this->db->insert('berita',$data);      
    }
    function edit_berita($id){
        $this->db->where('id',$id);
        return $this->db->get('berita')->result();
    }
    function update_berita($data,$id){
        $this->db->where('id',$id);
        $this->db->update('berita',$data);
    }
    function hapus_berita($id){
        $this->db->where('id',$id);
        $this->db->delete('berita');
    }
}
?>