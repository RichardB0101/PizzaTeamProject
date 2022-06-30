<?php 
session_start();
require_once("database/dB_Connection.php");


$del_username = $_SESSION['username'];

$sql = mysqli_query($conn_full, "DELETE FROM `users` WHERE `username` = '$del_username'");
header("Location: logout.php");
exit();


