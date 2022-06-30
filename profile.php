<?php
include_once 'header.php';

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <a class="btn btn-danger"href="del-acc.php">Delete account</a><br>




     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>