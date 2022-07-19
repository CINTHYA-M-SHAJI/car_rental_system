<!DOCTYPE html>
<html lang="en">
<head>
<title> ADD FORM</title>
 
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
  

	<!-- css files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //Online-fonts -->

</head>



<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD CAR</title>
</head> -->

<body>
<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3"></h1>
			<div class="w3layouts-main">
        <form action="../admin/add_car_conn.php" method="POST" >
        <h1 class="logo-w3"><center>ADD CAR</center></h1>
        <table align="center" border="0">
        <tr><td>BRAND:</td>
        <td><input type="text" name="brand"/></td></tr>   

        <tr><td>MODEL:</td>
        <td><input type="text" name="model"/></td></tr>

        <tr><td><label for="cars">TYPE:</label>      
                                      <td><select class="form-control" name="ctype" id="cars" >
                                        <option value="null">----</option>   
                                        <option value="off road">HUV</option>
                                        <option value="classic">Hatchback</option>
                                        <option value="Sadan">sedan</option>
                                      </select required>  </td>  </td>  
                            </tr>
        <tr><td>SEAT:</td>
        <td><input type="number" name="seat" required/></td></tr>

        <tr><td>FUEL:</td>
        <td><input type="text" name="fuel" required/></td></tr>


        <tr><td>IMAGE:</td>
        <td><input type="file" name="images"  accept="image/png, image/jpeg, image/wepg" required/></td></tr>

        <tr><td>AMOUNT PER DAY:</td>
        <td><input type="number" name="amount" required/></td></tr>
        <tr><td></td>

        <tr><td>STOCK:</td>
        <td><input type="number" name="stock" required/></td></tr>
        </table>
        <br>
        <center><input type="submit" value="Submit" /></center>
        </form>
    </div>
  </div>
</div>
</body>
</html>


<!-- accept="image/png, image/webp, image/jpeg" -->