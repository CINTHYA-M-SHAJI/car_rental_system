<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    
include 'dbconnect.php';

$stock=$_POST['stock'];

$sql = "SELECT * FROM `car` WHERE `stock` != 0 ";

	
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$stock=$row['stock'];

$count = mysqli_num_rows($result);

if($count) {
	  
	//    echo $name;
	//    echo $result;
	header("location:view_car.php");
	}

}
?>