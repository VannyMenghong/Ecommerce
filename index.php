<?php
	
	include ('dbconnection/db.php');

?>




<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php
	
		include ("include/head.php");
		
	?>
</head>

<body>
	
	<!--Header-->
	<?php
		
		include ("include/header.php");
		
	?>
    <!--end-Header-->
	
	
	<!--slide_product-->
		<?php
		
			include ("include/slide_product.php");
		
		?>
	<!--end-slide_product-->
	
	
    <!-- Featured Section Begin -->
		<?php
		
			include ("include/product.php");
		
		?>
    <!-- Featured Section End -->


    <!-- Banner Begin -->
		<?php
		
			include ("include/banner.php");
		
		?>
   <!-- Banner End -->

    
    <!-- Blog Section Begin -->
		<?php
		
			include ("include/blog.php");
		
		?>
   <!-- Blog Section End -->


    <!-- Footer Section Begin -->
		<?php
		
			include ("include/footer.php");
		
		?>

    <!-- Footer Section End -->




</body>

</html>