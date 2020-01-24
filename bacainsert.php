<?php
include "koneksi.php";

		$nisx=$_POST['NIS'];
		$namasiswax =$_POST['nama'];
		$tgl_lahirx =$_POST['tgl_lahir'];
		$jkx =$_POST['j_kelamin'];
		$agamax =$_POST['agama'];
		$alamatx =$_POST['alamat'];
		$nama_org_tuax =$_POST['nama_org_tua'];
		$agama_org_tuax=$_POST['agama_org_tua'];
		$alamat_org_tuax =$_POST['alamat_org_tua'];
		$pekerjaanx =$_POST['pekerjaan'];
		$no_tlpx =$_POST['no_tlp'];
		$umurx =$_POST['umur'];
	if(!empty($nisx) && !empty($namasiswax) && !empty($tgl_lahirx) && !empty($jkx) && !empty($agamax) && !empty($alamatx) && !empty($nama_org_tuax) && !empty($agama_org_tuax) && !empty($alamat_org_tuax) && !empty($pekerjaanx) && !empty($no_tlpx)  && !empty ($umurx))	
{
mysqli_query($koneksi,"insert into siswa(NIS,nama,tgl_lahir,j_kelamin,agama,alamat,nama_org_tua,agama_org_tua,alamat_org_tua,pekerjaan,no_tlp,umur) values('$nisx','$namasiswax','$tgl_lahirx','$jkx','$agamax','$alamatx','$nama_org_tuax','$agama_org_tuax','$alamat_org_tuax','$pekerjaanx','$no_tlpx','$umurx')");

echo "DATA LENGKAP DAN BERHASIL DISIMPAN !!!! <br><br><br>";
}
else
{
	echo "DATA TIDAK LENGKAP, SILAHKAN LENGKAPI DATA KEMBALI!!!! <br><br><br>";
}	

?>
<table>
		<tr>
		<td> NIS </td>
		<td>:</td>
		<td><?php echo "$nisx <br>";?></td>
		</tr>
		<tr>
		<td>NAMA SISWA</td>
		<td>:</td>
		<td><?php echo "$namasiswax ";?></td>	
		</tr>
		<tr>
		<td>TANGGAL LAHIR </td>
		<td>:</td>
		<td><?php echo " $tgl_lahirx <br>";?></td>		
		</tr>
		<tr>
		<td>JENIS KELAMIN </td>
		<td>:</td>
		<td><?php echo "$jkx <br>" ;?></td>		
		</tr>
		<tr>
		<td>AGAMA </td>
		<td>:</td>
		<td><?php echo "$agamax <br>";?> </td>		
		</tr>
		<tr>
		<td>ALAMAT </td>
		<td>:</td>
		<td><?php echo "$alamatx <br>";?> </td>
		</tr>
		<tr>
		<td> NAMA ORANG TUA </td>
		<td>:</td>
		<td><?php echo "$nama_org_tuax <br>" ;?></td>
		</tr>
		<tr>
		<td>AGAMA ORANG TUA</td>
		<td>:</td>
		<td><?php echo "$agama_org_tuax <br>";?> </td>		
		</tr>
		<tr>
		<td>ALAMAT ORANG TUA </td>
		<td>:</td>
		<td><?php echo "$alamat_org_tuax <br>";?></td>		
		</tr>
		<tr>
		<td>PEKERJAAN</td>
		<td>:</td>
		<td><?php echo "$pekerjaanx <br>";?> </td>		
		</tr>
		<tr>
		<td>NO TLP/WA </td>
		<td>:</td>
		<td><?php echo "$no_tlpx <br>";?></td>		
		</tr>
		<tr>
		<td>UMUR </td>
		<td>:</td>
		<td><?php echo "$umurx <br>";?></td>	
		</tr>

	</table><br><br><br><br>
<a href="cetak.php"> PRINT</a>	
<a href="formsiswa.php">Kembali</a>
		
	
		