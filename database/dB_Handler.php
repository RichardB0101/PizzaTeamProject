<?php
session_start();

// This is procedural way of establishing connection with database, whole point of this program is to practice a bit of queries along with PHP



require_once "dB_Connection.php";


if (mysqli_query($conn_full, $sqlo)) {
  echo "</br>Nice. Table created";
} else {
  echo "Error in sql: " . mysqli_error($conn);
}

$guestname = $_POST["registerName"];
$guestusername =  $_POST["registerUsername"];
$guestpassword =  $_POST["registerPassword"];
$guestemail =  $_POST["registerEmail"];


// Inserting data
 
$sql_insert = "INSERT INTO users(fullname,username,password,email)
VALUES
('$guestname', '$guestusername', '$guestpassword', '$guestemail')
";

$check_user = mysqli_query($conn_full, "SELECT * FROM users WHERE username =  '$guestusername'");
if(mysqli_num_rows($check_user) > 0){
  $_SESSION['message'] = '<br><p>USER ALREADY EXISTS!</p>';
  header('Location: ..\register.php');
 }
 else{
  header('Location: ..\data.php');
 }

// Sql query to select users data
$sql="SELECT username, password, user_id FROM users";

// Making query
$result = mysqli_query($conn_full, $sql);

// Trying to fetch data from Database as an array
$data = mysqli_fetch_assoc($result);


 $_SESSION['user'] = [
  "id" => $data["user_id"],
  "username" => $data["username"],
  "password" => $data["password"]
 ];


// Checking if inserted sucesfully 
if (mysqli_query($conn_full, $sql_insert)) {
  echo "</br> Inserted data succesfully";
} else {
  echo "Error in sql: " . mysqli_error($conn);
  //should add here instead comment that users already exists
}



// $sql_test = "DROP TABLE users;";
// mysqli_query($conn_full, $sql_test);

// Sql query to select users data
//$sql="SELECT username, password FROM users";

// Making query
//$result = mysqli_query($conn_full, $sql);

// Trying to fetch data from Database as an array
//$data = mysqli_fetch_assoc($result);

//print_r($data);













