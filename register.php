<?php
include_once 'header.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Pizza website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pizza <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Constacts</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn btn-primary mr-1" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="register.php">Register</a>
            </li>
        </ul>

    </div>
</nav>

<div class="container mb-5">

    <!-- Pills content -->
    <div class="tab-content">
            <form>
                <h2 class="text-center mt-5 mb-5">Register</h2>
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" id="registerName" class="form-control" />
                    <label class="form-label" for="registerName">Name</label>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="registerUsername" class="form-control" />
                    <label class="form-label" for="registerUsername">Username</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="registerEmail" class="form-control" />
                    <label class="form-label" for="registerEmail">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="registerPassword" class="form-control" />
                    <label class="form-label" for="registerPassword">Password</label>
                </div>

                <!-- Repeat Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="registerRepeatPassword" class="form-control" />
                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                </div>



                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
            </form>
        </div>

</div>

<table class="table table-dark table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last name</th>
    </tr>
    <tr>
        <th>1</th>
        <th>Alfred</th>
        <th>Alonzo</th>
    </tr>
    <tr>
        <th>2</th>
        <th>Karol</th>
        <th>Marengo</th>
    </tr>
</table>



<?php
include_once 'footer.php';
?>