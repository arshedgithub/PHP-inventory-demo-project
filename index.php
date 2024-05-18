<html>
    <head>
        <title>Inventory System</title>
        <style>
           form {
            border : 1px solid black;
            border-radius : 10px;
            padding: 20px;
            /* margin-top: 10px; */
           } 
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col">
                <form action="#">
                    Name : <input type="text" name="proname" placeholder="Name" required>
                    <br><br>
                    Quantity : <input type="number" name="quantity" required>
                    <br><br>
                    Price : <input type="number" name="price" required>
                    <br><br>
                    <input type="submit" value="Add">
                </form>
            </div>

            <div class="col">
                <table border=1 cellpadding=5>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>quantity</th>
                        <th>price</th>
                    </tr>

                    <?php 
                        include "./connect.php";
    
                        // retrieve data from MySQL database
                        $sql = "SELECT * FROM product";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { 
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                        </tr>
                    <?php } ?>
                </table> 
            </div>

        </div>
    </body>
</html>



<?php

    

?>

