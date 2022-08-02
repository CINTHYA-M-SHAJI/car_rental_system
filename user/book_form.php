<?php
session_start(); 
include 'dbconnect.php';
include 'header.php';
if(!$conn)
{
    die("Error: Failed to connect to database!");
}
$carid=$_GET['carid'];

$query=mysqli_query($conn,"SELECT * FROM `car`WHERE carid='$carid'");

$userid=$_SESSION['userid']; 

//echo $item_id;

?>
<!DOCTYPE html>
<html>
<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
 <title>BOOKING</title>
</head>
 <body>
<div>
<script type="text/javascript">
   $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#f_date').attr('min', minDate);
    $('#t_date').attr('min', minDate);
});

</script> 
     <form action="booking_conn.php" align='center'method="post">  
        <input type="hidden" readonly name="userid" value="<?php echo $userid;?>"><br>
        <input type="hidden" readonly name="carid" value="<?php echo $carid;?>"><br>
        <input type="hidden" readonly name="model" value="<?php echo $model;?>"><br>
        <input type="hidden" readonly name="brand" value="<?php echo $brand;?>">
        <input type="hidden" readonly name="stock" value="<?php echo $stock;?>">
        <input type="hidden" readonly name="amount" value="<?php echo $amount;?>">
        <input type="hidden" readonly name="stock" value="<?php echo $stock;?>">
<?php
        echo "<table align=center>";

while($row= mysqli_fetch_array($query)){
    // echo "<tr><th>CAR ID</th><td style='border: solid 1px black;'>".$row['carid']."</td></tr>";
    $carid=$row['carid'];
    echo "<tr><th>TYPE</th><td style='border: solid 1px black;'>".$row['ctype']."</td></tr>";
    echo "<tr><th>MODEL</th><td style='border: solid 1px black;'>".$row['model']."</td></tr>"; 
    $model=$row['model'];
    echo "<tr><th>SEAT</th><td style='border: solid 1px black;'>".$row['seat'] ."</td></tr>";
    $stock=$row['stock'];
    echo "<tr><th>BRAND</th><td style='border: solid 1px black;'>".$row['brand']."</td></tr>";
    $brand=$row['brand'];
    echo "<tr><th>STOCK AVAILABLE</th><td style='border: solid 1px black;'>".$row['stock']."</td></tr>";
   
    echo "<tr><th>AMOUNT PER DAY</th><td style='border: solid 1px black;'>"."₹".$row['amount']."</td></tr>";
    $amount=$row['amount'];
    echo "<tr><th>IMAGE</th><td>";


            $pathx = "../images/";
            $file = $row["images"];
            echo "<tdstyle='border: solid 1px black;>";
            echo '<img src="'.$pathx.$file.'" height=100 width=100>';
            echo "</td></tr>";


            }           
echo "</table>";

?>
        
        Booking Date: <input type="date" id="f_date"  select name="f_date"  required > <br><br>
        Return Date:  <input type="date" id="t_date"  select name="t_date" required > <br><br>
        <input type="submit" value="BOOK">

        
    </form>
   
   
     
</div> 
   
</body>
</html>