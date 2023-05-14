<?php
include 'connection.php';
session_start();

if (isset($_POST['CartUpdate'])) {
    $qty = $_POST['c_qty'];
    $product_name = $_POST['product_name']; // Get the product name

    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['product_name'] == $product_name) {
            $_SESSION['cart'][$key]['product_qty'] = $qty; // Update the quantity
            break; // Exit the loop once the product is updated
        }
    }
}
