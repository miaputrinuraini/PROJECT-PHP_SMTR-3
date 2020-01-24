<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'koneksi.php';


?>
<title>
		</title>
	<meta charset="utf-8">
  <title>Avilon Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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
      <h2>DATA PANITIA PENERIMAAN SISWA/SISWI  </h2>
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
<a href="formpanitia.php">tambahkan data</a>
<table align ="center" width="600" border = "1" cellspacing= "0" cellpadding="0" >
<?php
	
		echo "<tr align='center'>
				<th> No </th>
				<th> ID_Panitia</th>
				<th> Nama </th>
				<th> Status </th>
				<th> Password</th>
				
				<th> Pilihan Aksi </th>
			</tr>";					
?>
<?php
			$i =0;
			$query = mysqli_query($koneksi,"SELECT * FROM panitia");
			while ($m = mysqli_fetch_array($query)){
				$i++;				
?>
<tr>
				<td> <?php print $i;?> </td>
				<td> <?php print $m['id_panitia'];?> </td>
				<td> <?php print $m['nama'];?> </td>
				<td> <?php print $m['statuss'];?> </td>
				<td> <?php print $m['password_panitia'];?> </td>
			
				
				<td> <a href ="tampil_update.php?id_panitia=<?php echo $m['id_panitia']; ?>">EDIT</a> | <a href = "aksi_hapus.php?id_panitia=<?php echo $m['id_panitia'];?>">HAPUS</a> </td>
				</tr>
			<?php
			}
			?>	
				
					
</table>

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
	
	

