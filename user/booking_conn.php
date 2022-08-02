<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

include 'dbconnect.php';

    // $bookid= $_POST['bookid'];
    $carid= $_POST['carid'];
    $userid= $_POST['userid'];
    $model= $_POST['model'];
    $brand= $_POST['brand'];
    $amount= $_POST['amount'];
    $f_date= $_POST['f_date'];
    $t_date= $_POST['t_date'];
    // $status= $_POST['status'];
    $stock= $_POST['stock'];

    // $sql="SELECT `carid` FROM `car` WHERE `stock`!=0;"

if($stock==0){
  die("Insufficient Stock");
  //header('Location:../user/book_car.php');
}
  $userid=$_SESSION['userid'];
    $sql = "INSERT INTO `book`(`carid`, `userid`, `f_date`, `t_date`, `status`)
    VALUES('$carid', '$userid', '$f_date', '$t_date', 'booked')";
 
  

    $sql1 = "UPDATE `car` SET `stock`= `stock`-1 WHERE `carid` = $carid";
    //  echo $sql1;
    $result1=mysqli_query($conn,$sql1);
   
    $result=mysqli_query($conn,$sql);
   
   
    if($result) {
     if($result1) {
   
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Book successfully');
      window.location.href='../user/view_booking.php';
      </script>");

      }
  }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
  }

?>
