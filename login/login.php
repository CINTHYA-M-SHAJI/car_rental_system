<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
 
<body>
	<div class="main">
		<form action="login_conn.php" method="POST">
    		<h1><lable> Login </lable></lable> </h1>
  			<div class="inset">
	  			<p>
	    		 <label for="email">EMAIL ADDRESS</label>
   	 			<input type="email" placeholder="" name="email" required/>
				</p>
  				<p>
				    <label for="password">PASSWORD</label>
				    <input type="password" placeholder="" name="password" required/>
  				</p>
				  <br>
				  <p>
				    <!-- <input type="checkbox" name="remember" id="remember"> -->
				    <label for="remember">Do you have account? &nbsp;<a href="../signup/Signup.php"><b>NEW USER</b></label>
				  </p>
 			 </div>
 	 
			  <p class="p-container">
			    <input type="submit" value="Login">
			 <a href="../index.php"> Back </a></p>

			  
		</form>
	</div>  
			<!-----start-copyright---->
   					<!-- <div class="copy-right">
						<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
					</div> -->
				<!-----//end-copyright---->
</body>
</html>