<?php

    include ("db.php");
        
    //function connect to database
    dbConn();
    $name="";
    if(isset($_POST['cate_name'])){
    $name = $_POST['cate_name'];

    dbInsert("categories", ["cate_name"=>$name]);
    }
?>

<div class="container mt-3">
    <h1 class="border-bottom">Add categories</h1>
        <form action="" method="post">
            Name 
                <input type="text" name="cate_name" class="form-control mb-3" required>

            <button type="submit" value="send"  class="btn btn-primary btn-sm " >Add Categorie</button>
            <button class="btn btn-danger ms-3 btn-sm" type="reset">Cancel</button>
        </form>
        <a href="categorie.php?p=categorie.php" type="exit" class="btn btn-danger mt-4 btn-sm">Exit</a>
</div>