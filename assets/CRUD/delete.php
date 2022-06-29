<?php

require_once("../../database/dB_Connection.php");


$my_id = $_GET['del_id'];

$sql = mysqli_query($conn_full, "DELETE FROM `users` WHERE `user_id` = '$my_id'");
header("Location: ../../admin.php");
exit();
