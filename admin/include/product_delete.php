<?php

    include ("db.php");

    $id = $_GET['id'];

    dbDelete("products", " pro_id = $id ");

    header (   "Refresh:1, url='../product.php'" );

?>