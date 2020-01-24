<?php

session_start();

include 'koneksi.php';

$idx= $_POST['id_panitia'];
$passwordx = $_POST['password_panitia'];
$statusx=$_POST['statuss'];



$query =mysqli_query($koneksi,"select * from panitia where id_panitia = '$idx'");
 while ($m= mysqli_fetch_array($query)){
	 if ($idx ==$m['id_panitia'] && $passwordx ==$m['password_panitia'] && $statusx ==$m['statuss']) {
		 $_session['id_panitia']= $m['id_panitia'];
		 //$_session['nama']= $m['nama'];
		 $_session['password_panitia']=$m['password_panitia'];
		 $_session['statuss']=$m['statuss'];
		 
		 if ($_session['statuss'] == "Admin"){
			  header('location:readtabelpanitia.php');
		 }
		 else{
			header('location:readsiswa-ujicoba.php'); 
		 }
		

	 }else{
		 echo "LOGIN GAGAL";
		 session_destroy();
	 }
	 }
 
 

?>	 