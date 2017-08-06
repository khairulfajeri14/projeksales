<?php
$host='localhost';
$user='root';
$pass='';
$db="kendaraan";

$con=mysqli_connect($host,$user,$pass,$db) or die('unable to connect');
if(mysqli_connect_error($con)){
	echo "Failed to connect to Database".mysqli_connect_error();
}
 
$name=$_POST['Query'];

$sql="SELECT * FROM berita WHERE judul LIKE '%$name%'";


$query=mysqli_query($con, $sql);

if($query){
	while($row=mysqli_fetch_array($query)){
		$data[]=$row;
	}
	print(json_encode($data));
}
else{
	echo('Not Found');
}

mysqli_close($con);
?>