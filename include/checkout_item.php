<?php

    include ("dbconnection/db.php");
    $sql = "SELECT * FROM carts ; ";
    $result = mysqli_query($con, $sql);


?>


<section class="breadcrumb-section set-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-center" style="font-size:30pt;font-family:cairo;font-weight:bold;border-bottom:2px solid grey;	";>ដាក់ការកម្មង់</h1>
                </div>
            </div>
        </div>
    </section>

 <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>ព័ត៍មានអតិថិជន</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>ត្រកូល<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>ឈ្មោះ<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>ទីលំនៅ<span>*</span></p>
                                <input type="text" value="រាជធានីភ្នំពេញ" >
                            </div>
                            <div class="checkout__input">
                                <p>អាស័យដ្ឋាន<span>*</span></p>
                                <input type="text"  class="checkout__input__add">
                                <input type="text" >
                            </div>
                            
                           
                            <div class="checkout__input">
                                <p>កំណត់សំគាល់ផ្សេងៗ<span>*</span></p>
                                <input type="text"
                                    >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>ការកម្មង់របស់អ្នក</h4>
                                <div class="checkout__order__products">ឈ្មោះ <span>តម្លៃ</span></div>

                                <?php
                                    
                                    while( $row = mysqli_fetch_array($result))
                                        {

                                ?>

                                <ul>
                                    <li><?= $row['cart_name']; ?><span>$<?= $row['cart_price'];?>x <?= $row['cart_quantity']; ?>set = <?= $row['cart_price'] * $row['cart_quantity'];?>$</span></li>
                                </ul>

                                <?php
                                    
                                        };

                                        $result2 = mysqli_query($con, 'SELECT  SUM(cart_total) AS total FROM carts'); 
                                        $row2 = mysqli_fetch_assoc($result2); 
                                        $sum = $row2['total'];
                                    
                                        
                                ?>

                                <div class="checkout__order__total">តម្លៃសរុប <span>$<?= $sum; ?> </span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        តើអ្នកបង្កើតគណនីទិញទំនេញនៅទីនេះទេ?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>ពេលដែលអ្នកមានគណនីអ្នកនិងមិនចាំបាច់ត្រូវការ
                                    បង់ប្រាក់តាមរយះកាត់ធានាគារទៀតនោះទេ 
                                    ងាយស្រួលទិញ ងាយស្រួលបង់ប្រាក់ ។</p>
                               
                                <a href="../ecommerce/countdown.php?id=5" class="site-btn">ចាប់ផ្ដើមកម្មង់
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->