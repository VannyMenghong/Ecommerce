
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
$table = "products";
$column = "*";
$criteria = "pro_id = '$id'";
$clause ="";
$result = dbSelect($table, $column, $criteria, $clause);
if($result)
    {

?>


<div class="container mt-4 ">
    <?php

    $row = mysqli_fetch_array($result);
        

    ?>
<form action="include/product_update_page.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id ?>" />

    <h1 class="border-bottom">Product Update</h1>
    Name 
    <input type="text" Required name="name" value="<?= $row['pro_name']; ?>" class="form-control mb-3">
    Price
    <input type="text" Required name="price" class="form-control mb-3" value="<?= $row['pro_price']; ?>">
    Description
    <textarea name="description" Required id="" style="font-size:12pt;text-wrap:word-break;" class="form-control mb-3" cols="30" rows="3" value=""><?= $row['pro_description']; ?></textarea>
    Categorie
    <select class="form-select mb-3" Required name="categorie" aria-label=".form-select-sm example">
        
        <option <?= ($row['pro_cate']=='សាច់'? 'selected':''); ?> value="សាច់">សាច់</option>
        <option <?= ($row['pro_cate']=='បន្លែ'? 'selected':''); ?> value="បន្លែ">បន្លែ</option>
        <option <?= ($row['pro_cate']=='ផ្លែឈើ'? 'selected':''); ?> value="ផ្លែឈើ">ផ្លែឈើ</option>
    </select>
    
    <input type="file" name="image_file" Required class="form-control mb-3">  
     
    <div class="form-check d-flex">
    <i class="fas fa-star text-warning    "></i> Visible  :
    <input type="checkbox" name="visible" value="<?= ($row['visible']=='1'? "1":"0"); ?>" <?= ($row['visible']=='1'? "checked":"");?> class="form-check-input ms-2 mb-3" > 
    </div>
    <button type="submit" value="send"  class="btn btn-primary " >Update</button>
    <button class="btn btn-danger ms-3">Cancel</button>
   
</form>
    <a href="product.php?p=product.php" type="exit" class="btn btn-danger mt-4">Exit</a>
    <?php

        };

    ?>

</div>