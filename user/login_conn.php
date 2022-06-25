<?php
session_start();

    
$showAlert = false; 
$showError = false; 
$exists=false;

    
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';  

    
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']); 
	
	
	$sql = "SELECT `name`, `usertype` FROM `user` WHERE `email` = '$email' AND `password`= '$password'";
	
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
	$name = $row["name"];
    $usertype = $row["usertype"];
    echo $usertype;

	// echo $result;
	$count = mysqli_num_rows($result);
	

   
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	  
	if($usertype=='admin') {
	  
	//    echo $name;
	//    echo $result;
	header("location: ../admin/adminhome.php");
	}

		 else if($usertype=='user'){
			$_SESSION['name']=$name;
			header("location: ../user/userindex.php");

		 }
	    
	else {
	   echo "Error:Email & password";
	   $error = "Your Login Name or Password is invalid";
	
 }
}
?>