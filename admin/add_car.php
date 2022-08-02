<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
  background-image: url("../images/images1.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<title> ADD FORM</title>
 
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
  

	<!-- css files -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- css files -->

	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //Online-fonts -->


<body>
<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3"></h1>
			<div class="w3layouts-main">
        <form action="../admin/add_car_conn.php" method="POST" >
        
                <h1 class="logo-w3"><center>ADD CAR</center></h1>
                <table align="center" border="0">
                <tr><td>BRAND:</td>
                <td><input type="text" name="brand" required/></td></tr>   
                <br>
                <tr><td>MODEL:</td>
                <td><input type="text" name="model"required/></td></tr>
                
                <tr><td><label for="ctype">TYPE:</label>    
                                    <td><select name="ctype" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>  select the car type </option>
                                                
                                            <option value="SUV">SUV</option>
                                            <option value="hatchback">Hatchback</option>
                                            <option value="MUV">MUV</option>
                                            <option value="Sedan">sedan</option>
                                        </select required>  </td>  </td>  
                </tr>
                <tr><td>SEAT:</td>
                <td><input type="number" name="seat" required/></td></tr>

                <tr><td>FUEL:</td>
                <td><input type="text" name="fuel" required/></td></tr>


                <tr><td>IMAGE:</td>
                <td><input type="file" name="images"  accept="image/png, image/jpeg, image/wepg, image/webp" required/></td></tr>

                <tr><td>AMOUNT PER DAY:</td>
                <td><input type="number" name="amount" required/></td></tr>
                <tr><td></td>

                <tr><td>STOCK:</td>
                <td><input type="number" name="stock" required/></td></tr>
                </table>
                <br>
                <center><input type="submit" class="btn btn-primary" value="Submit" /></center>
             
        </form>
    </div>
  </div>
</div>
</body>
</html>


<!-- accept="image/png, image/webp, image/jpeg" -->