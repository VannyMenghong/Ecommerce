<?php
    
    include ("db.php");

    dbconn();

    $result = dbSelect("categories", "*", "", "");
        if($result)
            {

?>
<div class="container mt-4">
    <div class="title d-flex justify-content-between">
        <h1>Categories </h1>
        <a href="categorie_add.php?p=categorie.php" class="btn btn-primary" >Add Catgorie</a>
    </div>
    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <table class="table shadow">
            <thead class="bg-info">
                <th>No</th>
                <th>Categories Name</th>
                <th>Action</th>
            </thead>
            <?php

                    while( $row = mysqli_fetch_array($result))
                        {

            ?>
            <tbody class="bg-white">
               
                <td style="font-size:13pt;"><?= $row['cate_id']; ?></td>
                <td><?= $row['cate_name']; ?></td>
                <td>
                    <a href="categorie_update.php?id=<?= $row['cate_id'];?>"><i class="fa fa-edit"></i></a>
                    <a href="include/categorie_delete_page.php?id=<?= $row['cate_id']; ?>"><i class="fa fa-trash text-danger"></i></a>
                </td>
                <?php

                        };
                    };

                ?>
         
                      
            </tbody>
        </table>
    </form>
</div>