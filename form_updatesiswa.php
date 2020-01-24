
<?php



include 'koneksi.php';

if (isset($_POST['submit'])) {
	
		$nisx=$_POST['nis'];
		$namasiswax =$_POST['nama'];
		$tgl_lahirx =$_POST['tgl_lahir'];
		$jkx=$_POST['j_kelamin'];
		$agamax =$_POST['agama'];
		$alamatx =$_POST['alamat'];
		$nama_org_tuax =$_POST['nama_org_tua'];
		$agama_org_tuax=$_POST['agama_org_tua'];
		$alamat_org_tuax =$_POST['alamat_org_tua'];
		$pekerjaanx =$_POST['pekerjaan'];
		$no_tlpx =$_POST['no_tlp'];
		$umurx =$_POST['umur'];
		$hasil_keteranganx =$_POST['hasil_keterangan'];
		$id_daftarx =$_POST['id_daftar'];
		
		
		
	if (empty($nisx) || empty($namasiswax) || empty ($tgl_lahirx) || empty($jkx) || empty($agamax) || empty($alamatx) || empty($nama_org_tuax) || empty ($agama_org_tuax) || empty ($alamat_org_tuax) || empty ($pekerjaanx) || empty ($no_tlpx) || empty(umurx) || empty($hasil_keteranganx) || empty($id_daftarx)) {
		
	echo "<h3 align = 'center'>Lengkapi Data Anda</h3>";
		
		echo "<form action = 'tampil_updatesiswa.php'>";

		echo "<input type = 'submit' value = 'Back' align = 'center'>";

		echo "</form>";

	}

	else{

		$query = mysqli_query($koneksi,"Update siswa set NIS = '$nisx', nama = '$namasiswax', tgl_lahir ='$tgl_lahirx', j_kelamin = '$jkx', agama= '$agamax', alamat='$alamatx', nama_org_tua ='$nama_org_tuax', agama_org_tua ='$agama_org_tuax', alamat_org_tua = '$alamat_org_tuax', pekerjaan ='$pekerjaanx', no_tlp = '$no_tlpx', umur ='$umurx', hasil_keterangan='$hasil_keteranganx', id_daftar=$id_daftarx where nis= '$nisx'");

		header('Location:readsiswa-ujicoba.php');

	}

}



?>