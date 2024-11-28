<?php
include('connection.php');
if(isset($_POST['Submit']))

{
//getting the post values
$name=$_POST['name'];
$email_address=$_POST['email'];
$contact=$_POST['subject'];
$message=$_POST['message'];


//query for data insertion
mysqli_query($db,"insert into contact_form(NAME,EMAIL_ADDRESS,CONTACT,MESSAGE) values('$name','$email_address','$contact','$message')");
	//$message="Thanks message";
	
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr></tr><tr><td>Mobile</td><td>$contact</td></tr><tr><td>Comment</td><td>$message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="harmoonydesignstudio@gmail.com";
	$mail->Password="csjlgddlnrtwmpth";
	$mail->SetFrom("harmoonydesignstudio@gmail.com");
	$mail->addAddress("harmoonydesignstudio@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	//echo $message;
}


/*include('connection.php');
$message="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['message'])){
	$name=mysqli_real_escape_string($db,$_POST['name']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$mobile=mysqli_real_escape_string($db,$_POST['subject']);
	$message=mysqli_real_escape_string($db,$_POST['message']);
	
	
	
	mysqli_query($db,"insert into contact_form(NAME,EMAIL_ADDRESS,CONTACT,MESSAGE) values('$name','$email','$mobile','$message')");
	//$message="Thanks message";
	
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="harmoonydesignstudio@gmail.com";
	$mail->Password="csjlgddlnrtwmpth";
	$mail->SetFrom("harmoonydesignstudio@gmail.com");
	$mail->addAddress("harmoonydesignstudio@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $message;
}*/
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Interior and Exterior Design</title>
	<link rel="icon" href="images/hds.png" type="image/x-icon" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<style>
	.contact-form-title {
  color: #fc5e28;
  font-family: "Times New Roman", Times, serif;
}
.submit-bt2 {
    background-color: #fc5e28;
    color: white; /* Optional: Adjust text color for better contrast */
}
	</style>
</head>
<body>
	<div class="py-1 top">
		<div class="container">
			<div class="row">
				<div class="col-md text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
					<p class="mb-0 w-100" style="height:30px">
						<!--<span class="fa fa-envelope"></span>-->
						<!--<span class="text">harmoonydesignstudio@gmail.com</span>-->
					</p>
					<p class="mb-0 w-100">
						<!--<a href="https://www.instagram.com/harmoony_design_studio?igsh=eTRjZWJpeTA4ZzYx" class="d-flex align-items-center justify-content-center">--><!--<span class="fa fa-instagram">--><!--<img src="images/insta.png"><i class="sr-only">Instagram</i>--><!--</span>--><!--</a>
-->					</p>
				</div>
				
				
				<!--<div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="https://www.instagram.com/harmoony_design_studio?igsh=eTRjZWJpeTA4ZzYx" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
					<p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Inquire Now</a></p>
				</div>-->
			</div>
		</div>
	</div>
	<div class="pt-4 pb-5">
		<div class="container">
			<div class="row d-flex align-items-start align-items-center px-3 px-md-0">
				<div class="col-md-4 d-flex mb-2 mb-md-0">
				<img src="images/FILN.png">
					<!--<a class="navbar-brand d-flex align-items-center" href="index.php">
						<span class="flaticon flaticon-crane"></span>
						<span class="ml-2">Wilcon <small>Construction Company</small></span>
					</a>-->
				</div>
				<div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="fa fa-map"></span>
					</div>
					<div class="pr-md-4 pl-md-3 pl-3 text">
						<p class="con"><span>Free Call</span> <span>+91 9075069195</span></p>
						<p class="con">Call Us Now 24/7 Customer Support</p>
					</div>
				</div>
				<div class="col-md-4 d-flex topper mb-md-0 align-items-center">
					<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-location-dot"></span>
					</div>
					<div class="text pl-3 pl-md-3">
						<p class="hr"><span>Our Location</span></p>
						<p class="con">PUNE</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
					
					<li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
				</ul>
				<!--<a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Inquire Now</a>-->
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image:url(images/1.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
				
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Contact us</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<!--<span class="subheading">Contact us</span>-->
					<h2 class="mb-4 contact-form-title"><b>Contact Form</b></h2>
					<!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>-->
				</div>
			</div>



			<div class="row block-9">
				<div class="col-md-8">
					 <form id="main-contact-form" name="contact-form" method="post" action="contact.php">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="name" class="form-control" placeholder="Name"  type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="email" class="form-control" placeholder="Email Address" type="email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input name="subject" class="form-control" placeholder="Contact No." required  type="text" maxlength="10">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <div>
                  <center> <button type="submit" class="submit-bt2" name="Submit">Submit</button></center>
                </div>
              </form>
					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="text">
								<p><span>Address:</span><font color="#fc5e28"> Pune</font></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Phone:</span><font color="#fc5e28">+91 9075069195</font></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-envelope"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <font color="#fc5e28">harmoonydesignstudio@gmail.com</font></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="text">
								<p><span>Website</span> <a href="https://harmoonydesignstudio.com/"><font color="#fc5e28">harmoonydesignstudio.com</font></a></p>

							</div>
						</div>
					</div>
				</div>
				<!--<div class="col-md-12">
					<div id="map" class="map"></div>
				</div>-->
			</div>
		</div>
	</section><br>
<footer class="ftco-footer">
		<div class="container mb-5 pb-4">
			<div class="row">
				<!--<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
						<p>Far far away, behind the word mountains, far from the countries.</p>
						<ul class="ftco-footer-social list-unstyled mt-4">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>-->

				<div class="col-lg-4 col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Links</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-md-4">
							<li><a href="index.php"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
							<li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
							<li><a href="services.php"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
								
								<!--<li><a href="gallery.php"><span class="fa fa-chevron-right mr-2"></span>Gallery</a></li>
								<li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>-->
							</ul>
							<!--<ul class="list-unstyled ml-md-5">
								
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
							</ul>-->
						</div>
					</div>
				</div>
             
				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
					<ul class="list-unstyled mr-md-4">
					<h2 class="ftco-heading-2">Links</h2>
					<li><a href="project.php"><span class="fa fa-chevron-right mr-2"></span>Project</a></li>
								<li><a href="gallery.php"><span class="fa fa-chevron-right mr-2"></span>Gallery</a></li>
								
								<li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
					<!--<p>Our Location</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3785.030296962143!2d73.8223991751897!3d18.436933482640388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDI2JzEzLjAiTiA3M8KwNDknMjkuOSJF!5e0!3m2!1sen!2sin!4v1725602151671!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
						<!--<h2 class="ftco-heading-2">Services</h2>-->
						<!--<ul class="list-unstyled">
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New Heavy Equipment</a></li>
						</ul>-->
					</ul></div>
				</div>

				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<!--<h2 class="ftco-heading-2">Have a Questions?</h2>-->
						<div class="block-23 mb-3">
							<ul>
								<li><span class="fa fa-map-marker mr-3"></span><span class="text">Pune</span></li>
								<li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+91 9075069195</span></a></li>
								<li><a href="#"><span class="fa fa-envelope mr-3"></span><span class="text">harmoonydesignstudio@gmail.com</span></a></li>
								<li><a href="https://www.instagram.com/harmoony_design_studio?igsh=eTRjZWJpeTA4ZzYx" class="d-flex align-items-center justify-content-center"><img src="images/insta.png"><i class="sr-only">Instagram</i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-primary">
			<div class="container">
				<div class="row">
					<div class="col-md-6 aside-stretch py-3">
						
						<p class="mb-0" align="right"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<font color="#000000">Copyright © 2024 All rights reserved. </font><a href="https://code-crafter.in/" style="text-decoration: none;">
    <font color="#000000">Code Crafter Services</font></a>	<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</div>
</footer>
		
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="fa fa-close"></span>
						</button>
					</div>
					<div class="modal-body p-4 p-md-5">
						<form action="#" class="appointment-form ftco-animate">
							<h3>Request Quote</h3>
							<div class="">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Select Your Services</option>
												<option value="">Architecture</option>
												<option value="">Renovation</option>
												<option value="">Construction</option>
												<option value="">Interior &amp; Exterior</option>
												<option value="">Chemical Research</option>
												<option value="">Petroleum &amp; Gas</option>
												<option value="">Other Services</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		
		<script src="js/main.js"></script>
		
	</body>
	</html>