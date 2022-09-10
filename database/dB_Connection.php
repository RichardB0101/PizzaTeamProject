<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projektdb";

$conn_full = mysqli_connect($servername, $username, $password, $database);

if (!$conn_full) {
	echo "Connection failed!";
}