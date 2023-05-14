<?php
include("connection.php");

$id = $_POST["id"];
$sql = "SELECT * FROM `products`p join `product_category` c on p.product_category = c.pto_cat_id where `product_id` = '$id'";
$execute = mysqli_query($conn, $sql) or die("SQL FAILED");
$fetch = mysqli_fetch_assoc($execute);
$output = "";


if (mysqli_num_rows($execute) > 0) {
    $image_data = base64_encode($fetch['product_img']);
?>

    <div class="ltn__quick-view-modal-inner">
        <div class="modal-product-item">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="modal-product">
                        <img style="width:25vw;" src="data:image/jpg;base64,<?php echo base64_encode($fetch['product_img']); ?>" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <form action="insertcart.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="product_name" value="<?php echo $fetch['product_name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch['product_price']; ?>">
                        <input type="hidden" name="product_img" value="<?php echo $image_data;?>">

                        <div class="modal-product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                </ul>
                            </div>
                            <h3><?php echo $fetch['product_name']; ?></h3>
                            <div class="product-price">
                                <span>Rs <?php echo $fetch['product_price']; ?></span>
                            </div>
                            <div class="modal-product-meta ltn__product-details-menu-1">
                                <ul>
                                    <li>
                                        <strong>Categories:</strong>
                                        <span>
                                            <a href="#"><?php echo $fetch['pro_cat_name']; ?></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__product-details-menu-2">
                                <ul>
                                    <li>
                                        <div class="cart-plus-minus">
                                            <input type="number" value="01" name="qtybutton" class="cart-plus-minus-box" max="50" min="1">
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span>ADD TO CART</span>
                                        </a>
                                    </li> -->
                                    <li>
                                                <button class="theme-btn-1 btn btn-effect-1" type="submit" name="addtocart">
                                                <span>ADD TO CART</span>
                                                <i class="fas fa-shopping-cart"></i>
                                                </button>
                                           
                                            
                                        
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__product-details-menu-3">
                                <ul>
                                    <li>
                                        <a href="#" class="" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i>
                                            <span>Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="" title="Compare" data-toggle="modal" data-target="#quick_view_modal">
                                            <i class="fas fa-exchange-alt"></i>
                                            <span>Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="ltn__social-media">
                                <ul>
                                    <li>Share:</li>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php

} else {
    echo 0;
}



?>