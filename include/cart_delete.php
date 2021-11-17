<?php
    $id = $_GET['id'];
    include ("dbconnection/db.php");
    $sql = "DELETE FROM carts WHERE cart_id = '$id'; ";
    $result = mysqli_query($con, $sql);

    header("Refresh:1; url='../cart.php?id=1'"); 
?>