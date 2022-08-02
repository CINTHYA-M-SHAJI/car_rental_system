<?php

include 'dbconnect.php';
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$licence=$_POST['licence'];
$password = $_POST['password'];

$sql = "UPDATE user SET `name`='$name',`address`='$address', email='$email', mobile='$mobile',licence='$licence', `password`='$password' WHERE `name`='$name'";
 
if ($conn->query($sql) === TRUE) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Updated Profile successfully');
    window.location.href='../user/profile.php';
    </script>");
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>