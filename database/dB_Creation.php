<?php
// This is procedural way of establishing connection with database, whole point of this program is to practice a bit of queries along with PHP


// DataBase login credentials

$servername = "localhost";
$username = "root";
$password = "123";

// Create connection

$conn = mysqli_connect($servername, $username, $password);


// Checking for connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Conected successfully";


$sql = "CREATE DATABASE newDB";



