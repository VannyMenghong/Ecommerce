<?php

    include ("dbconnection/db.php");
    $sql = "SELECT * FROM products;";
    $result = mysqli_query($con,$sql);


?>
<section class="featured spad mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>ទំនេញចម្រុះ</h2>
                    </div>
                
                </div>
            </div>
            <div class="row featured__filter">
                <?php

                    while($row = mysqli_fetch_array($result))   
                        {

                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div  class="featured__item__pic set-bg" data-setbg="img/product/<?= $row['pro_image'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="details.php?id=<?= $row['pro_id']; ?>" type="submit" value="send"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6 class=""><a href="#"><?= $row['pro_name']; ?></a></h6>
                            <h5><?= $row['pro_price'] ;  ?> <span class=" fa fa-dollar text-success"> </span></h5>
                        </div>
                    </div>
                </div>  
                <?php

                        };

                ?>
            </div>
        </div>
    </section>
    