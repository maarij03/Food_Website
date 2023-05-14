<?php
session_start();
require 'connection.php';

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_quantity = $_POST['qtybutton'];
$image_data = base64_decode($_POST['product_img']);
if (isset($_POST['addtocart'])) {
    if (isset($_SESSION['user_id'])) {
        if (isset($_SESSION['cart'])) {
            $check_product = array_column($_SESSION['cart'], 'product_name');
            if (in_array($product_name, $check_product)) {
                require 'swal.php';
                echo "<script>showSwal('already_in_cart', 'index.php');</script>";
            } else {
                $product_qty = ($product_quantity == 1) ? 1 : $product_quantity;
                $_SESSION['cart'][] = array(
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_qty' => $product_qty,
                    'product_img' => $image_data
                );
                require 'swal.php';
                echo "<script>showSwal('added_to_cart', 'index.php');</script>";
            }
            
        }
        else {
            $product_qty = ($product_quantity == 1) ? 1 : $product_quantity;
                $_SESSION['cart'][] = array(
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_qty' => $product_qty,
                    'product_img' => $image_data
                );
               header('location:index.php');
        }
    } else {
        header('location:register.php');
    }
}

// Remove product
if (isset($_POST['removepro'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['product_name'] == $_POST['delbtn2']) {
            $pro_name = $_POST['delbtn2'];
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:index.php');
        }
    }
}

// Clear cart
if (isset($_POST['clearcart'])) {
    unset($_SESSION['cart']);
    header('location:index.php');
}
