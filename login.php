<?php
include_once 'header.php';

?>



<div class="container mb-5" style="height: 78%;">
    <div class="">
        <form action="signin.php" method="post">
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
        <p class="text-muted">Login form is case sensitive</p>
    </div>
</div>


<?php
include_once 'footer.php';
?>