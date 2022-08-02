<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auditions Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<div class="center-container">
	<div class="banner-dott">
		<div class="main">
			<h1 class="w3layouts_head">REGISTRATION FORM</h1>
				<div class="w3layouts_main_grid">
					<form action="../login/signup_con.php" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">

							<span class="agileits_grid">
								<label>Name </label>
						        <input type="text" placeholder="Full name"  name="name" required/>
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email </label>
								<input type="email"  placeholder="Email" name="email" onchange="validateEmail();" required/>
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Licence </label>
								<input type="text" placeholder="Licence Number" name="licence" required/>
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Licence Proof </label>
								<input type="file"  value="Licence Number" name="licenceProof"  accept=" image/jpeg" required/>
								</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Address </label>
								<input type="text" placeholder="Address" name="address" pattern="[a-zA-Z]+" required/>
								</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Mobile No: </label>
								<td><input type="text" placeholder="Mobile Number" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required>
								</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="password" placeholder="Password" name="password" required="">
							</span>
						</div>
						<div class="agileits_w3layouts_main_grid w3ls_main_grid">
							<span class="agileinfo_grid">
								<label>Confirm Password</label>
								<input type="password" placeholder="Confirm Password" name="cpassword"  required="">
								
							
									<div class="clear"> </div>
							</span>
						</div>
						<br>
					
				<center>
							<input type="submit" value="Sign Up" name="login"> -->
				</center>
				</form>
			</div>
		</div>
	</div>
	</div>

	<script type = "text/javascript">
   <!--
      function validateEmail() {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
<!-- //footer -->
</body>
</html>