<?php
include_once 'header.php';
?>

<div class="container mb-5">
    <form >
        <h2 class="text-center mt-5 mb-5">Login</h2>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" required/>
            <label class="form-label" for="form2Example1">Username</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" required/>
            <label class="form-label" for="form2Example2">Password</label>
        </div>


        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>


    </form>
    </div>





    <?php
    include_once 'footer.php';
    ?>