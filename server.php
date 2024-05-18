<?php

    include "connect.php";

    $pro_name = $_GET['proname'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];

    if ($pro_name == "" || $quantity == "" || $price == "") {
        echo "Please fill all the fields...";
    }

    $sql = "Insert into product (name, quantity, price) values ('$pro_name', '$quantity', '$price')";
    
    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: ". mysqli_error($connection);
    }
    

?>