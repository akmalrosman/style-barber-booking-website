<?php

session_start();
include("config.php");

if (!isset($_SESSION['nophone'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Site Metas -->
    <title>Style Barber</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		.img-hairstyling{
			width: 300px;
		}
		.img-shaving{
			width: 300px;
		}
		.img-facemasking{
			width: 300px;
		}
	</style>

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <div class="mus">
			<img src="images/lode-img.png" alt="" />
		  </div>
		  <span class="loading" data-name="Loading">StyleBarber Loading</span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="home.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>


				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="user_booking_detail.php">Booking Detail</a></li>
						<li class="nav-item"><a class="nav-link" href="appointment.php">Appointment</a></li>
						<li class="nav-item"><a class="nav-link" href="login_contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

<div id="home" class="parallax">
		<div id="full-width" class="owl-carousel owl-theme home-hero">
			<div class="text-center item slider-01 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>Style Barber Shop</strong><br>
						in Pasir Gudang</h2>
						<p class="lead">with Style Barber, we offer the best barber prices <br> and services to meet customer needs</p>
						<a href="contact.php" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="text-center item slider-02 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>Style Barber Shop</strong><br>
						in Pasir Gudang</h2>
						<p class="lead">with Style Barber, we offer the best barber prices <br> and services to meet customer needs</p>
						<a href="contact.php" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end section -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="section wb">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-left">
						<div class="message-box">
							<h4>About</h4>
							<h2>Welcome to Style Barber</h2>
							<p class="lead">with Style Barber, we offer the best barber prices and services to meet customer needs.</p>

							<p> A barbershop is one of the places where people go to get their hair cut. You might visit a barbershop at the beginning of every summer to get a short crew cut. While some hair cutters call themselves stylists and the places where they work salons, others are barbers who trim hair and shave necks in barbershops. </p>

						</div><!-- end messagebox -->
					</div><!-- end col -->
					<div class="col-md-6 text-center">
						<div class="right-box">
							<img class="img-fluid" src="uploads/about-img.jpg" alt="" />
						</div>
					</div><!-- end col -->
				</div><!-- end row -->


						</div>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<div id="pricing" class="section lb">
				<div class="container">
					<div class="section-title row text-center">
						<div class="col-md-8 offset-md-2">
						<small>OUR BABRER PRICING</small>
						<h3>BABRER PRICING</h3>
						</div>
					</div><!-- end title -->
					<div class="row flex-items-xs-middle flex-items-xs-center">

						<!-- Table #1  -->
						<div class="col-xs-12 col-lg-4">
						  <div class="card text-center">
							<div class="card-block">
							  <h4 class="card-title pricing-ti">
								Shaving
							  </h4>
							  <div class="line-pricing">
							  <img class="img-shaving" src="https://static.sscontent.com/prodimg/thumb/500/500/products/124/v1015070_prozis_the-classic-barber-shop-cool-shave-shaving-gel-100-ml_6.jpg" alt="">
								<p>It is like an exfoliation treatment. The shave itself is especially good for getting rid of in-growing hairs as the cut throat razor literally pulls each of them out.</p>
								<a href="#">RM 8</a>
							  </div>
							</div>
						  </div>
						</div>

						<!-- Table #1  -->
						<div class="col-xs-12 col-lg-4">
						  <div class="card text-center">
							<div class="card-block">
							  <h4 class="card-title pricing-ti">
								Face Masking
							  </h4>
							  <div class="line-pricing">
							  <img class="img-facemasking" src="https://www.hji.co.uk/wp-content/efs/2018/07/Add-on-Services-Feat-imageshutterstock_583807345.jpg" alt="">
								<p>Face masking work to cleanse and purify the skin from dirt and toxins, simply applied to targeted areas of the face to loosen blackheads and exfoliate the top layer of dead skin cells.</p>
								<a href="#">RM 10</a>
							  </div>
							</div>
						  </div>
						</div>

						<!-- Table #1  -->
						<div class="col-xs-12 col-lg-4">
						  <div class="card text-center">
							<div class="card-block">
							  <h4 class="card-title pricing-ti">
								Hair Styling
							  </h4>
							  <div class="line-pricing">
							  <img class="img-hairstyling" src="https://www.menshairstylestoday.com/wp-content/uploads/2016/09/Barbershop-Hairstyles-Low-Taper-Fade-with-Long-Textured-Top.jpg" alt="">
								<p>Hair styling include washing, coloring and cleaning hair, recommending and selling salon products and staying updated on ongoing hair styling trends.</p>
								<a href="#">RM 15</a>
							  </div>
							</div>
						  </div>
						</div>
					</div>
			</div>
		</div>

    <img class="img-gallery" src="images/gallery.png" alt="">

							<div class="t-bottom"></div>
						</div><!--widget -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<div id="testimonials" class="parallax section db parallax-inner-bg">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small>STAY GOLD BARBER SHOP</small>
						<h3>STYLE BARBER</h3>
					</div>
				</div><!-- end title -->

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="testi-carousel owl-carousel owl-theme">
							<div class="testimonial clearfix">
								<div class="testi-meta">

						</div><!-- end carousel -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<div class="copyrights">
			<div class="container">
				<div class="footer-distributed">
					<div class="footer-left">
						<p class="footer-links">
							<a href="login_contact.php">Contact</a>
							<a href="#">About</a>
						</p>
						<p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">StyleBarber</a></p>
					</div>
				</div>
			</div><!-- end container -->
		</div><!-- end copyrights -->
	</div>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>
