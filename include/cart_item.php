    <?php

        include ("dbconnection/db.php");
        $sql = "SELECT * FROM carts ; ";
        $result = mysqli_query($con, $sql);
        

    ?>
    
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-center" style="font-size:30pt;font-family:cairo;font-weight:bold;border-bottom:2px solid grey;
                    	";> បញ្ជីទំនិញកម្មង់ </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">ផលិតផល</th>
                                    <th>តម្លៃ</th>
                                    <th>ចំនួន</th>
                                    <th>សរុប</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                while($row = mysqli_fetch_array($result))
                                    {
                            ?>

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/product/<?= $row['cart_image'];?>" style="width:150px;" alt="">
                                        <h5><?= $row['cart_name'];?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                       <span class="fa fa-dollar" style="font-size:20px;font-weight:bold;"><?= $row['cart_price'];?></span> 
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?= $row['cart_quantity'];?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <span class="fa fa-dollar" style="font-size:20px;font-weight:bold;"><?= $row['cart_total'];?></span>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="include/cart_delete.php?id=<?= $row['cart_id'];?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                            <?php

                                    };                                        

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between">
                    <div class="shoping__cart__btns">
                        <a href="shop.php?id=1" class="primary-btn cart-btn">ជ្រើសរើសទំនិញបន្ថែម</a>
                    </div>
                    <?php
                                    
                                        $result2 = mysqli_query($con, 'SELECT SUM(cart_total) AS total FROM carts'); 
                                        $row2 = mysqli_fetch_assoc($result2); 
                                        $sum = $row2['total'];
                                            
                    ?>  

                    <div class="total border-bottom">
                        <p style="font-size:20px; color:black; margin-right:250px;"><b> តម្លៃសរុប : <span class="ml-4 text-danger" style="font-size:25px;">$ <?= $sum; ?></span></b></p>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-end mt-5 ">
                <div class="shoping__cart__btns ">
                        <a href="checkout.php?id=3" class="primary-btn cart-btn bg-warning fa fa-dollar">គិតលុយឥឡូវ</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->