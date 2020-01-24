
<?php
session_start();

include 'koneksi.php';
$nisx = $_GET['nis'];
$query =mysqli_query($koneksi,"SELECT * FROM siswa where nis='$nisx'");
$m = mysqli_fetch_array($query);
?>


<form method="POST" action="form_updatesiswa.php">
<table>
<tr>
<td> NIS </td>
<td> <input type="text" name="nis" value="<?php echo $m['NIS']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> NAMA </td>
<td> <input type="text" name="nama" value="<?php echo $m['nama']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> TGL LAHIR </td>
<td> <input type="date" name="tgl_lahir" value="<?php echo $m['tgl_lahir']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> JENIS KELAMIN </td>
	<td> <input type="radio" name="j_kelamin" value="Laki-Laki" <?php if ($m['j_kelamin']=="Laki-Laki") {echo "checked";}?>>Laki-Laki
	<td> <input type="radio" name="j_kelamin" value="Perempuan" <?php if ($m['j_kelamin']=="Perempuan") {echo "checked";}?>>Perempuan
	</td></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> AGAMA </td>
<td> <input type="text" name="agama" value="<?php echo $m['agama']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> ALAMAT	</td>
<td> <input type="text" name="alamat" value="<?php echo $m['alamat']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> NAMA ORANG TUA </td>
<td> <input type="text" name="nama_org_tua" value="<?php echo $m['nama_org_tua']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> AGAMA ORANG TUA </td>
<td> <input type="text" name="agama_org_tua" value="<?php echo $m['agama_org_tua']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> ALAMAT ORANG TUA </td>
<td> <input type="text" name="alamat_org_tua" value="<?php echo $m['alamat_org_tua']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> PEKERJAAN </td>
<td> <input type="text" name="pekerjaan" value="<?php echo $m['pekerjaan']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> NO TLP/WA </td>
<td> <input type="text" name="no_tlp" value="<?php echo $m['no_tlp']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> UMUR ORANG TUA </td>
<td> <input type="text" name="umur" value="<?php echo $m['umur']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> HASIL KETERANGAN </td>
<td> <input type="text" name="hasil_keterangan" value="<?php echo $m['hasil_keterangan']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>

<tr>
<td> ID DAFTAR </td>
<td> <input type="text" name="id_daftar" value="<?php echo $m['id_daftar']; ?>"></td>
</tr>

<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>

<tr>
<td></td>
<td> <input type="submit" name="submit" value="UPDATE"></td>
</tr>

</table>

</form>