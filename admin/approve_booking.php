<?php
$connect = mysqli_connect("localhost","root","","customer");

if (isset($_GET['action'])) {

    if($_GET["action"] == "approve"){
        $id = $_GET["id"];
        $sql = "UPDATE booking SET status='approved' WHERE id='$id'";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo '<script>alert("approve success!");</script>';
        }
    }

    if($_GET["action"] == "decline"){
        $id = $_GET["id"];
        $sql = "UPDATE booking SET status='declined' WHERE id='$id'";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo '<script>alert("decline success!");</script>';
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Style Barber Admin</title>

      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      <!-- Favicon icon -->
      <link rel="icon" href="" type="">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

      <!-- Button -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>

  <body>
  <body>

       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="welcome.php">
                           <h4> Admin Panel </h4>
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">
                           <li class="header-notification">
                               <a href="#!">
                                   <i class="ti-bell"></i>
                                   <span class="badge bg-c-pink"></span>
                               </a>
                               <ul class="show-notification">
                                   <li>
                                       <h6>Notifications</h6>
                                   </li>
                                   <li>
                                       <div class="media">
                                           <img class="d-flex align-self-center img-radius" src="" alt="">
                                           <div class="media-body">
                                               <h5 class="notification-user"></h5>
                                               <p class="notification-msg"></p>
                                               <span class="notification-time"></span>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                           </li>

                           <li class="user-profile header-notification">
                               <a href="#!">
                                   <img src="assets/images/avatar-5.jpg" class="img-radius" alt="User-Profile-Image">
                                   <span>Barber Admin</span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="logout.php">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="welcome.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Customer Booking</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <li class="active">
                                        <a href="approve_booking.php">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Approved Booking</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </li>
                                <li>
                                    <a href="decline_booking.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Declined Booking</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="booking_detail.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Booking Detail</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Customer Data</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="customer_history.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Customer History</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="customer_feedback.php">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Customer Feedback</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">
                                      <h2><b>APPROVE BOOKING</b></h2>
                                      <div class="container mb-3 mt-3">
                                          <form method="POST" action="">
                                          <table class="table table-striped table-bordered mydatatables" style="width: 100%">
                                                <tr>
                                                    <th> ID </th>
                                                    <th> Full Name </th>
                                                    <th> No. Phone </th>
                                                    <th> Date </th>
                                                    <th> Time </th>
                                                    <th> Comments </th>
                                                    <th> Action </th>
                                                    <th> Action </th>
                                                </tr>
                                                <?php
                                                $conn = mysqli_connect("localhost","root","","customer");
                                                if ($conn-> connect_error){
                                                    die("Connection failed:". $conn-> connect_error);
                                                }

                                                if(isset($_POST["filterbooking"])){
                                                    $filter = $_POST["filterbooking"];

                                                    $sql = "SELECT * FROM booking WHERE status='$filter' ORDER BY id";
                                                }else{
                                                    $sql = "SELECT * FROM booking WHERE status='submitted' ORDER BY id";
                                                }

                                                $result = $conn-> query($sql);

                                                $no = 1;
                                                if ($result-> num_rows > 0){
                                                    while ($row = $result-> fetch_assoc()){
                                                        echo'<tr>';
                                                        echo'<td>' . $no++ . '</td>';
                                                        echo'<td>' . $row["fullname"] . '</td>';
                                                        echo'<td>' . $row["nophone"] . '</td>';
                                                        echo'<td>' . $row["date"] . '</td>';
                                                        echo'<td>' . $row["time"] . '</td>';
                                                        echo'<td>' . $row["comments"] . '</td>';
                                                        echo'<td>';
                                                        echo '<a class="w3-button w3-green" href="approve_booking.php?action=approve&id=' . $row["id"] . '" >Approve</a>';
                                                        echo'</td>';
                                                        echo'<td>';
                                                        echo '<a onclick="return confirm_delete()" class="w3-button w3-red" href="approve_booking.php?action=decline&id=' . $row["id"] . '" >Decline</a>';
                                                        echo'</td>';
                                                        echo'</tr>';

                                                    }
                                                    echo "</tables>";

                                                }
                                                else{
                                                    echo "0 result";


                                                }
                                                $conn-> close();

                                                ?>

                                            </tables>
                                            </form>

                                            <script>
                                                function confirm_delete(){
                                                    return confirm("are you sure?");
                                                }
                                            </script>

                                            <form action='' method='post'>
                                                <select name="filterbooking">
                                                <option selected="selected" value="submitted">Submitted</option>
                                                <option value="approved">Approved</option>
                                                </select>
                                                <br />
                                                <input type='submit' value = 'Filter'>
                                            </form >

                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Warning Section Starts -->

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
