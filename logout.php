<?php
if (session_id() == '') {
    session_start();
}
include 'connection.php';

session_unset();
session_destroy();
$_SESSION['logout'] = true;
header('location:index.php');

?>