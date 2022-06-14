<?php
include_once 'header.php';

?>



<div class="container mb-5">
    <form method="post">
        <h2 class="text-center mt-5 mb-5">Login</h2>
        <!-- Username input -->
        <div class="form-outline mb-4">
            <input type="username" name="loginUsername" class="form-control" required />
            <label class="form-label" for="form2Example1">Username</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="loginPassword" class="form-control" required />
            <label class="form-label" for="form2Example2">Password</label>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


    </form>
</div>

<?php
include_once 'database/dB_Handler.php';
$loginUsername = $_POST["loginUsername"];
$loginPassword = $_POST["loginPassword"];

$check_user = mysqli_query($conn_full, "SELECT * FROM users WHERE username =  '$loginUsername' AND password = '$loginPassword'");

if (mysqli_num_rows($check_user) > 1) {
    $_SESSION['message2'] = '<br><p>WRONG USERNAME OR PASSWORD!</p>';
    header('Location: login.php');
} else {
    header('Location: loggedin.php');
$sql="SELECT username, password, user_id FROM users WHERE username =  '$loginUsername' AND password = '$loginPassword'";
$result = mysqli_query($conn_full, $sql);
$data = mysqli_fetch_assoc($result);

 $_SESSION['user'] = [
  "id" => $data["user_id"],
  "username" => $data["username"],
  "password" => $data["password"]
 ];

}


echo $_SESSION['message2'];

?>





<?php
include_once 'footer.php';
?>