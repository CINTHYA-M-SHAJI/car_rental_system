<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'dbconnect.php';

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }


    $brand= $_POST['brand'];
    $model= $_POST['model'];
    $ctype= $_POST['ctype'];
    $seat= $_POST['seat'];
    $fuel= $_POST['fuel'];
    $images= $_POST['images'];
    $amount= $_POST['amount'];
    $stock= $_POST['stock'];


	/*if(isset($_FILES) && !empty($_FILES['images']['name']))
	{
        echo "hello";
        //echo $_FILES['images']['name'];
		$filename = $_FILES['images']['name'];
		$images = "images/".$filename;
        
        move_uploaded_file($_FILES["images"]["tmp_name"], $images);		
	}*/
   
    $sql = "INSERT INTO `car`( `brand`, `model`, `ctype`, `seat`, `fuel`, `c_status`, `images`, `amount`, `stock`) 
    VALUES ('$brand', '$model', '$ctype', '$seat', '$fuel','0','$images', '$amount', '$stock' )";
  
//   echo "working";
  

    if ($conn->query($sql)===TRUE) {
    
        header("location: ../admin/view_car.php");
        echo "New car record successfully";
        //echo $_FILES['images']['name'];
        //echo $filename;
        //echo "images/".$filename;
        //echo $images;
        //echo "Hello";
      } 
      else {
        echo "Error: " ;
      }
  
  
}

?>
