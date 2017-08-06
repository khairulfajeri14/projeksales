<?php
$host='localhost';
$user='root';
$pass='';
$db="kendaraan";

$con=mysqli_connect($host,$user,$pass,$db) or die('unable to connect');
if(mysqli_connect_error($con)){
	echo "Failed to connect to Database".mysqli_connect_error();
}

$sql="SELECT A.id_kendaraan, A.nama_kendaraan, A.harga, A.foto, A.tanggal, B.nama, B.pabrikan, C.dp, C.lama, C.besar, C.lama2, C.besar2, C.lama3, C.besar3 FROM kendaraan AS A JOIN kategori AS B ON A.id_kategori=B.id AND A.status='publish' LEFT JOIN detail_angsuran AS C ON a.id_kendaraan=C.id_produk ORDER BY A.id_kendaraan DESC";

$result=mysqli_query($con, $sql);
if($result){
	while($row=mysqli_fetch_array($result)){
		$flag[]=$row;
	}
	print(json_encode($flag));
}

mysqli_close($con);
?>