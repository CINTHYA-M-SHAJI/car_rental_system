<?php
session_start();
   include 'dbconnect.php'; 
   $result = mysqli_query($conn,"SELECT `brand`, `model`, `ctype`, `seat`, `fuel`, `images`, `amount`, `stock` FROM  `car`");
   $check=mysqli_num_rows($result) > 0;

  //  $pathx= "images";

  //  $file=$row["images"];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Car Rental System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Car<span>Rento</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="adminhome.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="../admin/add_car.php" class="nav-link">ADD CAR</a></li>
	          <li class="nav-item"><a href="../admin/view_booking.php" class="nav-link">View Booking</a></li>
	          <li class="nav-item"><a href="view_car.php" class="nav-link">Cars</a></li>
	          <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/car-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Admin Panel</h1>
	           
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<!-- <span class="ion-ios-play"></span> -->
	            	</div>
	            	<div class="heading-title ml-5">
		            	<!-- <span>Easy steps for renting a car</span> -->
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Featured Vehicles</h2>
          </div>
        </div>

    		<div class="row">

    			<div class="col-md-12">
         
    				<div class="carousel-car owl-carousel">
            <?php

            if($check){

              $i=0;
              while($row = mysqli_fetch_array($result)) 
              {
              
            ?>
    					<div class="item">


                <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end">
                          <img src="images/<?php echo $row['images'];?>"class="img rounded d-flex align-items-end" >
                     
                      </div>
                  
                        <div class="text">
                           <h2 class="mb-0"><?php echo $row['ctype'];?></h2>
                               <div class="d-flex mb-3">
                               <span class="cat"><?php echo $row['brand'];?></span>
                            <p class="price ml-auto"> ₹<?php echo $row['amount'];?><span>/day</span></p>

                          </div>
                         <p class="d-flex mb-0 d-block"><a href="update.php" class="btn btn-primary py-2 mr-1">Update</a> 
                         <a href="#" class="btn btn-secondary py-2 ml-1"><?php echo $row['stock'];?> Stock</a></p>
                    
                </div>

    					</div>
             
           </div>
              <?php        
                $i++;
                }
                }
              ?> 
    		  	</div>
        	</div>

    	</div>

    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">


	
CAR RENTAL SYSTEM  -->   <a href="index .php">   Cinthya M Shaji</a>   
</footer>
 
   
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
  </body>
</html>








<!-- -->