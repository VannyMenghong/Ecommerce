  <?php
  
        include ("dbconnection/db.php");
        $sql = "SELECT * FROM banners ;" ;
        $result = mysqli_query($con, $sql);

  ?>
  
  <div class="banner mb-5">
        <div class="section-title">
          <h2>ព្រឹត្តិការណ៍ប្រូម៉ូសិនទំនិញ</h2>
         </div>
        <div class="container">
            <div class="row">
            <?php

                while($row = mysqli_fetch_array($result))
                    {

            ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/<?= $row['ban_image']; ?>" alt="">
                    </div>
                </div>
            <?php

                    };

            ?>
            </div>
        </div>
    </div>
   