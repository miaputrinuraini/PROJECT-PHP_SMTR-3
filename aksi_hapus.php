<?php

	include 'koneksi.php';

	$idx = $_GET['id_panitia'];

	$query = mysqli_query($koneksi,"Delete from panitia where id_panitia = '$idx'");

	header('Location:readtabelpanitia.php');
	


?>