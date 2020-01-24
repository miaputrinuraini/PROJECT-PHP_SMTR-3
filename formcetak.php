		
<?php
include "koneksi.php";

		$id_panitiax=$_POST['id_panitia'];
		$id_daftarx =$_POST['id_daftar'];
		$nisx =$_POST['NIS'];
		$tgl_lahirx=$_POST['tgl_lahir'];
		$jkx=$_POST['j_kelamin'];
		$agamax =$_POST['agama'];
		$alamatx =$_POST['alamat'];
		$nama_org_tuax =$_POST['nama_org_tua'];
		$hasilx =$_POST['hasil_keterangan'];
		


?>


$id_panitiax=$_POST['id_panitia'];
		$id_daftarx =$_POST['id_daftar'];
		$nisx =$_POST['NIS'];
		$namasiswax =$_POST['nama'];
		$tgl_lahirx=$_POST['tgl_lahir'];
		$jkx=$_POST['j_kelamin'];
		$agamax =$_POST['agama'];
		$alamatx =$_POST['alamat'];
		$nama_org_tuax =$_POST['nama_org_tua'];
		$hasilx =$_POST['hasil_keterangan'];
		
if(!empty($id_panitiax) && !empty($id_daftarx) && !empty($nisx)  && !empty($namasiswaxx) && !empty($tgl_lahirx) && !empty($jkx) && !empty($agamax) && !empty($alamatx) && !empty($nama_org_tuax) && !empty($hasilx))	
{
mysqli_query($koneksi,"insert into hasil(id_panitia,id_daftar,NIS,nama,tgl_lahir,j_kelamin,agama,alamat,nama_org_tua,agama,hasil_keterangan) values('$id_panitiax','$id_daftarx','$nisx','$tgl_lahirx','$jkx','$agamax','$alamatx','$nama_org_tuax','$hasilx')");

echo "DATA LENGKAP DAN BERHASIL DISIMPAN !!!! <br><br><br>";
}
else
{
	echo "DATA TIDAK LENGKAP, SILAHKAN LENGKAPI DATA KEMBALI!!!! <br><br><br>";
}	

?>
	
 
	<table border="1" style="width: 100%">
		<tr>
			<TABLE width="600" border = "0" cellspacing= "0" cellpadding="0">
	
	<tr>
	<td><?php echo "Id_panitia				: $id_panitiax ";?></td>
	</tr>
	<tr>
	<td><?php echo "Id_Daftar				: $id_daftarx <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "NIS						: $nisx <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "Nama					: $namasiswax ";?></td>
	</tr>
	<tr>
	<td><?php echo "Tgl_Lahir			: $tgl_lahirx <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "Jenis Kelamin 		: $jkx <br>" ;?></td>
	</tr>
	<tr>
	<td><?php echo "Agama				: $agamax <br>";?> </td>
	</tr>
	<tr>
	<td><?php echo "Alamat				: $alamatx <br>";?> </td>
	</tr>
	<tr>
	<td><?php echo "Nama Orang Tua		: $nama_org_tuax <br>" ;?></td>
	</tr>
	<tr>
	<td><?php echo "Hasil Keterangan	: $hasilx <br>";?></td>
	</tr>
	
	
	
	
	<TABLE width="600" border = "0" cellspacing= "0" cellpadding="0">
	<tr>
	<td><?php echo "NIS					: $nisx <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "Nama				: $namasiswax ";?></td>
	</tr>
	<tr>
	<td><?php echo "Tgl_Lahir			: $tgl_lahirx <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "Jenis Kelamin 		: $jkx <br>" ;?></td>
	</tr>
	<tr>
	<td><?php echo "Agama				: $agamax <br>";?> </td>
	</tr>
	<tr>
	<td><?php echo "Alamat				: $alamatx <br>";?> </td>
	</tr>
	<tr>
	<td><?php echo "Nama Orang Tua		: $nama_org_tuax <br>" ;?></td>
	</tr>
	<tr>
	<td><?php echo "Agama Orang Tua		: $agama_org_tuax <br>";?> </td>
	</tr>
	<tr>
	<td><?php echo "Alamat Orang Tua	: $alamat_org_tuax <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "Pekerjaan			: $pekerjaanx <br>";?> </td>
	</tr>
	<tr>
	<td><?php echo "No Tlp				: $no_tlpx <br>";?></td>
	</tr>
	<tr>
	<td><?php echo "Umur				: $umurx <br>";?></td>
	</tr>
		
	
		
</table>



<table>
		<tr>
		<td> NIS </td>
		<td>:</td>
		<td><?php echo "NIS					: $nisx <br>";?></td>
		</tr>
		<tr>
		<td>NAMA SISWA</td>
		<td>:</td>
		<td><?php echo "Nama				: $namasiswax ";?></td>	
		</tr>
		<tr>
		<td>TANGGAL LAHIR </td>
		<td>:</td>
		<td><?php echo "Tgl_Lahir			: $tgl_lahirx <br>";?></td>		
		</tr>
		<tr>
		<td>JENIS KELAMIN </td>
		<td>:</td>
		<td><?php echo "Jenis Kelamin 		: $jkx <br>" ;?></td>		
		</tr>
		<tr>
		<td>AGAMA </td>
		<td>:</td>
		<td><?php echo "Agama				: $agamax <br>";?> </td>		
		</tr>
		<tr>
		<td>ALAMAT </td>
		<td>:</td>
		<td><?php echo "Alamat				: $alamatx <br>";?> </td>
		</tr>
		<tr>
		<td> NAMA ORANG TUA </td>
		<td>:</td>
		<td><?php echo "Nama Orang Tua		: $nama_org_tuax <br>" ;?></td>
		</tr>
		<tr>
		<td>AGAMA ORANG TUA</td>
		<td>:</td>
		<td><?php echo "Agama Orang Tua		: $agama_org_tuax <br>";?> </td>		
		</tr>
		<tr>
		<td>ALAMAT ORANG TUA </td>
		<td>:</td>
		<td><?php echo "Alamat Orang Tua	: $alamat_org_tuax <br>";?></td>		
		</tr>
		<tr>
		<td>PEKERJAAN</td>
		<td>:</td>
		<td><?php echo "Pekerjaan			: $pekerjaanx <br>";?> </td>		
		</tr>
		<tr>
		<td>NO TLP/WA </td>
		<td>:</td>
		<td><?php echo "No Tlp				: $no_tlpx <br>";?></td>		
		</tr>
		<tr>
		<td>UMUR </td>
		<td>:</td>
		<td><?php echo "Umur				: $umurx <br>";?></td>	
		</tr>

	</table><br><br><br><br>


	</table><br><br><br><br>
