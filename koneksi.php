<?php
$namaserver = "localhost";
$namadatabase = "project";
$username = "root";
$password = "";

$koneksi = mysqli_connect ($namaserver, $username, $password, $namadatabase);

if (!$koneksi){
		die ("Koneksi Gagal: ". mysqli_connect_error());
		
}else{
	//echo "Koneksi Sukses";
}

?>