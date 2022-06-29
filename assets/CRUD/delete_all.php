<?php
require_once("../../database/dB_Connection.php");

$sql = mysqli_query($conn_full, "TRUNCATE TABLE `users`");
header("Location: ../../admin.php");
exit();
