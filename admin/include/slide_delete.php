<?php   
    

    include ("db.php");
    if(isset($_GET['id'])){
    $id = $_GET['id'];

    //function delete
    $table = "slides";
    $criteria = "slide_id = '$id';";
    dbDelete($table, $criteria); 

    header("Refresh:1; url='../slide.php'");
    }
?>