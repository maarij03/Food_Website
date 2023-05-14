<?php
include 'header.php';
?>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h2 class="section-title white-color">My Cart</h2>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-bordered table-responsive-md">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $pro_total = 0;
                            $sub_total = 0;
                            if (isset($_SESSION['cart'])) {
                                $index = 1;
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    $pro_total = $value['product_price'] * $value['product_qty'];
                                    echo "
                                            <form action='insertcart.php' method='post'>
                                            <tr>
                                            <td class='text-dark'>$index</td>
                                            <td class='cart-product-image'>
                                            <a href='product-details.html'><img src='data:image/jpg;base64," . base64_encode($value['product_img']) . "'></a>
                                            </td>
                                            <td class='cart-product-info'>
                                            <h4><a href='product-details.html'>{$value['product_name']}</a></h4>
                                            </td>
                                            <td class='cart-product-price'>{$value['product_price']}</td>
                                            <td class='cart-product-quantity'>
                                                <input type='number' value='{$value['product_qty']}' name='qty{$value['product_qty']}' class = 'form-control qty' min='1' max='100'>
                                            </td>
                                            <td class='cart-product-subtotal'>Rs <span class='subtotal'>";
                                            echo $value['product_price'] * $value['product_qty'];
                                            echo "</span></td>

                                                <input type='hidden' name='delbtn2' value='{$value['product_name']}'>
                                                </tr>
                                            </form> <br>
                                            ";
                                    $index++;
                                    $sub_total += $value['product_price'] * $value['product_qty'];
                                }
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
                <div class="shoping-cart-total mt-50">
                    <h4>Cart Totals</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td>$618.00</td>
                            </tr>
                            <tr>
                                <td>Shipping and Handing</td>
                                <td>$15.00</td>
                            </tr>
                            <tr>
                                <td>Vat</td>
                                <td>$00.00</td>
                            </tr>
                            <tr>
                                <td><strong>Order Total</strong></td>
                                <td><strong>$633.00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-wrapper text-right">
                        <a href="checkout.html" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->

<?php
include "footer.php";
?>