<?php
include_once 'header.php';
?>


</br>Welcome <?php echo $_POST["username"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?></br>

<?php
include_once 'database/dB_Creation.php';
    ?>

    <?php
    include_once 'footer.php';
    ?>