<html>
<head>
<?php
session_start();
include 'koneksi.php';


?>
		<title>
		</title>
	<meta charset="utf-8">
  <title>Avilon Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="project uji coba/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="project uji coba/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="project uji coba/css/sb-admin.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
	<body>
	<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
  
    <div class="intro-text">
      <h2>DATA CALON SISWA/SISWI  </h2>
	  <p>(MDTA) AT-TAUFIQ</p>
    </div>

    <div class="product-screens">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="img/product-screen-1.png" alt="">
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="img/product-screen-2.png" alt="">
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="img/product-screen-3.png" alt="">
      </div>

    </div>

  </section><!-- #intro -->


<BR>
<BR> 
<div id="content-wrapper">
<div class="container-fluid">
<div class="card mb-3">
<div class="card-header">
</div>
<div class="card-body">
<div class="table-responsive">
<table border="1" width="190%" cellspacing="0">


<thead>
 
<?php
	
		echo "<tr align='center'>
				<th> No </th>
				<th> NIS</th>
				<th> Nama </th>
				<th> Tgl Lahir </th>
				<th> Jenis Kelamin</th>
				<th> Agama</th>
				<th> Alamat</th>
				<th> Nama org tua </th>
				<th> Agama org tua </th>
				<th> Alamat org tua</th>
				<th> Pekerjaan </th>
				<th> No Tlp</th>
				<th> Umur</th>
				<th> Hasil_keterangan </th>
				<th> Id Daftar</th>
			
				<th> Pilihan Aksi </th>
			</tr>";					
?>
</thead>
<?php
			$i =0;
			$query = mysqli_query($koneksi,"SELECT * FROM siswa");
			while ($m = mysqli_fetch_array($query)){
				$i++;				
?>
 <tbody>
<tr>
				<td> <?php print $i;?> </td>
				<td> <?php print $m['NIS'];?> </td>
				<td> <?php print $m['nama'];?> </td>
				<td> <?php print $m['tgl_lahir'];?> </td>
				<td> <?php print $m['j_kelamin'];?> </td>
				<td> <?php print $m['agama'];?> </td>
				<td> <?php print $m['alamat'];?> </td>
				<td> <?php print $m['nama_org_tua'];?> </td>
				<td> <?php print $m['agama_org_tua'];?> </td>
				<td> <?php print $m['alamat_org_tua'];?> </td>
				<td> <?php print $m['pekerjaan'];?> </td>
				<td> <?php print $m['no_tlp'];?> </td>
				<td> <?php print $m['umur'];?> </td>
				<td> <?php print $m['hasil_keterangan'];?></td>
				<td> <?php print $m['id_daftar'];?> </td>
				
				
				
				<td> <a href ="tampil_updatesiswa.php?nis=<?php echo $m['NIS']; ?>&&NIS=<?php echo $m['NIS'];?>&&no=<?php echo $no;?>">Edit</a> | <a href = "hapus_siswa.php?nis=<?php echo $m['NIS'];?>&&NIS=<?php echo $m['NIS'];?>">Hapus</a>  | <a href = "cetak.php?nis=<?php echo $m['NIS'];?>">PRINT</a></td>
				</tr>
		
			<?php
			}
			?>
			
				 </tbody>		
					
</table>
</div>
</div>
</div>
</div>
</div>

<br>
<br>
<br>

<form action="index.php" method="POST">			
			<div class="text-center"><button type="submit" title="login_here">BACK TO HOME</button></div>
			</form>


	 <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Avilon</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="project uji coba/vendor/jquery/jquery.min.js"></script>
  <script src="project uji coba/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="project uji coba/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="project uji coba/vendor/chart.js/Chart.min.js"></script>
  <script src="project uji coba/vendor/datatables/jquery.dataTables.js"></script>
  <script src="project uji coba/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="project uji coba/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="project uji coba/js/demo/datatables-demo.js"></script>
  <script src="project uji coba/js/demo/chart-area-demo.js"></script>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
	
	