<?php
    include("db.php");
    $id = $_GET['id'];

    dbDelete("categories","cate_id = $id");
    header("Refresh:1, url='../categorie.php?p=categorie.php'");
?>