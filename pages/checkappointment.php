<?php 
include "lib.php";
$texttitle   = layheadtitle();
$textcover   = layheadcover();
$textservice = layheadservice();
$textfaq     = layheadfaq();
$daftarBooking = daftarBooking();
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta name="author" content="John Doe">
	<meta name="description" content="">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Title -->
	<title>Barbershop</title>
	<!-- Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/ico" href="../images/comb.png" />
	<!-- Plugin-CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/themify-icons.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Main-Stylesheets -->
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body data-spy="scroll" data-target="#primary-menu">
	<div class="preloader">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
	<!--Mainmenu-area-->
	<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
		<div class="container">
			<!--Logo-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="../index.php#home-page" class="navbar-brand logo" style="margin: 0; padding: 3px;">
					<img src="../images/logo1.png" width="150px">
				</a>
			</div>
			<!--Logo/-->
			<nav class="collapse navbar-collapse" id="primary-menu">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#home-page">Home</a></li>
					<li><a href="../index.php#service-page">Service</a></li>
					<li><a href="../index.php#feature-page">Features</a></li>
					<li><a href="../index.php#price-page">Price</a></li>
					<li><a href="../index.php#team-page">Team</a></li>
					<li><a href="../index.php#faq-page">FAQ</a></li>
					<li><a href="../index.php#blog-page">Blog</a></li>
					<li><a href="../index.php#appointment" class="button" style="background: #cc9d0c; padding: 15px 20px; margin-top: 15px; color: black"><i class="ti-calendar"></i> <b>MAKE AN APPOINTMENT</b></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--Mainmenu-area/-->

	<footer class="footer-area relative sky-bg" id="appointment">
		<div class="absolute footer-bg"></div>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
						<div class="page-title">
							<h2>Check Your Appointment</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-3">
						<address class="side-icon-boxes">
							<div class="side-icon-box">
								<div class="side-icon">
									<img src="../images/location-arrow.png" alt="">
								</div>
								<p><strong>Address: </strong> Box 564, Disneyland <br />USA</p>
							</div>
							<div class="side-icon-box">
								<div class="side-icon">
									<img src="../images/phone-arrow.png" alt="">
								</div>
								<p><strong>Telephone: </strong>
									<a href="callto:88210386838">+882 1038 6838</a> <br />
								</p>
							</div>
							<div class="side-icon-box">
								<div class="side-icon">
									<img src="../images/mail-arrow.png" alt="">
								</div>
								<p><strong>E-mail: </strong>
									<a href="mailto:vw70042@student.uph.edu">vw70042@student.uph.edu</a> <br />
									<a href="mailto:vv70031@student.uph.edu">vv70031@student.uph.edu</a> <br />
									<a href="mailto:sk70017@student.uph.edu">sk70017@student.uph.edu</a> <br />
									<a href="mailto:ss70020@student.uph.edu">ss70020@student.uph.edu</a>
								</p>
							</div>
						</address>
					</div>
					<div class="col-xs-12 col-md-9">
						<form action="" method="POST" class="contact-form">
							<div>
								<label>Insert Your Email</label>
								<input type="email" id="email" name="email" class="form-control" placeholder="E-mail address" required="required">
							</div>
							<button class="button" type="submit" name="check">Check</button>
						</form>
						<?php 

						if(!isset($_POST['email'])){
							echo "";
						}else{
							$email = $_POST['email'];
							$sql = mysqli_query($db,"SELECT * from custorder where email='$email'");
						echo "<br>
						<div class='row'>
     				 		<div class='col-lg-12'>
								<div class='panel panel-info'>
									<div class='panel-heading'>Panel heading</div>
									<div class='panel-body'>
           								 <div class='table-responsive'>
											<table class='table table-striped table-bordered table-hover' style='color:black' width='100%'>
												<thead>
													<tr>
														<td>No</td>
														<td>Order ID</td>
														<td>Username</td>
														<td>Service</td>
														<td>Barber</td>
														<td>Date Booking</td>
														<td>Time Booking</td>
														<td>Message</td>
														<td>Time Stamp</td>
														<td>Status</td>
													</tr>
												</thead>
												<tbody>";
												$x = 1;
												while($daftarBooking = mysqli_fetch_array($sql)){
													?>
													<tr>
														<td><?php echo $x; ?></td>
														<td><?php echo $daftarBooking['id']; ?></td>
														<td><?php echo $daftarBooking['username']; ?></td>
														<td><?php echo $daftarBooking['subjek']; ?></td>
														<td><?php echo $daftarBooking['barber']; ?></td>
														<td><?php echo $daftarBooking['datebooking']; ?></td>
														<td><?php echo $daftarBooking['timebooking']; ?></td>
														<td><?php echo $daftarBooking['message']; ?></td>
														<td><?php echo $daftarBooking['timestamp']; ?></td>
														<td><?php echo $daftarBooking['status']; ?></td>	
													</tr>
													<?php
													$x++; 
													}
												}
												?>							
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 pull-right">
						<ul class="social-menu text-right x-left">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-google"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
							<li><a href="#"><i class="ti-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<p>&copy;Copyright 2018 All right reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--Vendor-JS-->
	<script src="../js/vendor/jquery-1.12.4.min.js"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<!--Plugin-JS-->
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/contact-form.js"></script>
	<script src="../js/jquery.parallax-1.1.3.js"></script>
	<script src="../js/scrollUp.min.js"></script>
	<script src="../js/magnific-popup.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<!--Main-active-JS-->
	<script src="../js/main.js"></script>
</body>
</html>
