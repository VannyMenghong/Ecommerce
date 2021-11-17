<?php
   $qty = "";
   if(isset($_POST['qty'])){
   $qty =  $_POST['qty'];
   };

    $id = $_GET['id'];
 
    include ("dbconnection/db.php");
    $sql = "SELECT * FROM products WHERE pro_id='$id' ; ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $image = $row['pro_image'];
    $name = $row['pro_name'];
    $price = $row['pro_price']; 
    $total = $price * $qty;
    $copy = mysqli_query($con,"INSERT INTO carts (cart_image,cart_name,cart_quantity,cart_price,cart_total) VALUES ('$image', '$name', '$qty' , '$price', '$total') ; "); 
    
   header("Refresh:1; url='../cart.php?id=2'");  
?>