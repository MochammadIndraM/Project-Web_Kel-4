<?php 
$koneksi = mysqli_connect("localhost","wstifci1_jasaprinting","Polije1234","wstifci1_jasaprinting");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
// header('Content-Type: application/json');
?>