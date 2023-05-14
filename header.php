<?php
if (session_id() == '') {
    session_start();
}

// <a href='cart.html' class='theme-btn-2 btn btn-effect-2'>Checkout</a>
require 'configure.php';

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 18:34:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Broccoli - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        .stripe-button-el {
            text-transform: uppercase !important;
            box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.3) !important;
            border-radius: 6px !important;
            outline: none !important;
            border: none !important;
            background-color: #56CCF2 !important;
            color: #fff !important;
            font-family: Arial, sans-serif !important;
            font-size: 16px !important;
            font-weight: bold !important;
            transition: all 0.3s ease-in-out !important;
        }

        .stripe-button-el:hover {
            background-color: #8369d1 !important;
            cursor: pointer !important;
        }

        .stripe-button-el span {
            display: block !important;
            position: relative !important;
            padding: 0 19px !important;
            height: 54px !important;
            line-height: 54px !important;
            text-align: center !important;
            border: none !important;
            outline: none !important;
        }
    </style>

</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-2">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area top-area-color-white d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                                    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-right">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__language-menu -->
                                            <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                                <ul>
                                                    <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                        <ul>
                                                            <li><a href="#">Arabic</a></li>
                                                            <li><a href="#">Bengali</a></li>
                                                            <li><a href="#">Chinese</a></li>
                                                            <li><a href="#">English</a></li>
                                                            <li><a href="#">French</a></li>
                                                            <li><a href="#">Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->

            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black sticky-active-into-mobile plr--9---">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="index.html"><img src="img/logo-2.png" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column menu-color-white">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li class="menu-icon"><a href="index.php">Home</a>
                                                <!-- <ul class="sub-menu menu-pages-img-show ltn__sub-menu-col-2---">
                                                <li>
                                                    <a href="index.html">Home Style 01</a>
                                                    <img src="img/home-demos/home-1.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home Style 02</a>
                                                    <img src="img/home-demos/home-2.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home Style 03</a>
                                                    <img src="img/home-demos/home-3.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home Style 04</a>
                                                    <img src="img/home-demos/home-4.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-5.html">Home Style 05 <span class="menu-item-badge">video</span></a>
                                                    <img src="img/home-demos/home-5.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-6.html">Home Style 06</a>
                                                    <img src="img/home-demos/home-6.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-7.html">Home Style 07</a>
                                                    <img src="img/home-demos/home-7.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-8.html">Home Style 08</a>
                                                    <img src="img/home-demos/home-8.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-9.html">Home Style 09</a>
                                                    <img src="img/home-demos/home-9.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-10.html">Home Style 10</a>
                                                    <img src="img/home-demos/home-10.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-11.html">Home Style 11 <span class="menu-item-badge">Service</span></a>
                                                    <img src="img/home-demos/home-11.jpg" alt="#">
                                                </li>
                                            </ul> -->
                                            </li>
                                            <li class="menu-icon"><a href="about.php">About</a>
                                                <!-- <ul>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                                <li><a href="portfolio.html">Gallery</a></li>
                                                <li><a href="portfolio-2.html">Gallery - 02</a></li>
                                                <li><a href="portfolio-details.html">Gallery Details</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="locations.html">Google Map Locations</a></li>
                                            </ul> -->
                                            </li>
                                            <li><a href="shop.php">Shop</a>
                                                <!-- <ul>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                                    <li><a href="product-details.html">Shop details </a></li>
                                                    <li><a href="product-details-no-sidebar.html">Shop details no sidebar </a></li>
                                                    <li><a href="#">Other Pages <span class="float-right">>></span></a>
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="order-tracking.html">Order Tracking</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                            <li><a href="login.html">Sign in</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-icon"><a href="#">News</a>
                                                <ul>
                                                    <li><a href="blog.html">News</a></li>
                                                    <li><a href="blog-grid.html">News Grid</a></li>
                                                    <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                                    <li><a href="blog-details.html">News details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon"><a href="#">Pages</a>
                                                <ul class="mega-menu">
                                                    <li><a href="#">Inner Pages</a>
                                                        <ul>
                                                            <li><a href="portfolio.html">Gallery</a></li>
                                                            <li><a href="portfolio-2.html">Gallery - 02</a></li>
                                                            <li><a href="portfolio-details.html">Gallery Details</a></li>
                                                            <li><a href="team.html">Team</a></li>
                                                            <li><a href="team-details.html">Team Details</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Inner Pages</a>
                                                        <ul>
                                                            <li><a href="history.html">History</a></li>
                                                            <li><a href="contact.html">Appointment</a></li>
                                                            <li><a href="locations.html">Google Map Locations</a></li>
                                                            <li><a href="404.html">404</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop Pages</a>
                                                        <ul>
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                            <li><a href="product-details.html">Shop details </a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html"><img src="img/banner/menu-banner-1.png" alt="#"></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <?php
                                            if (isset($_SESSION['name'])) { ?>
                                                <li class="special-link"><a href="#"><?php echo $_SESSION['name'] ?></a></li>
                                            <?php
                                            } ?>
                                            <?php
                                            if (isset($_SESSION['registered']) == false) {
                                                echo " <li class='special-link'><a href='register.php'>Register</a></li>";
                                                echo " <li class='special-link'><a href='login.php'>Login</a></li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="ltn__header-options ltn__header-options-2">
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form id="#" method="get" action="#">
                                        <input type="text" name="search" id="search" autocomplete="off" value="" placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- user-menu -->
                            <?php
                            if (isset($_SESSION['registered']) == true) {
                                echo " <div class='ltn__drop-menu user-menu'>
                                   <ul>
                                       <li>
                                           <a href='#'><i class='icon-user'></i></a>
                                           <ul>" ?>

                                <?php
                                if (isset($_SESSION['login']) == true) {
                                    echo "<li><a href='logout.php'>Logout</a></li>";
                                } else {
                                    echo "<li><a href='login.php'>Login</a></li>";
                                }

                                ?>
                            <?php echo "
                                               <li><a href='account.html'>My Account</a></li>
                                               <li><a href='wishlist.html'>Wishlist</a></li>
                                           </ul>
                                       </li>
                                   </ul>
                               </div>";
                            }
                            ?>
                            <!-- mini-cart -->
                            <div class="mini-cart-icon">
                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $count = count($_SESSION['cart']);
                                        echo "<sup>$count</sup>";
                                    } else {
                                        echo "<sup>0</sup>";
                                    }
                                    ?>

                                </a>
                            </div>
                            <!-- mini-cart -->
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">My Cart</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar">

                    <div class="mini-cart-item clearfix">
                        <?php
                        $pro_total = 0;
                        $sub_total = 0;
                        if (isset($_SESSION['cart'])) {
                            $index = 1;
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $pro_total = $value['product_price'] * $value['product_qty'];
                                $sub_total += $value['product_price'] * $value['product_qty'];
                                echo "
                <form action='insertcart.php' method='post'>
                    <div class='mini-cart-img'>
                        <a href='#'><img src='data:image/jpg;base64," . base64_encode($value['product_img']) . "'></a> 
                        <button type='submit' name='removepro' class='mini-cart-item-delete'><i class='icon-cancel'></i></button>
                    </div>
                    <div class='mini-cart-info'>
                        <h6><a href='#' >{$value['product_name']}</a></h6>
                        <span class='mini-cart-quantity'>{$value['product_qty']} x Rs {$value['product_price']}</span>
                    </div>
                    <input type='hidden' name='delbtn2' value='{$value['product_name']}'>
                </form> <br>
            ";
                                $index++;
                            }
                        }
                        ?>


                    </div>
                </div>
                <?php

                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

                    echo "<div style='text-align: right;'>
                <form action='insertcart.php' method='post'>
                    <button type='submit' name='clearcart' class='theme-btn-2 btn btn-effect-2'>Clear Cart</button> 
                </form>
            </div>  
            <div class='mini-cart-footer'>
                <div class='mini-cart-sub-total'>";
                    $count = count($_SESSION['cart']);
                    if ($count > 0) {
                        echo "<h5>Subtotal: <span>Rs $sub_total</span></h5>";
                    }
                    echo "</div>
                <div class='btn-wrapper'>
                    <a href='viewcart.php' class='theme-btn-1 btn btn-effect-1'>View Cart</a>
                    " ?>
                    <form action="submit.php" method="post">
                        <input type="hidden" name="sub_total" value="<?php echo $sub_total ?>">
                        <script src='https://checkout.stripe.com/checkout.js' class='stripe-button' data-key="<?php echo $Publishable_key ?>" data-amount="<?php echo $sub_total * 100 ?>" data-name="Brocolli" data-description="Order Food Now" data-image="http://localhost/food_website/php_folder/img/logo-2.png" data-currency="pkr" data-email="<?php echo $user_email ?>" data-billingAddress="true" data-zipCode="true" data-locale="auto" data-label="Checkout"
>
                        </script>
                    </form>
                <?php echo "
                </div>
                <p>Free Shipping on All Orders Over Rs 10000!</p>
            </div>";
                } else {
                    echo "<h3>No products In cart</h3>";
                }
                ?>

            </div>
        </div>

        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Pages 01</a></li>
                                <li><a href="index-2.html">Home Pages 02</a></li>
                                <li><a href="index-3.html">Home Pages 03</a></li>
                                <li><a href="index-4.html">Home Pages 04</a></li>
                                <li><a href="index-5.html">Home Pages 05 <span class="menu-item-badge">video</span></a></li>
                                <li><a href="index-6.html">Home Pages 06</a></li>
                                <li><a href="index-7.html">Home Pages 07</a></li>
                                <li><a href="index-8.html">Home Pages 08</a></li>
                                <li><a href="index-9.html">Home Pages 09</a></li>
                                <li><a href="index-10.html">Home Pages 10</a></li>
                                <li><a href="index-11.html">Home Pages 11 <span class="menu-item-badge">Service</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="history.html">History</a></li>
                                <li><a href="contact.html">Appointment</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>