<?php
include("session.php");
?>

<?php
$connect = mysqli_connect("localhost","root","","customer");

if(isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "UPDATE booking SET status='declined' WHERE id='$id'";
	$result = mysqli_query($connect, $sql);
	if($result){
		echo '<script>alert("cancel booking success!");</script>';
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
		.btn-primary{
			background:#ed2d46;
			color:white;
			border:none;
		}

		.btn-primary:hover{
			background:black;
			color:white;
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
		  <span class="loading" data-name="Loading">SMBarber Loading</span>
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
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="user_booking_detail.php">Booking Detail</a></li>
						<li class="nav-item"><a class="nav-link" href="appointment.php">Appointment</a></li>
						<li class="nav-item"><a class="nav-link" href="login_contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
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
								<h1>Booking Detail</h1>
							</div>
							<div class="clearfix"></div>

							<ol class="breadcrumb">
								<li><a href="index-3.html">Home</a></li>
								<li class="active">Booking Detail</li>
							</ol>
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->

		<div id="services" class="section lb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
					<small>LETS CHECK YOUR APPOINTMENT DETAIL</small>
					<h3>Booking detail</h3>
					</div>

					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "customer";

					$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (mysqli_connect_errno())
						{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						$user_check = $_SESSION['nophone'];

					?>

				<div>

                 <table class="table table-striped table-bordered mydatatables" style="width: 100%">
                   <br><br>
                   <tr>
				     <th>ID</th>
                     <th>Fullname</th>
                     <th>No. Phone</th>
                     <th>Date</th>
					 <th>Time</th>
					 <th>Comments</th>
					 <th>Status</th>
					 <th>Action</th>
                   </tr>

                   <?php
				   $no = 1;
                   $sql = ("SELECT * FROM booking WHERE status ='approved'");
                   $result = mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_array($result)){
                      if($row['nophone'] == $user_check){
                     ?>
                   <tr>
				     <td><?php echo $no++ ;;?></td>
				   	 <td><?php echo $row['fullname'];;?></td>
                     <td><?php echo $row['nophone'];;?></td>
                     <td><?php echo $row['date'];;?></td>
                     <td><?php echo $row['time'];;?></td>
					 <td><?php echo $row['comments'];;?></td>
					 <td><?php echo $row['status'];;?></td>
					 <td><a onclick="return confirm_delete()" class="btn btn-primary" href="user_booking_detail.php?id=<?php echo $row['id']; ?>">Cancel</a></td>
                   </tr>
                   <?php
                  }
                 }
                    ?>
                 </table>
               </div>
               <?php
                 $conn->close();
                ?>

					<script>
                        function confirm_delete(){
                            return confirm("are you sure?");
                        }
                	</script>


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
