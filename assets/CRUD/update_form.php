<?php
session_start();
require_once("../../database/dB_Connection.php");
$my_id = $_GET['update_id'];
$_SESSION['identificator'] = $my_id;

$read = mysqli_query($conn_full, "SELECT * FROM `users` WHERE `user_id` = $my_id");
$temporary = mysqli_fetch_assoc($read);
$temp_fullname = $temporary['fullname'];
$temp_username = $temporary['username'];
$temp_email = $temporary['email'];
$temp_password = $temporary['password'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit user #<?php echo $my_id; ?></h2>
    <form action="update.php" class="form ms-5" method="POST">
        <input type=hidden name="update_id" value="<?php $my_id; ?>">

        <input name="update_fullname" type="text" value="<?php echo $temp_fullname; ?>" placeholder="Enter fullname"><br>
        <input name="update_username" type="text" value="<?php echo $temp_username; ?>" placeholder="Enter username"><br>
        <input name="update_email" type="text" value="<?php echo $temp_email; ?>" placeholder="Enter email"><br>
        <input name="update_password" type="text" value="<?php echo $temp_password; ?>" placeholder="Enter password"><br>
        <button type="submit" class="btn btn-primary w-25">Update</button>
    </form>
</body>

</html>