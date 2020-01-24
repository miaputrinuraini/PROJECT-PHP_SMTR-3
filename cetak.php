<!DOCTYPE html>
<html>
<head>
	<title>print data calon pendaftar di MDTA  AT-TAUFIQ</title>
</head>
<body>
 
	<center>
 
		<h2>DATA CALON PENDAFTAR ONLINE</h2>
		<h4>MDTA AT-TAUFIQ</h4>
 
	</center>
 
<?php 

session_start();

include 'koneksi.php';
$nisx = $_GET['NIS'];
	$query = mysqli_query($koneksi, "SELECT panitia.`id_panitia`,siswa.`id_daftar`,siswa.`NIS`,siswa.`nama`,siswa.`tgl_lahir`,siswa.`j_kelamin`,siswa.`agama`,siswa.`alamat`,siswa.`nama_org_tua`,siswa.`hasil_keterangan`FROM panitia INNER JOIN siswa WHERE panitia.`id_panitia` AND siswa.`NIS` GROUP BY siswa.`NIS` and siswa ='$nisx')");
	$m = mysqli_fetch_array($query);

?>

<form>

<table>
		<table>
		<tr>
		<td> Id Panitia </td>
		<td>:</td>
		<td><?php print $m['id_panitia']; ?></td>
		</tr>
		<tr>
		<td>Id Daftar</td>
		<td>:</td>
		<td><?php print $m['id_daftar']; ?></td>		
		</tr>
		<tr>
		<td>NIS </td>
		<td>:</td>
		<td><?php print $m['NIS']; ?></td>		
		</tr>
		<tr>
		<td>Nama Siswa </td>
		<td>:</td>
		<td><?php print $m['nama']; ?></td>		
		</tr>
		<tr>
		<td>Tangga Lahir </td>
		<td>:</td>
		<td><?php print $m['tgl_lahir']; ?></td>		
		</tr>
		<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php print $m['j_kelamin']; ?></td>	
		</tr>
		<tr>
		<td>Agama </td>
		<td>:</td>
		<td><?php print $m['agama']; ?></td>		
		</tr>
		<tr>
		<td>Alamat </td>
		<td>:</td>
		<td><?php print $m['alamat']; ?></td>		
		</tr>
		<tr>
		<td>Nama Orang Tua </td>
		<td>:</td>
		<td><?php print $m['nama_org_tua']; ?></td>		
		</tr>
		<tr>
		<td>Hasil Keterangan</td>
		<td>:</td>
		<td><?php print $m['hasil_keterangan']; ?></td>	
		</tr>
	</table><br><br><br><br>


 
	<script>
		window.print();
	</script>
 
</body>
</html>