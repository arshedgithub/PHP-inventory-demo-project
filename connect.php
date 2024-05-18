<?php

    // connect to MySQL database
    $connection = mysqli_connect("localhost", "root", "1234", "presem_demo");
    
    if (!$connection) {
        die("Error : " . mysqli_connect_error());
    }

?>