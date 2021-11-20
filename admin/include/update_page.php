<?php
    include ("db.php");
    $id = $_GET['id'];
    
    $image = "image_file";
    if(isset($_FILES['image_file']['name']) != ""){
        $path = $_FILES['image_file']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $image = time().'.'.$ext;
        // $_FILES['image_file']['tmp_name'] == C:\wamp64\tmp\php76F2.tmp 
        // "img/".$image == img/1636967297.jpg 
        move_uploaded_file($_FILES['image_file']['tmp_name'], "../img/slide/".$image) or die ("uploading error...");
        
    }
     //function connect to database
     dbConn();
    //select database
    $table = "slides";
    $column = "*";
    $criteria = "slide_id = '$id'";
    $clause ="";
    $result = dbSelect($table, $column, $criteria, $clause);
    if($result)
        {

?>  



<div class="container mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
        <h1>Update Slides</h1>   
        <a href="slide.php?p=slide  .php" class="btn btn-danger">Close</a>
    </div>
    </div>
<table class="table bg-info mt-3">
    <thead>
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>action</th>
    </thead>

    <?php

        $row = mysqli_fetch_array($result);
            

    ?>
    <form action="include/slide_update_page.php" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $id ?>" />
    <tbody style="font-size:13pt;" class="bg-white" >
        <td ><?= $row['slide_id'];?></td>
        <td><img src="../img/slide/<?= $row['slide_image'];?>" name="image" style="width:70px;">
        <input type="file" name="image_file" Required  class="text-danger" style="font-size:10px; cursor:pointer"></input>
        </td>
        <td><input type="text" name="slide_title" value="<?= $row['slide_title'];?>"></td>
        <td>
        <button class="btn btn-primary" type="submit" value="send">Update</button>
        
    
        </td>
    </tbody>
    </form>
    
    
    <?php

            
        };
    ?>

</table>
</div>