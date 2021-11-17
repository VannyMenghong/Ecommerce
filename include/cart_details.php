 <?php



    include ("dbconnection/db.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE pro_id = '$id' ;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    
    
    
    
?>
<!-- Product Details Section Begin -->
    
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/<?= $row['pro_image']; ?>" alt="">
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?= $row['pro_name']; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                            
                        </div>
                        <div class="product__details__price">$<?= $row['pro_price']; ?><span class="text-dark " style="font-style:italic;font-size:25px;">/kg</span></div>
                        <p><?= $row['pro_description'];?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <form action="../ecommerce/include/cart_add.php?id=<?= $row['pro_id']; ?>" method="POST">
                                    
                                        <input type="number" name="qty" >
                                        <input type="submit" value="send">
                                </form>
                            </div>  
                        </div>
                        <!--<a href="../ecommerce/include/cart_add.php?id=" class="primary-btn">បូកបញ្ចូល</a> -->
                        
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>ស្ថានភាប​  :</b> <span>In Stock</span></li>
                            <li><b>ការដឹកជញ្ជូន​  :</b> <span> 1 ទៅ 2 ម៉ោង <samp>( ដឹកជញ្ជូនដោយមិនគិតថ្លៃ )</samp></span></li>
                            <li><b>សេវាកម្ម   :</b> <span>សម្រាប់តែក្នុងរាជធានីភ្នំពេញតែប៉ុណ្ណោះ</span></li>
                            <li><b>ចែករំលែកបន្ត   :</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->