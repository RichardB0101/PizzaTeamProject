<?php
include_once 'header.php';
include_once '/database/dB_Creation';
?>


<div class="container mb-5">

    <!-- Pills content -->
    <div class="tab-content">
        <form action="loggedin.php" method="post">
            <h2 class="text-center mt-5 mb-5">Register</h2>
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input name="registerName" type="text" id="registerName" class="form-control" required />
                <label class="form-label" for="registerName">Name</label>
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
                <input name="registerUsername" type="text" id="registerUsername" class="form-control" required />
                <label class="form-label" for="registerUsername">Username</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input name="registerEmail" type="email" id="registerEmail" class="form-control" required />
                <label class="form-label" for="registerEmail">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input name="registerPassword" type="password" id="registerPassword" class="form-control" required />
                <label class="form-label" for="registerPassword">Password</label>
            </div>




            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
    </div>
    <?php 
echo $_SESSION['message'];
?>
</div>




<?php
include_once 'footer.php';
?>