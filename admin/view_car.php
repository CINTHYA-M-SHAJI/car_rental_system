<?php
session_start();
   include 'dbconnect.php'; 
   include 'header.php';
   $result = mysqli_query($conn,"SELECT `brand`, `model`, `ctype`, `seat`, `fuel`, `images`, `amount`, `stock` FROM  `car`");
   $check=mysqli_num_rows($result) > 0;

  //  $pathx= "images";

  //  $file=$row["images"];
?>


<!DOCTYPE html>
<html lang="en">
 

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
                         <!-- <p class="d-flex mb-0 d-block"><a href="../update.php" class="btn btn-primary py-2 mr-1">Update</a>  -->
						 <a class="btn btn-secondary py-2 ml-1"><?php echo $row['stock'];?>  Stock</a></p>
                    
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
