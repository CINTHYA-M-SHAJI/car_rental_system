<?php 
session_start(); 
include 'dbconnect.php';
 
include 'header.php';
?>
<html>
<head>
<title>Untitled Document</title>
</head>
<style>

body
        {
            background-image: url("../images/photocar.jpg");
            background-size: 1400px,600px;
            background-repeat: no-repeat;
            image-resolution: 84 ;
        }

</style>
<body>
<h1><center>UPDATE YOUR PROFILE</center></h1>

<?php $name=$_SESSION['name'];?>
<form  action="profile_update_conn.php" method="post">
<table align="center">
<br>
<tr><td>Name:</td>
<td><input type="text" name="name" readonly value=<?php echo $name;?>></td></tr>
<tr><td>Address:</td>
<td><textarea type="text" name="address" required autofocus></textarea></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email" required></td></tr>
<tr><td>Phone Number:</td>
<td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
<tr><td>Licence:</td>
<td><input type="text" name="licence"  maxlength="12" minlength="12" required></td></tr>
<tr><td>Password:</td>
<td><input type="password" name="password"  required ></td></tr>

<!---<tr><td>Gender:</td>
<td><input type="radio" value="male"/>M
    <input type="radio" value="female"/>F</td></tr>-->

</table>
<br>
<center><input type="submit" value="UPDATE"></center>

</form>

</body>
</html>