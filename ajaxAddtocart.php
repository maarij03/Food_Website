<?php
include("connection.php");

$id = $_POST["id"];
$sql = "SELECT * FROM `products`p join `product_category` c on p.product_category = c.pto_cat_id where `product_id` = '$id'";
$execute = mysqli_query($conn, $sql) or die("SQL FAILED");
$fetch = mysqli_fetch_assoc($execute);
$output = "";


if (mysqli_num_rows($execute) > 0) {
?>

    <div class="ltn__quick-view-modal-inner">
        <div class="modal-product-item">
            <div class="row">
                <div class="col-12">
                    <div class="modal-product-img">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($fetch['product_img']); ?>" alt="#">
                    </div>
                    <div class="modal-product-info">
                        <form action="insertcart.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="product_name" value="<?php echo $fetch['product_name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch['product_price']; ?>">
                            <input type="hidden" name ="qtybutton" value = 1>
                            <h5><a href="product-details.html"><?php echo $fetch['product_name']; ?></a></h5>
                            <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Cart</p>
                            <div class="btn-wrapper">
                                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                            </div>
                        </form>
                    </div>
                    <!-- additional-info -->
                    <div class="additional-info d-none---">
                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use (LoveBroccoli) discount code at checkout</p>
                        <div class="payment-method">
                            <img src="img/icons/payment.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

} else {
    echo 0;
}



?>