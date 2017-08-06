<?php
$host='localhost';
$user='root';
$pass='';
$db="kendaraan";

$con=mysqli_connect($host,$user,$pass,$db) or die('unable to connect');
if(mysqli_connect_error($con)){
	echo "Failed to connect to Database".mysqli_connect_error();
}

$sql="SELECT * FROM berita WHERE status='publish' ORDER BY berita.id DESC";

$result=mysqli_query($con, $sql);
if($result){
	while($row=mysqli_fetch_array($result)){
		$flag[]=$row;
	}
	print(json_encode($flag));
}

mysqli_close($con);
?>