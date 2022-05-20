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

// Creating databases and making first query

$sql = "CREATE DATABASE IF NOT EXISTS newDB";

if (mysqli_query($conn, $sql)) {
  echo "Query nice nice, DB created";
} else {
  echo "Error during creation, following error occured: " . mysqli_error($conn);
}

$conn_full = mysqli_connect($servername, $username, $password, "newDB");
$sqlo = "CREATE TABLE IF NOT EXISTS users (
  user_id INT AUTO_INCREMENT NOT NULL,
  name varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  primary key (user_id)
  )";


if (mysqli_query($conn_full, $sqlo)) {
  echo "</br>Nice. Table created";
} else {
  echo "Error in sql: " . mysqli_error($conn);
}

$guestname = $_POST["username"];
$guestpassword =  $_POST["password"];

//Inserting data
 
$sql_insert = "INSERT INTO users(name, password)
VALUES
('$guestname', '$guestpassword')
";


// Checking if inserted sucesfully 
if (mysqli_query($conn_full, $sql_insert)) {
  echo "</br> Inserted data succesfully";
} else {
  echo "Error in sql: " . mysqli_error($conn);
}

 //$sql_test = "TRUNCATE TABLE users;";
// mysqli_query($conn_full, $sql_test);


mysqli_close($conn);




