<?php 
//This file is responsible for creating dabase and tables. It was made to save teachers time when checking our projects :) so he doesn't need to manually create tables and databases

// DataBase login credentials

$servername = "localhost";
$username = "lab";
$password = "123";
$database = "projektDB";

// Create connection

$conn = mysqli_connect($servername, $username, $password);

// Checking for connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  
  // Creating databases and making first query
  
  $sql = "CREATE DATABASE IF NOT EXISTS projektDB";
  
  if (mysqli_query($conn, $sql)) {
    
  } else {
    echo "Error during creation, following error occured: " . mysqli_error($conn);
  }

  require_once "dB_Connection.php";
  
  
  $sqlo = "CREATE TABLE IF NOT EXISTS users(
    user_id INT AUTO_INCREMENT NOT NULL,
    username varchar(255) NOT NULL UNIQUE,
    fullname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    primary key (user_id)
    )";

if (mysqli_query($conn_full, $sqlo)) {
    
  } else {
    echo "Error during creation, following error occured: " . mysqli_error($conn);
  }