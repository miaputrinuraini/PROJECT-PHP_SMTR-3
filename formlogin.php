<html>
<head>
		<title>
		</title>
</head>
	<body>
	<h2> Login Here !!!  </h2>
	<form action ="olahlogin.php" method ="POST"> <br> <br>
	<div class="col-lg-5 col-md-8">
		  
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
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
                <div class="text-center"><button type="submit" title="Send Message">LOGIN HERE !</button></div>
              </form>
            </div>
          </div>
		
		
</body>
</html>