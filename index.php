<?php 
include "/pages/lib.php";
$texttitle   = layheadtitle();
$textcover   = layheadcover();
$textservice = layheadservice();
$textfaq     = layheadfaq();
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
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/ico" href="images/comb.png" />
	<!-- Plugin-CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main-Stylesheets -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
				<a href="#home-page" class="navbar-brand logo" style="margin: 0; padding: 3px;">
					<img src="images/logo1.png" width="150px">
				</a>
			</div>
			<!--Logo/-->
			<nav class="collapse navbar-collapse" id="primary-menu">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#home-page">Home</a></li>
					<li><a href="#service-page">Service</a></li>
					<li><a href="#feature-page">Features</a></li>
					<li><a href="#price-page">Price</a></li>
					<li><a href="#team-page">Team</a></li>
					<li><a href="#faq-page">FAQ</a></li>
					<li><a href="#blog-page">Blog</a></li>
					<li><a href="#appointment" class="button" style="background: #cc9d0c; padding: 15px 20px; margin-top: 15px; color: black"><i class="ti-calendar"></i> <b>MAKE AN APPOINTMENT</b></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--Mainmenu-area/-->

	<!--Header-area-->
	<header class="header-area  full-height relative v-center" id="home-page">
		<div class="absolute anlge-bg"></div>
		<div class="container">
			<div class="row v-center">
				<div class="col-xs-12 col-md-7 header-text">
					<h2><?php echo $textcover['subjek1']; ?></h2>
					<h2><?php echo $textcover['subjek2']; ?></h2>
					<p><?php echo $textcover['description']; ?></p>
					<a href="#blog-page" class="button">Explore More</a>
				</div>
			</div>
		</div>
	</header>
	<!--Header-area/-->

	<!--Feature-area-->
	<section class="gray-bg section-padding" id="service-page" style="padding: 200px 0;">
		<div class="container">
			<div class="row">
				<?php
				foreach ($textservice as $key => $textservice) {
					?>
					<div class="col-xs-12 col-sm-4">
						<div class="box">
							<div class="box-icon">
								<img src="images/<?php echo $textservice['picture'] ?>" alt="">
							</div>
							<h4><?php echo $textservice['subjek']; ?></h4>
							<p><?php echo $textservice['description']; ?></p>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<!--Feature-area/-->
	<section class="angle-bg sky-bg1 section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active row">
								<div class="v-center">
									<div class="col-xs-12 col-md-6">
										<div class="caption-title" data-animation="animated fadeInUp">
											<h2>Easy to build</h2>
										</div>
										<div class="caption-desc" data-animation="animated fadeInUp">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
										</div>
										<div class="caption-button" data-animation="animated fadeInUp">
											<a href="#" class="button">Read more</a>
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo one" data-animation="animated fadeInRight">
											<img src="images/screen-1.jpg" alt="">
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo two" data-animation="animated fadeInRight">
											<img src="images/screen-2.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="item row">
								<div class="v-center">
									<div class="col-xs-12 col-md-6">
										<div class="caption-title" data-animation="animated fadeInUp">
											<h2>Easy to use</h2>
										</div>
										<div class="caption-desc" data-animation="animated fadeInUp">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
										</div>
										<div class="caption-button" data-animation="animated fadeInUp">
											<a href="#" class="button">Read more</a>
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo one" data-animation="animated fadeInRight">
											<img src="images/screen-3.jpg" alt="">
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo two" data-animation="animated fadeInRight">
											<img src="images/screen-4.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="item row">
								<div class="v-center">
									<div class="col-xs-12 col-md-6">
										<div class="caption-title" data-animation="animated fadeInUp">
											<h2>Easy to customize</h2>
										</div>
										<div class="caption-desc" data-animation="animated fadeInUp">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
										</div>
										<div class="caption-button" data-animation="animated fadeInUp">
											<a href="#" class="button">Read more</a>
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo one" data-animation="animated fadeInRight">
											<img src="images/screen-1.jpg" alt="">
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo two" data-animation="animated fadeInRight">
											<img src="images/screen-2.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="item row">
								<div class="v-center">
									<div class="col-xs-12 col-md-6">
										<div class="caption-title" data-animation="animated fadeInUp">
											<h2>Awesome design</h2>
										</div>
										<div class="caption-desc" data-animation="animated fadeInUp">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
										</div>
										<div class="caption-button" data-animation="animated fadeInUp">
											<a href="#" class="button">Read more</a>
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo one" data-animation="animated fadeInRight">
											<img src="images/screen-3.jpg" alt="">
										</div>
									</div>
									<div class="col-xs-6 col-md-3">
										<div class="caption-photo two" data-animation="animated fadeInRight">
											<img src="images/screen-4.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Indicators -->
						<ol class="carousel-indicators caption-indector">
							<li data-target="#caption_slide" data-slide-to="0" class="active">
								<strong>Lorem ipsum </strong>consectetur adipisicing elit.
							</li>
							<li data-target="#caption_slide" data-slide-to="1">
								<strong>Lorem ipsum </strong>consectetur adipisicing elit.
							</li>
							<li data-target="#caption_slide" data-slide-to="2">
								<strong>Lorem ipsum </strong>consectetur adipisicing elit.
							</li>
							<li data-target="#caption_slide" data-slide-to="3">
								<strong>Lorem ipsum </strong>consectetur adipisicing elit.
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="gray-bg section-padding" id="feature-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>SPECIAL FEATURES</h2>
						<p><?php echo $texttitle['specialfeature']; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/portfolio-icon-1.png" alt="">
						</div>
						<h4>WELL TRAINED BARBERS</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/portfolio-icon-2.png" alt="">
						</div>
						<h4>10 YEARS EXPERIENCE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/portfolio-icon-3.png" alt="">
						</div>
						<h4>BRANDED PRODUCTS</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/portfolio-icon-4.png" alt="">
						</div>
						<h4>GREAT LOCATION</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/portfolio-icon-5.png" alt="">
						</div>
						<h4>CUSTOMER SERVICE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/portfolio-icon-6.png" alt="">
						</div>
						<h4>ACCESS MOBILE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="price-area section-padding" id="price-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>PRICING</h2>
						<p><?php echo $texttitle['price']; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="price-table">
						<?php 
						$sql=mysqli_query($db, "SELECT * FROM layprice WHERE id='1'");
						while($textprice1=mysqli_fetch_array($sql)){
							?>
							<h3 class="text-uppercase price-title"><?php echo $textprice1['subjek']; ?></h3>
							<hr>
							<ul class="list-unstyled">
								<li><strong class="amount">IDR <span class="big"><?php echo $textprice1['pricing']; ?></span></strong></li>
								<li><?php echo $textprice1['description1']; ?></li>
								<li><?php echo $textprice1['description2']; ?></li>
								<li><?php echo $textprice1['description3']; ?></li>
								<li><?php echo $textprice1['description4']; ?></li>
								<li><?php echo $textprice1['description5']; ?></li>
							</ul>
							<hr>
							<a href="#appointment" class="button">Purchase</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="price-table active">
						<span class="price-info"><span class="ti-crown"></span></span>
						<?php 
						$sql=mysqli_query($db, "SELECT * FROM layprice WHERE id='2'");
						while($textprice2=mysqli_fetch_array($sql)){
							?>
							<h3 class="text-uppercase price-title"><?php echo $textprice2['subjek']; ?></h3>
							<hr>
							<ul class="list-unstyled">
								<li><strong class="amount">IDR <span class="big"><?php echo $textprice2['pricing']; ?></span></strong></li>
								<li><?php echo $textprice2['description1']; ?></li>
								<li><?php echo $textprice2['description2']; ?></li>
								<li><?php echo $textprice2['description3']; ?></li>
								<li><?php echo $textprice2['description4']; ?></li>
								<li><?php echo $textprice2['description5']; ?></li>
							</ul>
							<hr>
							<a href="#appointment" class="button">Purchase</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="price-table">
						<?php 
						$sql=mysqli_query($db, "SELECT * FROM layprice WHERE id='3'");
						while($textprice3=mysqli_fetch_array($sql)){
							?>
							<h3 class="text-uppercase price-title"><?php echo $textprice3['subjek']; ?></h3>
							<hr>
							<ul class="list-unstyled">
								<li><strong class="amount">IDR <span class="big"><?php echo $textprice3['pricing']; ?></span></strong></li>
								<li><?php echo $textprice3['description1']; ?></li>
								<li><?php echo $textprice3['description2']; ?></li>
								<li><?php echo $textprice3['description3']; ?></li>
								<li><?php echo $textprice3['description4']; ?></li>
								<li><?php echo $textprice3['description5']; ?></li>
							</ul>
							<hr>
							<a href="#appointment" class="button">Purchase</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-padding gray-bg" id="team-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>Special team</h2>
						<p><?php echo $texttitle['specialteam']; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="single-team">
						<div class="team-photo">
							<img src="images/t-member-01.jpg" alt="">
						</div>
						<h4>VINCENT</h4>
						<h6>Founder</h6>
						<ul class="social-menu">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
							<li><a href="#"><i class="ti-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="single-team">
						<div class="team-photo">
							<img src="images/t-member-08.jpg" alt="">
						</div>
						<h4>VANDY WIRANATA</h4>
						<h6>Creative Director</h6>
						<ul class="social-menu">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
							<li><a href="#"><i class="ti-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="single-team">
						<div class="team-photo">
							<img src="images/t-member-06.jpg" alt="">
						</div>
						<h4>STEVEN KHOSASIH</h4>
						<h6>Marketing</h6>
						<ul class="social-menu">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
							<li><a href="#"><i class="ti-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="single-team">
						<div class="team-photo">
							<img src="images/t-member-02.jpg" alt="">
						</div>
						<h4>SHERLY</h4>
						<h6>UX Designer</h6>
						<ul class="social-menu">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
							<li><a href="#"><i class="ti-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial-area section-padding gray-bg overlay">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>Testimonial</h2>
						<p><?php echo $texttitle['testimonial'] ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<div class="testimonials">
						<div class="testimonial">
							<div class="testimonial-photo">
								<img src="images/avatar-small-1.png" alt="">
							</div>
							<h3>STEVE JOBS</h3>
							<p>Collaboratively enhance intermandated innovation via cutting-edge core competencies. Professionally extend covalent e-markets and mission-critical communities. Dramatically communicate revolutionary web services for interactive synergy. Synergistically.</p>
						</div>
						<div class="testimonial">
							<div class="testimonial-photo">
								<img src="images/avatar-small-2.png" alt="">
							</div>
							<h3>COLLIS TA'EED</h3>
							<p>Intrinsicly synergize excellent content whereas user friendly action items. Rapidiously transition multimedia based information after top-line alignments. Proactively e-enable front-end e-commerce without mission-critical customer service.</p>
						</div>
						<div class="testimonial">
							<div class="testimonial-photo">
								<img src="images/avatar-small-3.png" alt="">
							</div>
							<h3>JOHN DOE</h3>
							<p>Compellingly engage multimedia based niche markets via value-added manufactured products. Competently formulate goal-oriented content for installed base users. Uniquely leverage other's granular ROI without 24/365 collaboration and idea-sharing.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="gray-bg section-padding" id="faq-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>Frequently Asked Questions</h2>
						<p><?php echo $texttitle['faq']; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<div class="panel-group" id="accordion">
						<div class="panel">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true"><?php echo $textfaq['question']; ?></a>
							</h4>
							<div id=collapse1 class="panel-collapse collapse in">
								<p><?php echo $textfaq['answer']; ?></p>
							</div>
						</div>
						<?php
						$x = 2; 
						$sql = mysqli_query($db, "SELECT * FROM layfaq");
						while($hsl=mysqli_fetch_array($sql)){
							?>
							<div class="panel">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="<?php echo '#collapse'.$x ?>"><?php echo $hsl['question']; ?></a>
								</h4>
								<div id="<?php echo 'collapse'.$x ?>" class="panel-collapse collapse">
									<p><?php echo $hsl['answer']; ?></p>
								</div>
							</div>
							<?php 
							$x++;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-padding  client-area1 " id="client-page">
		<div class="container">
			<div class="row text-center">
				<div class="col-xs-12">
					<div class="clients">
						<div class="item">
							<img src="images/themeforest.gif" alt="">
						</div>
						<div class="item">
							<img src="images/coadcanyon.gif" alt="">
						</div>
						<div class="item">
							<img src="images/graphicriver.gif" alt="">
						</div>
						<div class="item">
							<img src="images/docean.gif" alt="">
						</div>
						<div class="item">
							<img src="images/audiojungle.gif" alt="">
						</div>
						<div class="item">
							<img src="images/actividen.gif" alt="">
						</div>
						<div class="item">
							<img src="images/photodone.gif" alt="">
						</div>
						<div class="item">
							<img src="images/videgub.gif" alt="">
						</div>
						<div class="item">
							<img src="images/themeforest.gif" alt="">
						</div>
						<div class="item">
							<img src="images/coadcanyon.gif" alt="">
						</div>
						<div class="item">
							<img src="images/graphicriver.gif" alt="">
						</div>
						<div class="item">
							<img src="images/docean.gif" alt="">
						</div>
						<div class="item">
							<img src="images/audiojungle.gif" alt="">
						</div>
						<div class="item">
							<img src="images/actividen.gif" alt="">
						</div>
						<div class="item">
							<img src="images/photodone.gif" alt="">
						</div>
						<div class="item">
							<img src="images/videgub.gif" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-padding gray-bg" id="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="single-blog">
						<div class="blog-photo">
							<img src="images/haircut.jpg" alt="">
						</div>
						<div class="blog-content">
							<h3><a href="#">Beautiful Place for your Great Journey</a></h3>
							<ul class="blog-meta">
								<li><span class="ti-user"></span> <a href="#">Admin</a></li>
								<li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="single-blog">
						<div class="blog-photo">
							<img src="images/hairwash.jpg" alt="">
						</div>
						<div class="blog-content">
							<h3><a href="#">Beautiful Place for your Great Journey</a></h3>
							<ul class="blog-meta">
								<li><span class="ti-user"></span> <a href="#">Admin</a></li>
								<li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="single-blog">
						<div class="blog-photo">
							<img src="images/shave.jpg" alt="">
						</div>
						<div class="blog-content">
							<h3><a href="#">Beautiful Place for your Great Journey</a></h3>
							<ul class="blog-meta">
								<li><span class="ti-user"></span> <a href="#">Admin</a></li>
								<li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer-area relative sky-bg" id="appointment">
		<div class="absolute footer-bg"></div>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
						<div class="page-title">
							<h2>Make An Appointment</h2>
							<p><?php echo $texttitle['appointment']; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<address class="side-icon-boxes">
							<div class="side-icon-box">
								<div class="side-icon">
									<img src="images/location-arrow.png" alt="">
								</div>
								<p><strong>Address: </strong> Box 564, Disneyland <br />USA</p>
							</div>
							<div class="side-icon-box">
								<div class="side-icon">
									<img src="images/phone-arrow.png" alt="">
								</div>
								<p><strong>Telephone: </strong>
									<a href="callto:88210386838">+882 1038 6838</a> <br />
								</p>
							</div>
							<div class="side-icon-box">
								<div class="side-icon">
									<img src="images/mail-arrow.png" alt="">
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
					<div class="col-xs-12 col-md-8">
						<form action="" method="post" class="contact-form">
							<div class="form-double">
								<input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required">
								<input type="email" id="email" name="email" class="form-control" placeholder="E-mail address" required="required">
							</div>
							<input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number" required="required">
							<div>
								<label>Choose Service</label>
								<select id="subjek" name="subjek" class="form-control" required="required">
									<option value="" selected disabled>-- Select Service --</option>
									<?php 
									$sql = mysqli_query($db, "SELECT * FROM layprice" );
									while ($hsl = mysqli_fetch_array($sql)) {
										?>
										<option value="<?php echo $hsl['subjek']; ?>"><?php echo $hsl['subjek']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div>
								<label>Choose Barber</label>
								<select id="barber" name="barber" class="form-control" required="required">
									<option value="" selected disabled>-- Select Barber --</option>
									<?php 
									$sql = mysqli_query($db, "SELECT * FROM laybarber" );
									while ($hsl = mysqli_fetch_array($sql)) {
										?>
										<option value="<?php echo $hsl['barber']; ?>"><?php echo $hsl['barber']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div>
								<label>Choose Date</label>
								<input type="date" id="datebooking" name="datebooking" class="form-control" placeholder="" required="required">
							</div>
							<div>
								<label>Choose Time</label>
								<select id="timebooking" name="timebooking" class="form-control" placeholder="" required="required">
									<option value="" selected disabled>-- Select time --</option>
									<option value="10.00">10:00</option>
									<option value="10.30">10:30</option>
									<option value="11.00">11:00</option>
									<option value="11.30">11:30</option>
									<option value="12.00">12:00</option>
									<option value="12.30">12:30</option>
									<option value="13.00">13:00</option>
									<option value="13.30">13:30</option>
									<option value="14.00">14:00</option>
									<option value="14.30">14:30</option>
									<option value="15.00">15:00</option>
									<option value="15.30">15:30</option>
									<option value="16.00">16:00</option>
									<option value="16.30">16:30</option>
									<option value="17.00">17:00</option>
									<option value="17.30">17:30</option>
								</select>
							</div>
							<div>
								<label>Booking Information (Optional)</label>
								<textarea name="message" id="message" name="message" rows="5" class="form-control" placeholder="Your message"></textarea>
							</div>
							<button class="button" type="submit" name="registrasi">Request Booking</button>
							<a href="pages/checkappointment.php" type="button" class="button" style="background-color: #f0ad4e;">Check Your Appointment</a>
						</form>

						<?php 

						if (isset($_POST['registrasi'])) {

							$username    = mysqli_real_escape_string($db, $_POST['username']);
							$email       = mysqli_real_escape_string($db, $_POST['email']);
							$phone       = mysqli_real_escape_string($db, $_POST['phone']);
							$subjek      = mysqli_real_escape_string($db, $_POST['subjek']);
							$barber      = mysqli_real_escape_string($db, $_POST['barber']);
							$datebooking = mysqli_real_escape_string($db, $_POST['datebooking']);
							$timebooking = mysqli_real_escape_string($db, $_POST['timebooking']);
							$message     = mysqli_real_escape_string($db, $_POST['message']);

							$cek = mysqli_num_rows(mysqli_query($db, "SELECT * FROM custorder WHERE datebooking='$datebooking' and timebooking='$timebooking'"));

							if ($cek > 0) {
								echo "<script>window.alert('Tanggal dan Waktu Order Sudah Penuh, Silakan Melakukan Appointment Ulang atau Hubungi Customer Service Kami.')
								window.location='index.php?status=gagal'</script>";
							} else { 
								mysqli_query($db, "INSERT INTO custorder (username,email,phone,subjek,barber,datebooking,timebooking,message) VALUES ('$username','$email','$phone','$subjek','$barber','$datebooking','$timebooking','$message')");
								echo "<script>window.alert('Order Sukses, Kami Akan Segera Menghubungi Anda.')
								window.location='index.php?status=sukses'</script>";
							}
						}
						?>
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
					<div class="col-xs-12 col-sm-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum quaerat sed nemo temporibus unde, beatae vel.</p>
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
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<!--Plugin-JS-->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/contact-form.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/scrollUp.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/wow.min.js"></script>
	<!--Main-active-JS-->
	<script src="js/main.js"></script>
</body>
</html>
