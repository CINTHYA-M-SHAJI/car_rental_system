<?php
session_start();
include 'dbconnect.php'; 
include 'header.php';
$email = $_SESSION['email'];
$sql = "SELECT `name`, `address`, `email`, `mobile`,`licence`, `usertype` FROM `user` WHERE `email` = '$email'";
    mysqli_query($conn,$sql);
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
	
    $name = $row["name"];
    // $usertype = $row["usertype"];



// $sql = "SELECT `user_type` FROM `users` WHERE `user_id`=2";
// $sql1=$conn->query("SELECT `user_type` FROM `users` WHERE `user_id`=2");
// echo $sql1;
// echo "hi";

?>
<html>
<head>
<title>profile</title>
</head>
<style>
.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
<form method='POST'>
<section class="vh-100" style="background-color: #f4f5f7;" width="25%">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="../images/Default_pfp.jpg"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><b><?php echo $row["name"]?></b></h5>
              
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6><b>Email</b></h6>
                    <p class="text-muted"><?php echo $row["email"]?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6><b>Mobile</b></h6>
                    <p class="text-muted"><?php echo $row["mobile"]?></p>
                  </div>
                </div>
                <div class="col-6 mb-3">
                <h6><b>Licence Number</b></h6>
                    <p class="text-muted"><?php echo $row["licence"]?></p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                  <button formaction="update_profie.php" class="btn btn-sm btn-outline-primary w-75">Update</button>
                  </div>
                  <div class="col-6 mb-3">
                    
                    <!-- <button formaction="Delete_profile.php"class="btn btn-sm btn-outline-primary w-75">Delete</button> -->
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
</body>
</html>



























<!-- <?php
session_start();
include '../dbconnect.php';
$email = $_SESSION['email'];

?>

<html>
    <head>
</head>
<body>
<?php

$sql = "SELECT `name`, `address`, `email`, `mobile`,`licence`, `usertype` FROM `user` WHERE `email` = '$email'";
    mysqli_query($conn,$sql);
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
	
    $name = $row["name"];
    // $usertype = $row["usertype"];



// $sql = "SELECT `user_type` FROM `users` WHERE `user_id`=2";
// $sql1=$conn->query("SELECT `user_type` FROM `users` WHERE `user_id`=2");
// echo $sql1;
// echo "hi";

?>

<table border="1">
    <tr>
    <th>USER NAME</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>MOBILE</th>
    <th>LICENCE</th>
</tr>


    <tr>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["address"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["mobile"]?></td>
    <td><?php echo $row["licence"]?></td>
</tr>

</body>
</html>
 -->
