<?php
$servername = "localhost";
$username = "root";
$password = "123";
$database = "projektDB";

$conn_full = mysqli_connect($servername, $username, $password, $database);

if (!$conn_full) {
	echo "Connection failed!";
}