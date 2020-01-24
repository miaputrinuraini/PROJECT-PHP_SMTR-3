<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'koneksi.php';


?>
  <meta charset="utf-8">
  <title>MDTA AT-TAUFIQ</title>
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

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Pendaftaran Online</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Profile</a></li>
          <li><a href="#contact">Contact Us</a></li>
		  <br>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
  
    <div class="intro-text">
      <h2>Madrasah Dinniyah Takmiliyah Awaliyah </h2>
	  <p>(MDTA) AT-TAUFIQ</p>
      <a href="formsiswa.php" class="btn-get-started scrollto">DAFTAR</a>
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

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
	
	
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Profile</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Madrasah Dinniyah Takmiliyah Awaliyah (MDTA) AT-TAUFIQ
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <p>Madrasah Dinniyah Takmiliyah Awaliyah (MDTA) AT-TAUFIQ merupakan sekolah agama satu-satu nya yang ada di Desa lubuk sakai.<br></p>
			<p>letak nya yang strategis ditengah desa, bersebelahan langsung dengan masjid utama lubuk sakai.<br></p>
			<p>MDTA ini banyak mengikuti kegiatan antar Mdta lainnya, banyak penghargaan yang didapat dan peran guru
				nya pun juga sangat membantu dalam berkembangnya MDTA ini <h3></p>
            
          </div>
        </div>
      </div>
    </section><!-- #about -->

    
  
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.789031986044!2d101.30094221409496!3d0.2195375642266901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5767bffffffff%3A0xf74ce6e41e3e60b5!2smasjid%20at%20taufiq!5e0!3m2!1sid!2sid!4v1578809704079!5m2!1sid!2sid" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Jln. Poros Desa lubuk sakai, Kec. Kampar Kiri Tengah, Kab Kampar<br>Riau, (kode pos)</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>Mdta At.taufiq Lubuk Sakai</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+6281338250696 (Komaruddin)</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="olahlogin.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="id_panitia" class="form-control" id="id_panitia" placeholder="Your ID_Panitia" data-rule="minlen:4" data-msg="Please enter at least 5 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="password" class="form-control" name="password_panitia" id="password_panitia" placeholder="Your Password" data-rule="email" data-msg="Please enter a valid password" />
                    <div class="validation"></div>
                  </div>
				  <div class="form-group col-lg-6">
					<input type="text" name="statuss" class="form-control" id="statuss" placeholder="Your status" data-rule="minlen:4" data-msg="Please enter a valid status" />
                    <div class="validation"></div>
					</div>
                </div>
                <div class="text-center"><button type="submit" title="login_here">LOGIN HERE !</button></div>
              </form>
            </div>
			
			
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
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
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
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
