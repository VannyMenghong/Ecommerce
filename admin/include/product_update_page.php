<?php
    include ("db.php");
    dbConn();
     //upload file to database
     //$image = "no-image.jpg";
    
    if(isset($_POST['id']))// && file_exists($_POST['image_file']['tmp_name']) || is_uploaded_file($_FILES['image_file']['tmp_name'])
    {   

        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        if(isset($_POST['visible'])){
            $visible = '1';
        }
        else{
            $visible = '0';
        }
           //upload file to database
        $image = $_FILES['image_file']['name'];
      
        //if(isset($_FILES['image_file']['name']) != ""){
       // $path = $_FILES['image_file']['name'];    
        //$ext = pathinfo($path, PATHINFO_EXTENSION);
        //$image = time().'.'.$ext;
        // $_FILES['image_file']['tmp_name'] == C:\wamp64\tmp\php76F2.tmp 
        // "img/".$image == img/1636967297.jpg 
            move_uploaded_file($_FILES['image_file']['tmp_name'], "../../img/product/".$image) or die ("uploading error...");
            
            dbUpdate("products", ["pro_name" => $name, "pro_image" => $image, "pro_price" => $price, "pro_description" => $description, "pro_cate" => $categorie, "visible"=>$visible], "pro_id='$id'");
            
            //$sql = "UPDATE slides SET slide_title = '$title', image ='$image' WHERE slide_id='$id' ; ";
            
            header("Refresh:1, url='../product.php?p=product.php'");
     
    }

  
?>