<?php
require 'configure.php';

\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$amount = $_POST['sub_total'];

$data = \Stripe\Charge::create (array(
    "currency"=>"pkr",
    "amount"=>$amount,
    "source"=>$token,
    "description"=>"Programming with Maarij"

));
echo "<pre>";
print_r($data);
?>