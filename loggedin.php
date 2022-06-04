<?php
include_once 'header.php';
?>


</br>Welcome, <?php echo $_POST["registerName"]; ?><br>
Your username is: <?php echo $_POST["registerUsername"]; ?></br>
Your password is: <?php echo $_POST["registerPassword"]; ?></br>
Your email is: <?php echo $_POST["registerEmail"]; ?></br>

<?php
include_once 'database/dB_Creation.php';
    ?>

    <?php
    include_once 'footer.php';
    ?>