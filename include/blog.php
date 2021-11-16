<?php

    include ("dbconnection/db.php");
    $sql = "SELECT * FROM blogs;";
    $result = mysqli_query($con, $sql);

?>
 
 <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>អំពីផលិតផល</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php

                while($row = mysqli_fetch_array($result))
                    {

            ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/<?= $row['blog_image']; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i><?= $row['blog_date']; ?></li>
                            </ul>
                            <h5><a href="#"><?= $row['blog_title'] ;?></a></h5>
                            <p><?= $row['blog_paragraph']; ?></p>
                        </div>
                    </div>
                </div>
            <?php

                    };

            ?>
            </div>
        </div>
    </section>
    