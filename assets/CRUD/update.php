<?php
session_start();

require_once("../../database/dB_Connection.php");

$my_id = $_SESSION['identificator'];
$my_username = $_POST['update_username'];
$my_fullname = $_POST['update_fullname'];
$my_email = $_POST['update_email'];
$my_password = $_POST['update_password'];



if (isset($_POST['update_name']) && isset($_POST['update_desc']) && isset($my_id)) {

    $sql = mysqli_query($conn_full, "UPDATE `users` SET `username`= '$my_username',`fullname`='$my_fullname',`email`='$my_email' ,`password`='$my_password'  WHERE `product_id`=$my_id");
    header("Location: ../../admin.php");
    unset($_SESSION['identificator']);
    exit();
}
