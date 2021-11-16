<?php

    include ("dbconnection/db.php");
    $sql = "SELECT * FROM slides;";
    $result = mysqli_query($con, $sql);
    


?>
 
 
 <!-- Categories Section Begin -->
<div class="section-title">
    <h2>ទំនិញពេញនិយម</h2>
</div>
    <section class="categories mt-4">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel" >
                
                <?php
                    
                    while($row = mysqli_fetch_array($result)){
                
                ?>
                    
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/slide/<?=$row['slide_image'];?>" style="width:100%;height:500px;">
                            <h5><a href="#"><?=$row['slide_title'];?></a></h5>
                        </div>
                    </div>

                <?php
       
                    };

                ?>
                </div>
            </div>
       
        </div>
    </section>
    <!-- Categories Section End -->
