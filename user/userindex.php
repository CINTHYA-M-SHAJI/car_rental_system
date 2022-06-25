<?php
session_start();
// $name=$_SESSION['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home_User</title>


</head>

<body  align="center">
<form align='center'>
  <h1><center>CAR RENTAL SYSTEM</center></h1>
  <h3><center>Book Your CAR</center></h3>
  USER NAME: <input type="text" readonly value="<?php echo $_SESSION['name'];?>">

  <button formaction="../user/user_profile.php"> PROFILE</a></button>
  <button formaction="../user/view_car_user.php">VIEW CAR</a></button>
  <button formaction="../user/view_booking.php">VIEW BOOKING</a></button>
  <button formaction="../user/logout.php">LOGOUT</a></button>

  </a></button>


</form>
<?php

// echo $_SESSION['name'];
//     echo $name;?>
</body>
</html>