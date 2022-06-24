<?php
$connect = mysqli_connect("localhost","root","","customer");

if (isset($_POST['contact'])) {

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];

	$query = "INSERT INTO contact(email,subject,comments) VALUES('$email','$subject','$comments')";
	$result = mysqli_query($connect,$query);

	if($result) {
		echo "<script>alert('You have successfully contact us')</script>";
	}else{
		echo "<script>alert('Failed to contact')</script>";
	}

}

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
		input[type=submit]{
			background:#ed2d46;
			color:white;
			border:none;
		}

		input[type=submit]:hover{
			background:black;
			color:white;
		}

	</style>

</head>
<body class="barber_version">



    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
						<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="title title-1 text-center">
							<div class="much">
								<img src="uploads/mustache.png" alt=""/>
							</div>

							<div class="title--heading">
								<h1>Contact</h1>
							</div>
							<div class="clearfix"></div>

							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">Contact</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->

		<div id="contact" class="section wb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<small>LET'S MAKE AN CONTACT FOR YOUR LIFE</small>
						<h3>Contact</h3>
					</div>
				</div><!-- end title -->

				<div class="panel-body">
            <form method="post">
              <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  value="" required
				  placeholder ="Enter your email"
                />
              </div>
			  <div class="form-group">
                <label for="subject"><b>Subject</b></label>
                <input
                  type="subject"
                  class="form-control"
                  id="subject"
                  name="subject"
                  value="" required
				  placeholder ="Enter your subject"
                />
              </div>
			  <div class="form-group">
                <label for="comments"><b>Comments</b></label>
                <textarea type="comments" class="form-control" id="comments" name="comments" placeholder ="Enter a comments">
				</textarea>
              </div>
              <input type="submit" name="contact" value="submit" class="btn btn-primary" />
            </form>
          </div>
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
							<a href="#">Contact</a>
							<a href="#">About</a>
							<a href="#">Faq</a>
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
