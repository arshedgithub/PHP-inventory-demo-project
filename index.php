<?php

    include "./connect.php";
   
    // retrieve data from MySQL database
    $sql = "SELECT * FROM product";
    $result = mysqli_query($connection, $sql);

?>

<table border=1 cellpadding=5>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>quantity</th>
        <th>price</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
        </tr>
    <?php } ?>
    
</table> 
