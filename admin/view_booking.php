<?php
session_start();
include 'dbconnect.php'; 
include 'header.php';
// $carid=$_SESSION['carid'];
// $userid = $_SESSION['userid'];

$result = mysqli_query($conn,"SELECT `name`,`model`,`brand`,`f_date`,`t_date`,`status` FROM book,car,user WHERE car.carid=book.carid AND book.userid=user.userid");
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
      <th scope="col">UserName</th>
      <th scope="col">Model</th>
      <th scope="col">Brand</th>
      <th scope="col">F_Date</th>
      <th scope="col">T_Date</th>
      <th scope="col">Status</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
 <?php
 $i = 1;
 if (mysqli_num_rows($result) > 0) {
  

  while($row = mysqli_fetch_array($result)) {
?>
    <tr>
    <td scope="col"><?php echo $i; ?></td>
      <td scope="col"><?php echo $row['name']; ?></td>
      <td scope="col"><?php echo $row['model']; ?></td>
      <td scope="col"><?php echo $row['brand']; ?></td>
      <td scope="col"><?php echo $row['f_date']; ?></td>
      <td scope="col"><?php echo $row['t_date']; ?></td>
      <?php if ($row['status']=='booked'){
        ?>
        <td><span class="btn btn-success">Booked</span></td>
      <?php }
      else{?>
        <td><span class="btn btn-danger">Cancelled</span></td> <?php
      } ?>  
    
    </tr>

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