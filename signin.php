<?php
session_start();
include_once 'database/dB_Connection.php';

if (isset($_POST['loginUsername']) && isset($_POST['loginPassword'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['loginUsername']);
	$pass = validate($_POST['loginPassword']);


	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
		exit();
	} else if (empty($pass)) {
		header("Location: login.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE username='$uname'";

		$result = mysqli_query($conn_full, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $uname && password_verify($pass, $row['password']) || $pass == $row['password']) {

				$_SESSION['username'] = $row['username'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['user_id'];
				header("Location: profile.php");
				exit();
			} else {
				header("Location: login.php?error=Incorect Username or password");
				exit();
			}
		} else {
			header("Location: login.php?error=Incorect Username or password");
			exit();
		}
	}
} else {
	header("Location: login.php");
	exit();
}
