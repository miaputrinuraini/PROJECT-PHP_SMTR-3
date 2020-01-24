<?php

	include 'koneksi.php';

	$nisx = $_GET['nis'];

	$query = mysqli_query($koneksi,"Delete from siswa where NIS = '$nisx'");

	header('Location:readsiswa-ujicoba.php');
	


?>