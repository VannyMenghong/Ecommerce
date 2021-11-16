<?php
    $id = $_GET['id'];
    include ("dbconnection/db.php");
    $sql = "SELECT * FROM products WHERE pro_id='$id' ; ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $image = $row['pro_image'];
    $name = $row['pro_name'];
    $price = $row['pro_price'];
    
    $copy = mysqli_query($con,"INSERT INTO carts (cart_image,cart_name,cart_price) VALUES ('$image', '$name', '$price' ) ; "); 
    header("Refresh:1; url='../shop.php?id=1'");  
?>