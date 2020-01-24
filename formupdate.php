<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
	
		$idx=$_POST['id_panitia'];
		$namax =$_POST['nama'];
		$statusx =$_POST['statuss'];
		$passwordx =$_POST['password_panitia'];
		
		
		
	if (empty($idx) || empty($namax) || empty($statusx) ||  empty($passwordx) ){

		echo "<h3 align = 'center'>Lengkapi Data Anda</h3>";
		
		echo "<form action = 'tampil_update.php'>";

		echo "<input type = 'submit' value = 'Back' align = 'center'>";

		echo "</form>";

	}

	else{

		$query = mysqli_query($koneksi,"Update panitia set id_panitia = '$idx', nama = '$namax', statuss = '$statusx', password_panitia= '$passwordx' where id_panitia = '$idx'");

		header('Location:readtabelpanitia.php');

	}

}



?>