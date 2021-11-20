<?php
    //connect to database
    include ("db.php");


    if(isset($_GET['visible']) && isset($_GET['id'])){
        $visible = $_GET['visible'];
        $id = $_GET['id'];

        //function update visible
        dbUpdate("slides", ["visible" => $visible], "slide_id = $id");

        //refresh page and set location
        header ("refresh:1; url='../slide.php'");

    }

?>