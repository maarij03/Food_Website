<?php

require '../stripe-php-master/init.php';

$Publishable_key = "pk_test_51N0ZnmEWidlEeu3ZrzsvjiZYiHl7MaN4H7lq1NbFu6rzn1j05OpSTwvyRjZbmMyxk9HzK3crsoFDS3ByYyNbSbxa00DMKlhpFk";
$secret_key = "sk_test_51N0ZnmEWidlEeu3ZA1D8DhAXeIWBajemLZUCwkBUSZ76tYnseiu5tgsxjBjv9sibTQvQcc9QiII7V0YqKOLMxzHe00CBIJp1sQ"; 

\Stripe\Stripe::setApiKey($secret_key);

?>