<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['nophone'];

   $ses_sql = mysqli_query($conn,"select * from users where nophone = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $nophone = $row['nophone'];
   $username = $row['username'];

?>