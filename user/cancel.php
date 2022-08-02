<?php
session_start();

include 'dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){


$userid=$_SESSION['userid'];
$bookid=$_SESSION['bookid'];
    // $bookid= $_POST['bookid'];
    // $carid= $_POST['carid'];
    // $userid= $_POST['userid'];
    // $model= $_POST['model'];
    // $brand= $_POST['brand'];
    // $amount= $_POST['amount'];
    // $f_date= $_POST['f_date'];
    // $t_date= $_POST['t_date'];
    // $status= $_POST['status'];
    // $stock= $_GET['stock'];


//   $userid=$_SESSION['userid'];


// update `book`, `car`
// set `book`.`status`= 'cancelled',`car`.`stock`= `stock`+1 WHERE `book`.`userid`=44 AND `book`.`carid`= `car`.`carid`
// AND `car`.`carid`=27

    // $stock=$_GET['stock'];
    $sql1 = "UPDATE `book`, `car` SET `book`.`status`= 'cancelled',`car`.`stock`= `stock`+1 WHERE  `book`.`userid`='$userid' AND  `book`.`carid`= `car`.`carid`";

  
    $result1=mysqli_query($conn,$sql1);
   

    if($result1) {
    
   
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Booking Cancelled');
      window.location.href='../user/view_booking.php';
      </script>");
      //  echo "cancelled";
      
  }

    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
  }

?>
