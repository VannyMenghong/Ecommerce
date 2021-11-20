<?php
	$slide="";
	$product="";
	$categorie="";
	$banner="";
	$blog="";		
	$p = "";
	if(isset($_GET['p'])){
		$p = $_GET['p'];
		switch($p){
			case "slide.php":
				$slide = "active";
				break;
			case "product.php":
				$product = "active";
				break;
			case "categorie.php":
				$categorie = "active";
				break;
			case "banner.php":
				$banner = "active";
				break;
			case "blog.php":
				$blog = "active";
				break;

		}
	}

?>



<nav id="sidebar" class="sidebar js-sidebar" >
	<div class="sidebar-content js-simplebar">
		<p class="sidebar-brand" >
            <span class="align-middle">គ្រប់គ្រង់ website </span>
        </p>
			<ul class="sidebar-nav" style="font-size:13pt;">
				<li class="sidebar-header">
					Pages
				</li>

				<li class="sidebar-item <?= $slide;?>">
					<a class="sidebar-link" href="slide.php?p=slide.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">ស្លាយ/Slide</span>
					</a>
				</li>
				<li class="sidebar-item <?= $product;?>">
					<a class="sidebar-link" href="product.php?p=product.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">ផលិតផល</span>
					</a>
				</li>
				<li class="sidebar-item <?= $categorie;?>">
					<a class="sidebar-link" href="categorie.php?p=categorie.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">ប្រភេទ</span>
					</a>
				</li>

				<li class="sidebar-item <?= $banner;?>">
					<a class="sidebar-link" href="index.php?p=banner.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">ផ្ទាំងពាណិជ្ជកម្ម</span>
					</a>
				</li>
				<li class="sidebar-item <?= $blog;?>	">
					<a class="sidebar-link" href="index.php?p=blog.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">ព័ត៍មានខ្លីៗ</span>
					</a>
				</li>
				
				
			</ul>	
	</div>
</nav>
