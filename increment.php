<?php
session_start();

var_dump($_GET['id']);
$id = $_GET['id'];

$_SESSION['cart'][$id]['quantity']++;
header('Location: cart.php');

// dans mon session cart
//le cookie qui a pour id $id
// a sa quantité qui incrémente
