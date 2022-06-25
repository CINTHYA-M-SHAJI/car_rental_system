<html>
    <head>
        <title>viewcar</title>
    </head>
    <body align="top_right">
       <button><a href="admin_home.php">HOME</a></button>  
<body>
    <h1>View Car<h1>
</body>
</html>
<!-- brand`, `model`, `ctype`, `seat`, `fuel`, `c_status`, `images`, `amount`, `stock` -->
<?php

include 'dbconnect.php';

  echo  "<table border=1 width=1200px>";
    echo "<tr>";
    echo "<th>CAR ID</th>";
    echo "<th>BRAND</th>";
    echo "<th>MODEL</th>";
    echo "<th>CAR TYPE</th>";
    echo "<th>SEAT</th>";
    echo "<th>FUEL</th>";
    echo "<th>IMAGE</th>";
    echo "<th>AMOUNT PER DAY</th>";
    echo "<th>STOCK</th>";
    echo "<th>UPDATE</th>";
    echo "<th>DELETE</th>";
    echo "</tr>";

    $result = mysqli_query($conn,"SELECT `carid`,`brand`, `model`, `ctype`, `seat`, `fuel`, `images`, `amount`, `stock` FROM  `car` ORDER BY carid");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr align=center>";
        echo "<td>" .$row["carid"]. "</td>";
        echo "<td>" .$row["brand"]. "</td>";
        echo "<td>" .$row["model"]. "</td>";
        echo "<td>" .$row["ctype"]. "</td>";
        echo "<td>" .$row["seat"]. "</td>";
        echo "<td>" .$row["fuel"]. "</td>";
        $pathx= "../images/";

        $file=$row["images"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td>";
        echo "<td>" .$row["amount"]. "</td>";
        echo "<td>" .$row["stock"]. "</td>";
      
     

        echo "<td><a href=update_car.php?carid=".$row["carid"].">UPDATE</a></td>";
        echo "<td><a href=delete_car.php?carid=".$row["carid"].">DELETE</a></td>";
        echo "</tr>";

    $i++;
    }
echo "</table>";
    }
    else{
    echo "No result found";
    }

    $con->close();

    ?>