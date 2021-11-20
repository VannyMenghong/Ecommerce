<?php
    
    include ("db.php");

    dbconn();

    $result = dbSelect("products", "*", "", "");
        if($result)
            {

?>
<div class="container mt-4">
    <div class="title d-flex justify-content-between">
        <h1>Product page </h1>
        <a href="product_add.php" class="btn btn-primary" >Add Product</a>
    </div>
    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <table class="table shadow ">
            <thead class="bg-info ">
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>Action</th>
            </thead>
            <?php

                    while( $row = mysqli_fetch_array($result))
                        {

            ?>
            <tbody class="bg-white">
               
                <td style="font-size:13pt;"><?= $row['pro_id']; ?></td>
                <td><img src="../img/product/<?= $row['pro_image']; ?>" style="width:50px;" alt=""></td>
                <td style="font-size:13pt;"><?= $row['pro_name']; ?></td>
                <td>$ <?= $row['pro_price']; ?></td>
                <td><p style="font-size:10pt;word-wrap: break-word;   width:300px;overflow:hidden;"><?= $row['pro_description']; ?></td>
                <td style="font-size:13pt;"><?= $row['pro_cate']; ?></td>
 
                <td>
                    <a href="product_update.php?id=<?= $row['pro_id']; ?>&p=product.php"><i class="fa fa-edit"></i></a>
                    <a href="../admin/include/product_delete.php?id=<?= $row['pro_id'];?>"><i class="fa fa-trash text-danger"></i></a>
                    <a href="../admin/include/product_visible.php?visible=<?= ($row['visible']=="1"? "0":"1");?>&id=<?= $row['pro_id'];?>" >
                        <i class="text-warning" data-feather="<?php echo ($row['visible']=="1"? "eye":"eye-off"); ?>"></i>
                    </a>
                </td>
                <?php

                        };
                    };

                ?>
         
                      
            </tbody>
        </table>
    </form>
</div>