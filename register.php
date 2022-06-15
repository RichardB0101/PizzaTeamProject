<?php
include_once 'header.php';
?>


<div class="container mb-5">

    <!-- Pills content -->
    <div class="tab-content">
        <form action="signup.php" method="POST">
            <h2 class="text-center mt-5 mb-5">Register</h2>
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input name="registerName" type="text" id="registerName" class="form-control" required />
                <label class="form-label" for="registerName">Full Name</label>
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
            <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
        </form>
    </div>
</div>




<?php
include_once 'footer.php';
?>