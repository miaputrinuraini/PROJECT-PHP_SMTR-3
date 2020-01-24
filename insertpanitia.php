<?php
include "koneksi.php";

		$idx=$_POST['id_panitia'];
		$namax =$_POST['nama'];
		$statusx =$_POST['statuss'];
		$passwordx =$_POST['password_panitia'];
		
if(!empty($idx) && !empty($namax) && !empty($statusx) && !empty($passwordx))
{
mysqli_query($koneksi,"insert into panitia(id_panitia,nama,statuss,password_panitia)
			values('$idx','$namax','$statusx','$passwordx')");

header('location:readtabelpanitia.php');
}
else
{
	header('location:formpanitia.php');
}

?>
