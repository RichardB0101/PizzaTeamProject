<?php 
session_start(); 
include_once 'database/dB_Connection.php';

if (isset($_POST['registerUsername']) && isset($_POST['registerPassword']) && isset($_POST['registerName']) && isset($_POST['registerEmail'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    function validate_name($data){
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

	$uname = validate($_POST['registerUsername']);
	$pass = validate($_POST['registerPassword']);
	$pass_hashed = password_hash($pass , PASSWORD_DEFAULT);
	$name = validate_name($_POST['registerName']);
	$email = validate($_POST['registerEmail']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
    }else if(empty($name)){
        header("Location: index.php?error=Fullname is required");
	    exit();
    }else if(empty($email)){
        header("Location: index.php?error=Email is required");
	    exit();
	}else{
		$sql = "INSERT INTO users(fullname,username,password,email)
        VALUES
        ('$name', '$uname', '$pass_hashed', '$email')
        ";
        $sqlSelect = "SELECT * FROM users WHERE username='$uname' AND password='$pass_hashed'";

		
		$resultNew = mysqli_query($conn_full, $sqlSelect);

		if (mysqli_num_rows($resultNew) === 0) {
            $result = mysqli_query($conn_full, $sql);
            header("Location: login.php");
		    exit();
            
		}else{
			header("Location: register.php?error=Username taken");
	        exit();
		}
    }
    }
else{
	header("Location: index.php");
	exit();
}
