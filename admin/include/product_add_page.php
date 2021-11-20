
<?php

include ("db.php");
    
//function connect to database
dbConn();

$name ="";
$price="";
$description = "";
$visible = "1";
$categorie="";
$image="";
if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['categorie'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $categorie = $_POST['categorie'];
    if(isset($_POST['visible']))
    {
        $visible = "1";
    }
    else{
        $visible = "0";
    }
    //upload file to database
$image = "";        
if(isset($_FILES['image_file']['name']) != ""){
    $path = $_FILES['image_file']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $image = time().'.'.$ext;
    // $_FILES['image_file']['tmp_name'] == C:\wamp64\tmp\php76F2.tmp 
    // "img/".$image == img/1636967297.jpg 
    move_uploaded_file($_FILES['image_file']['tmp_name'], "../img/product/".$image) or die ("uploading error...");
    

    
}
dbInsert("products", ["pro_image"=>$image, "pro_name"=>$name, "pro_price"=>$price, "pro_description"=>$description, "pro_cate"=>$categorie, "visible"=>$visible]);


}


    
?>


<div class="container mt-4 ">
<form action="" method="post" enctype="multipart/form-data">
    <h1 class="border-bottom">Product Add</h1>
    Name 
    <input type="text" Required name="name" class="form-control mb-3">
    Price
    <input type="text" Required name="price" class="form-control mb-3">
    Description
    <textarea name="description" Required id="" class="form-control mb-3" cols="30" rows="3"></textarea>
    Categorie

   
    <select class="form-select mb-3" Required name="categorie" aria-label=".form-select-sm example">
        <option selected>choose categorie</option>
        <?php

            $result = dbSelect("categories","*","","");
            while ($row = mysqli_fetch_array($result))
                {

        ?>
        <option value="<?= $row['cate_name'];?>"><?= $row['cate_name'];?></option>
        <?php

                };

        ?>  
    </select>

    <input type="file" name="image_file" Required class="form-control mb-3">  
     
    <div class="form-check d-flex">
    <i class="fas fa-star text-warning    "></i> Visible  :
    <input type="checkbox" name="visible" checked class="form-check-input ms-2 mb-3" > 
    </div>
    <button type="submit" value="send"  class="btn btn-primary " >Submit</button>
    <button class="btn btn-danger ms-3" type="reset">Cancel</button>
    
    
</form>
    <a href="product.php?p=product.php" type="exit" class="btn btn-danger mt-4">Exit</a>
</div>