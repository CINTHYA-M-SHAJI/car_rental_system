<?php
session_start();
include 'dbconnect.php'; 
include 'header.php';
// $carid=$_SESSION['carid'];
$userid = $_SESSION['userid'];
// $bookid=$_SESSION['bookid'];
$result = mysqli_query($conn,"SELECT bookid, brand, model, ctype, seat, fuel, stock ,f_date, t_date,`status` FROM book,car WHERE car.carid=book.carid AND book.userid='$userid' ");
?>
<html>
     <head>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      </head>
    <body>
<form  method="POST">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Slno</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
      <th scope="col">Seat</th>
      <th scope="col">Fuel</th>
      <th scope="col">Stock</th>
      <th scope="col">F_Date</th>
      <th scope="col">T_Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <?php
 $i = 1;
 if (mysqli_num_rows($result) > 0) {
  

  while($row = mysqli_fetch_array($result)) {
  
?>
      <thead>
        <tr>
    <td scope="col"><?php echo $i; ?></td>
      <td scope="col"><?php echo $row['brand']; ?></td>
      <td scope="col"><?php echo $row['model']; ?></td>
      <td scope="col"><?php echo $row['ctype']; ?></td>
      <td scope="col"><?php echo $row['seat']; ?></td>
      <td scope="col"><?php echo $row['fuel']; ?></td>
      <td scope="col"><?php echo $row['stock']; ?></td>
      <td scope="col"><?php echo $row['f_date']; ?></td>
      <td scope="col"><?php echo $row['t_date']; ?></td>
      <?php if ($row['status']=='booked'){
        ?>
      <td><span class="btn btn-success">Booked</span></td>
      <?php }
      else{?>
      <td><span class="btn btn-danger">Cancelled</span></td> <?php
      } ?>

      <?php
      //cancel button
       if ($row['status']=="booked"){
        ?>
        <td><button formaction="cancel.php" class="btn btn-danger">Cancel</button></td>
      <?php }?>

    
      
    
    </tr>
   </thead>

<?php
$i++;
?>



<?php

}

    }
   ?>

</table>
  </form>
</body>
</html>