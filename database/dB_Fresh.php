<?php 
//This file is responsible for creating dabase and tables. It was made to save teachers time when checking our projects :) so he doesn't need to manually create tables and databases

require_once "dB_Connection.php";
  // Creating databases and making first query
  
  $sql = "CREATE DATABASE IF NOT EXISTS projektdb";
  
  if (mysqli_query($conn_full, $sql)) {
    
  } else {
    echo "Error during creation, following error occured: " . mysqli_error($conn);
  }

  
  
  $sql = "CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `fullname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY(`user_id`)
  )";
$query = mysqli_query($conn_full, $sql);

$sql = "CREATE TABLE IF NOT EXISTS `pizzas` (
  `pizza_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`pizza_id`)
)";
$query = mysqli_query($conn_full, $sql);





if (mysqli_query($conn_full, $sql)) {
    
  } else {
    echo "Error during creation, following error occured: " . mysqli_error($conn);
  }