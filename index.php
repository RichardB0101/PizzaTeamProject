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

<div>
  <h2 class="mt-5 text-center mb-5">Pizza</h2>
  <!-- used "mx-auto" to align items horizontally -->
  <div class="container w-100">
    <div id="pizza-menu1" class="row mb-5">
      <img class="col-4 d-flex justify-content-centers" src="img/pizza-bazilica.jpeg" alt="pizza basilica">
      <img class="col-4 d-flex justify-content-centers" src="img/pizza-bazilica.jpeg" alt="pizza basilica">
      <img class="col-4 d-flex justify-content-centers" src="img/pizza-bazilica.jpeg" alt="pizza basilica">
    </div>
    <div id="pizza-menu2" class="row mb-5">
      <img class="col-4 d-flex justify-content-center mx-auto" src="img/pizza-bazilica.jpeg" alt="pizza basilica" width="20%">
      <img class="col-4 d-flex justify-content-center mx-auto" src="img/pizza-bazilica.jpeg" alt="pizza basilica" width="20%">
      <img class="col-4 d-flex justify-content-center mx-auto" src="img/pizza-bazilica.jpeg" alt="pizza basilica" width="20%">
    </div>
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