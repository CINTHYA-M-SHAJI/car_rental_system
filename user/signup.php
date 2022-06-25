<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';   
    
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $licence = $_POST["licence"]; 
    $address = $_POST["address"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"]; 

      
    $sql = "SELECT * FROM `user` WHERE name = '$name' ";
    
    $result = mysqli_query($conn, $sql);
    
 
    $num = mysqli_num_rows($result); 
    
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && ($exists==false)) {
    

            // Password Hashing is used here. 
            $query =  "INSERT INTO `user`( `name`, `email`,`licence`, `address`, `password`,
             `usertype`) VALUES ('$name',' $email','$licence','$address','$password','user')";

        
    
            $result = mysqli_query($conn, $query);
    
            if ($result==1) {
                
                header("location: login.php");
                
            }
        } 
        else { 
            echo "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
     echo "Username already exist"; 
   } 
    
}//end if   
    
?>