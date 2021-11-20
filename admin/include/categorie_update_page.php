<?php

    include("db.php");
    $name="";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $name = $_POST['cate_name'];
        dbUpdate("categories", ["cate_name" => $name], "cate_id = $id");

        header("refresh:1, url='../categorie.php?p=categorie.php'");
    }

?>