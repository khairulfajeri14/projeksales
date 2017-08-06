<?php
class Detail_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch detail
    function get_detail($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from detail, kendaraan where detail.id_kendaraan like '%$st%' and detail.id_kendaraan=kendaraan.id_kendaraan order by detail.id_kendaraan desc limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_detail_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from detail, kendaraan where detail.id_kendaraan like '%$st%' and detail.id_kendaraan=kendaraan.id_kendaraan";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    function detail(){
		return $this->db->query("SELECT * from detail, kendaraan where detail.id_kendaraan=kendaraan.id_kendaraan order by detail.id_kendaraan desc")->result();
	}
	function detail_act($data){
		$this->db->insert('detail',$data);		
	}
	function edit_detail($id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		return $this->db->get('detail')->result();
	}
	function update_detail($data,$id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		$this->db->update('detail',$data);
	}
	function hapus_detail($id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		$this->db->delete('detail');
	}

}
?>