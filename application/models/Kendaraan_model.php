<?php
class Kendaraan_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function all_kendaraan($id=null){
        if($id !=null){
            $sql = "SELECT A.id_kendaraan, A.nama_kendaraan, A.harga, A.foto, A.tanggal, B.nama, B.pabrikan, C.dp, C.lama, C.besar, C.lama2, C.besar2, C.lama3, C.besar3, D.deskripsi, E.deskripsi FROM kendaraan AS A JOIN kategori AS B ON A.id_kategori=B.id AND A.status='publish' AND A.id_kendaraan=".$id." LEFT JOIN detail_angsuran AS C ON A.id_kendaraan=C.id_produk LEFT JOIN detail AS D ON A.id_kendaraan=D.id_kendaraan LEFT JOIN spek AS E ON A.id_kendaraan=E.id_kendaraan ORDER BY A.id_kendaraan DESC";
            $query = $this->db->query($sql);
            return $query->result();
        }
        else {
            $sql = "select * from kendaraan order by id_kendaraan desc";
            $query = $this->db->query($sql);
            return $query->result();
        }
    } 

    function all_kategori($id){
        return $this->db->query("SELECT * from kendaraan where kendaraan.id_kategori=".$id." order by kendaraan.id_kendaraan desc")->result();
    }

    function kendaraan(){
        return $this->db->query("SELECT * from kendaraan, kategori where kendaraan.id_kategori=kategori.id order by kendaraan.id_kendaraan desc")->result();
    }

    function get_kendaraan2()
    {
         $sql = "select * from kendaraan,kategori where kendaraan.id_kategori=kategori.id order by kendaraan.id_kendaraan desc limit 0,5";
        $query = $this->db->query($sql);
        return $query->result();
    }

    //fetch kendaraan
    function get_kendaraan($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from kendaraan,kategori where id_kendaraan like '%$st%' and kendaraan.id_kategori=kategori.id or nama_kendaraan like '%$st%' and kendaraan.id_kategori=kategori.id order by kendaraan.id_kendaraan desc limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_pencarian($st){
        $sql = "select * from kendaraan where nama_kendaraan like '%$st%' order by kendaraan.id_kendaraan desc";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_kendaraan_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from kendaraan,kategori where id_kendaraan like '%$st%' and kendaraan.id_kategori=kategori.id";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    function kendaraan_act($data){
		$this->db->insert('kendaraan',$data);		
	}
	function edit_kendaraan($id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		return $this->db->get('kendaraan')->result();
	}
	function update_kendaraan($data,$id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		$this->db->update('kendaraan',$data);
	}
	function hapus_kendaraan($id_kendaraan){
		$this->db->where('id_kendaraan',$id_kendaraan);
		$this->db->delete('kendaraan');
	}
}
?>