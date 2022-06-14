<?php
include_once 'header.php';
?>



<h1>Testing a bunch of stuff</h1>

<h3>Database data test:</h3>

<?php
include_once 'database/dB_Handler.php';

// Sql query to select users data
$sql="SELECT username, password FROM users";

// Making query
$result = mysqli_query($conn_full, $sql);

// Trying to fetch data from Database as an array
$data = mysqli_fetch_assoc($result);


//echo "Username is: " .  $data['username'] . " - Password - " . $data['password'];


//print_r($data);

?>
<p>Hello, your data is </p>
<p>Username: <?php echo $_SESSION["user"]["username"]?></p>
<p>Password: <?php echo $_SESSION["user"]["password"]?></p>
<a href="logout.php" class="btn btn-danger mr-1">Logout</a>



    <?php
    include_once 'footer.php';
    ?>