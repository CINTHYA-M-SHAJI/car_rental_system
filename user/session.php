<?php
   include('dbconnect.php');
   session_start();
   
   $name = $_SESSION['name'];
   
   $ses_sql = mysqli_query($conn,"SELECT `name` FROM `user` WHERE `name` = '.$_SESSION["name"].'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   
   if(isset($_SESSION['name'])){
      header("location: userindex.php");
      die();
   }
?>