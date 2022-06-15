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
        ('$name', '$uname', '$pass', '$email')
        ";

		$result = mysqli_query($conn_full, $sql);

		if (mysqli_num_rows($result) === 0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: profile.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}