   <!-- Header Section Begin -->
   <?php
        
        $id=$_GET['id'];

        $home="";
        $item="";
        $cart="";
        $checkout="";
        $contact="";
        $home = "";
      
        switch($id){
            case '0':
                $home = "active";
                break;
            case '1':
                $item = "active";
                break;
            case '2':
                $cart = "active";
                break;
            case '3':
                $checkout = "active";
                break;
            case '4':
                $contact = "active";
                break;
           
        }
    

   ?>
   
   
   <header class="header " >
        <div class="header__top">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>Vannyhong99@gmail.com</li>
                                <li>ដឹកជូនដោយមិនគិតថ្លៃសេវា</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4 bg-warning shadow mb-5 ">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu ">
                        <ul>

							<li class="<?= $home; ?>"><a href="./index.php?id=0" style="font-size:17px;">ទំព័រដើម</a></li>
                            <li class="<?= $item; ?>"><a  href="./shop.php?id=1" style="font-size:17px;">ទំនិញ</a></li>
                            <li class="<?= $cart; ?>"><a href="./cart.php?id=2" style="font-size:17px;">មើលទំនិញ</a></li>
                            <li class="<?= $checkout; ?>"><a href="./checkout.php?id=3" style="font-size:17px;">បង់ប្រាក់</a></li>
                            <li class="<?= $contact; ?>"><a href="./contact.php?id=4" style="font-size:17px;">ទំនាក់ទំនង</a></li>
                            

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2    ">
                    <div class="header__cart">
                        <ul  class="d-flex">
                            
                            <li><a href="./cart.php?id=2"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            <p>សរុប : <span class="text-danger">100$</span></p>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>ប្រភេទទំនិញ</span>
                        </div>
                        <ul>
                            <li><a​ href="#">Fresh Meat</a​></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#" style="border:1px solid grey;">
                                <div class="hero__search__categories">
                                    ​​    ស្វែងរកទំនិញ
                                   
                                </div>
                                <input type="text" placeholder="ឈ្មោះទំនិញ">
                                <button type="submit" class="site-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5 class="bg-warning  text-center rounded">077 645 994</h5>
                                <span>ផ្ដល់សេវាកម្ម​ 24​ មោ៉ង</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


