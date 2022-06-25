<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD CAR</title>
</head>

<body>
<form action="../admin/add_car_conn.php" method="POST" >
<h1><center>ADD CAR</center></h1>
<table align="center" border="0">
<tr><td>BRAND:</td>
<td><input type="text" name="brand"/></td></tr>   

<tr><td>MODEL:</td>
<td><input type="text" name="model"/></td></tr>

<tr><td><label for="cars">TYPE:</label>      
                              <td><select name="ctype" id="cars" >
                                 <option value="null">----</option>   
                                <option value="off road">Off road</option>
                                <option value="classic">Classic</option>
                                <option value="Sadan">sedan</option>
                              </select required>  </td>  </td>  
                    </tr>
<tr><td>SEAT:</td>
<td><input type="number" name="seat" required/></td></tr>

<tr><td>FUEL:</td>
<td><input type="text" name="fuel" required/></td></tr>


<tr><td>IMAGE:</td>
<td><input type="file" name="images"  required/></td></tr>

<tr><td>AMOUNT PER DAY:</td>
<td><input type="number" name="amount" required/></td></tr>
<tr><td></td>

<tr><td>STOCK:</td>
<td><input type="number" name="stock" required/></td></tr>
</table>
<br>
<center><input type="submit" value="Submit" /></center>
</form>
</body>
</html>


<!-- accept="image/png, image/webp, image/jpeg" -->