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

$sql = "CREATE DATABASE IF NOT EXISTS projektDB";

if (mysqli_query($conn, $sql)) {
  echo "Query nice nice, DB created";
} else {
  echo "Error during creation, following error occured: " . mysqli_error($conn);
}

$conn_full = mysqli_connect($servername, $username, $password, "projektDB");

$sqlo = "CREATE TABLE IF NOT EXISTS users(
  user_id INT AUTO_INCREMENT NOT NULL,
  username varchar(255) NOT NULL UNIQUE,
  fullname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  primary key (user_id)
  )";


if (mysqli_query($conn_full, $sqlo)) {
  echo "</br>Nice. Table created";
} else {
  echo "Error in sql: " . mysqli_error($conn);
}

$guestname = $_POST["registerName"];
$guestusername =  $_POST["registerUsername"];
$guestpassword =  $_POST["registerPassword"];
$guestemail =  $_POST["registerEmail"];


//Inserting data
 
$sql_insert = "INSERT INTO users(fullname,username,password,email)
VALUES
('$guestname', '$guestusername', '$guestpassword', '$guestemail')
";


// Checking if inserted sucesfully 
if (mysqli_query($conn_full, $sql_insert)) {
  echo "</br> Inserted data succesfully";
} else {
  echo "Error in sql: " . mysqli_error($conn);
  //should add here instead comment that users already exists
}

// $sql_test = "DROP TABLE users;";
// mysqli_query($conn_full, $sql_test);


mysqli_close($conn);




