<?php 
session_start();

$cartItemId = 1 - ($_GET['cartItem_del_id']);

unset($_SESSION['cart'][$cartItemId]);


header("Location: cart.php");
exit();


