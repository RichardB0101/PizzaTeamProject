<?php
include_once 'header.php';


echo "<h2>Your username is: " . $_SESSION["user"]["username"] . "</h2></br>";
echo "<h2>Your password is: " . $_SESSION["user"]["password"] . "</h2></br>";
echo "test";
?>
<a href="uncheckUser.php" class="btn btn-danger mr-1">Logout</a>
    <?php
    include_once 'footer.php';
    ?>