<?php
session_start();

if(isset($_POST['product']) && isset($_POST['quantity'])) {
    $productName = $_POST['product'];
    $quantity = $_POST['quantity'];

    // Update the product quantity in the session cart
    foreach ($_SESSION['cart'] as $key => $value) {
        if($value['product_name'] == $productName) {
            $_SESSION['cart'][$key]['product_qty'] = $quantity;
            break;
        }
    }

    // Calculate the new cart total
    $total = 0;
    foreach ($_SESSION['cart'] as $value) {
        $total += $value['product_price'] * $value['product_qty'];
    }

    // Return the new cart total in JSON format
    echo json_encode(['total' => $total]);
}
?>
