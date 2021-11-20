<?php
    include ("db.php");
    
     //function connect to database
     dbConn();
    //select database
    $table = "slides";
    $column = "*";
    $criteria = "";
    $clause ="";
    $result = dbSelect($table, $column, $criteria, $clause);
    if($result)
        {

?>  



<div class="container mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
        <h1 class="border-bottom">Slideshow </h1>   
        <a href="slide_add.php?p=slide.php" type="submit" class="btn btn-primary"  >Add Slideshow</a>
    </div>
    </div>
<table class="table shadow mt-3 ">
    <thead class="bg-info">
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>action</th>
    </thead>

    <?php

        while ($row = mysqli_fetch_array($result))
            {

    ?>

    <tbody style="font-size:13pt;" class="bg-white">
        <td ><?= $row['slide_id'];?></td>
        <td><img src="../img/slide/<?= $row['slide_image'];?>" style="width:70px;"></td>
        
        <td><?= $row['slide_title'];?></td>
        <td>
            <a href="slide_update.php?id=<?= $row['slide_id']; ?>&p=slide.php"><i class="fa fa-edit"></i></a>
            <a href="include/slide_delete.php?id=<?= $row['slide_id']; ?>"><i class="fa fa-trash text-danger"></i></a>
                
            <a href="../admin/include/visible.php?visible=<?= ($row['visible']=="1"? "0":"1");?>&id=<?= $row['slide_id'];?>">
                <i class="text-warning" data-feather="<?php echo ($row['visible']=="1"? "eye":"eye-off"); ?>"></i>
            </a>
            
        </td>
    </tbody>


    <?php

            };
        };
    ?>

</table>
</div>