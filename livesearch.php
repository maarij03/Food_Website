<?php
require 'connection.php';

if (isset($_POST['search_term'])) {
    $input =  $_POST['search_term'];
    $sql = "SELECT * FROM `products`  p join `product_category` c on p.product_category = c.pto_cat_id where `product_name` like '{$input}%' OR `product_price` like '{$input}%' OR `pro_cat_name` like '{$input}%' OR `product_description` like '{$input}%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) { ?>
        <div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70" style="padding-top: 220px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Search Results for "<?php echo $input;?>"</h1>
                        </div>
                        
                     
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>

                                        <!-- ltn__product-item -->
                                        <div class="col-lg-4">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href=""><img src="data:image/jpg;base64,<?php echo base64_encode($row['product_img']); ?>"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" id="QuickViewBtn" title="Quick View" data-proid="<?php echo $row['product_id']; ?>">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>


                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html"><?php echo $row['product_name']; ?></a></h2>
                                                    <div class="product-price">
                                                        <span>Rs <?php echo $row['product_price']; ?></span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>

                                </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

<?php
    } 
    else {
        ?>

<div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70" style="padding-top: 300px; padding-bottom: 280px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">No such Results found for "<?php echo $input;?>"</h1>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <?php
    }
}


?>