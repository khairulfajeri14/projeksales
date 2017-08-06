<?php
class Spek_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch spek
    function get_spek($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from spek, kendaraan where spek.id_kendaraan like '%$st%' and kendaraan.id_kendaraan=spek.id_kendaraan order by spek.id_kendaraan desc limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_spek_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from spek where id_kendaraan like '%$st%' ";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    function spek(){
		return $this->db->query("SELECT * from spek, kendaraan where spek.id_kendaraan=kendaraan.id_kendaraan ")->result();
	}
	function spek_act($data){
		$this->db->insert('spek',$data);		
	}
	function edit_spek($id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		return $this->db->get('spek')->result();
	}
	function update_spek($data,$id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		$this->db->update('spek',$data);
	}
	function hapus_spek($id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		$this->db->delete('spek');
	}
}
?>