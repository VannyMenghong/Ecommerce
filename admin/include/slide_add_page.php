<?php

include ("db.php");
    
//function connect to database
dbConn();

$title ="";
$image="";
$visible = "1";
if(isset($_POST['title'])){
    $title = $_POST['title'];
    if(isset($_POST['visible']))
    {
        $visible = "1";
    }
    else{
        $visible = "0";
    }
    //upload file to database
$image = "no-image.jpg";
if(isset($_FILES['image_file']['name']) != ""){
    $path = $_FILES['image_file']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $image = time().'.'.$ext;
    // $_FILES['image_file']['tmp_name'] == C:\wamp64\tmp\php76F2.tmp 
    // "img/".$image == img/1636967297.jpg 
    move_uploaded_file($_FILES['image_file']['tmp_name'], "../img/slide/".$image) or die ("uploading error...");
    dbInsert("slides", ["slide_title"=>$title, "slide_image"=>$image, "visible"=>$visible]);

    
}

}


    
?>

<div class="container mt-4 ">
<form action="" method="post" enctype="multipart/form-data">
    <h1 class="border-bottom">Slideshow Add</h1>
    Title 
    <input type="text" name="title" class="form-control mb-3">
    Image
    <input type="file" name="image_file" Required class="form-control mb-3">  
     
    <div class="form-check d-flex">
    <i class="fas fa-star text-warning    "></i> Visible  :
    <input type="checkbox" name="visible" checked class="form-check-input ms-2 mb-3" > 
    </div>
    <button type="submit" value="send"  class="btn btn-primary " >Submit</button>
    <button class="btn btn-danger ms-3" type="reset">Cancel</button>
    
    
</form>
    <a href="slide.php?p=slide.php" type="exit" class="btn btn-danger mt-4">Exit</a>
</div>