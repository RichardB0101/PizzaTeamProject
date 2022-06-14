<?php 
//This code should execute on first website startup if user never had database and table before.

// DataBase login credentials

$servername = "localhost";
$username = "lab";
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