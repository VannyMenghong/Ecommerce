<?php
    include ("db.php");
    $id = $_GET['id'];
    
     //function connect to database
     dbConn();
    //select database
    $table = "categories";
    $column = "*";
    $criteria = "cate_id = '$id'";
    $clause ="";
    $result = dbSelect($table, $column, $criteria, $clause);
    if($result)
        {

?>  



<div class="container  ">
    <div class="row mt-4 mb-3">
        <div class="col-12 d-flex justify-content-between">
            <h1>Update Categorie</>   
        </div>
    </div>
<table class="table bg-info">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </thead>

    <?php

        $row = mysqli_fetch_array($result);
            

    ?>
    <form action="include/categorie_update_page.php" method="post"   >
    <input type="hidden" name="id" value="<?php echo $id ?>" />
    <tbody  class="bg-white" >
        <td ><?= $row['cate_id'];?></td>
        <td ><input type="text" name="cate_name"value="<?= $row['cate_name'];?>"></td>
        <td>
        <button class="btn btn-primary" type="submit" value="send">Update</button>
        <button class="btn btn-danger" type="exite" value="send">Close</button>
            
        </td>
    </tbody>
    </form>
            
    <?php

            
        };
    ?>

</table>
</div>