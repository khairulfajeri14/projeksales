<?php
class Angsuran_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch angsuran
    function get_angsuran($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from detail_angsuran, kendaraan where id_produk like '%$st%' and detail_angsuran.id_produk=kendaraan.id_kendaraan limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_angsuran_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from detail_angsuran, kendaraan where id_produk like '%$st%'and detail_angsuran.id_produk=kendaraan.id_kendaraan";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    function angsuran(){
		return $this->db->query("SELECT * from detail_angsuran, kendaraan where detail_angsuran.id_produk=kendaraan.id_kendaraan ")->result();
	}
	function angsuran_act($data){
		$this->db->insert('detail_angsuran',$data);		
	}
	function edit_angsuran($id_detail_a){
		$this->db->where('id_detail_a',$id_detail_a);
		return $this->db->get('detail_angsuran')->result();
	}
	function update_angsuran($data,$id_detail_a){
		$this->db->where('id_detail_a',$id_detail_a);
		$this->db->update('detail_angsuran',$data);
	}
	function hapus_angsuran($id_detail_a){
		$this->db->where('id_detail_a',$id_detail_a);
		$this->db->delete('detail_angsuran');
	}
}
?>