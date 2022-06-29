<?php
require_once("../../database/dB_Connection.php");

$user_username = $_POST['form_username'];
$user_fullname = $_POST['form_fullname'];
$user_email = $_POST['form_email'];
$user_password = $_POST['form_password'];


$sql = mysqli_query($conn_full, "INSERT INTO `users`(`username`, `fullname`, `email`, `password`) VALUES ('$user_username','$user_fullname', '$user_email', '$user_password')");
header("Location: ../../admin.php");
exit();
