<?php
session_start();

$id = $_GET['id'];

$_SESSION['cart'][$id]['quantity']--;
if ($_SESSION['cart'][$id]['quantity'] <= 0) {
    unset($_SESSION['cart'][$id]);
}
header('Location: cart.php');


// si ma quantité est inférieure ou égale à 0, alors le produit est retiré de ma page
