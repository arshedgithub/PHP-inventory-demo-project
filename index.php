<?php

    // connect to MySQL database
    $connection = mysqli_connect("localhost", "root", "1234", "presem_demo");
    
    if (!$connection) {
        die("Error : " . mysqli_connect_error());
    }

    echo "Database connection established...";

    // retrieve data from MySQL database

    $sql = "SELECT * FROM product";
    $result = mysqli_query($connection, $sql);

    echo "<table border=1 cellpadding=5><tr><th>id</th><th>name</th><th>quantity</th><th>price</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>". $row['id']. "</td><td>" .$row['name']. "</td><td>" .$row['quantity']. "</td><td>" .$row['price']. "</td></tr>";
    }

    echo "</table>";

?>

    
