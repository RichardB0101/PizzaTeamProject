<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <!-- Boostrap 5 library  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Font awesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html,
        body {
            /* added this snippet of code as a solution to white gap appearing on the very right side of screen */
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .grow {
            transition: all .2s ease-in-out;
        }

        .grow:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Pizza website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Pizza <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="promo.php">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin panel (for the sake of example)</a>
                </li>
            </ul>
            <ul class="navbar-nav">




                <?php if (!isset($_SESSION['username'])) { ?>

                    <li class="ml-1 nav-item">
                        <a class="nav-link btn btn-primary mr-1" href="login.php">Login</a>
                    </li>


                    <li class="ml-1 nav-item">
                        <a class="nav-link btn btn-primary" href="register.php">Register</a>
                    </li>

                <?php }else if (isset($_SESSION['username'])){?>

                    <li class="ml-1 nav-item">
                        <a class="nav-link btn btn-primary mr-1" href="profile.php">My profile</a>
                    </li>


                    <li class="ml-1 nav-item">
                        <a class="nav-link btn btn-danger" href="logout.php">Logout</i></a>
                    </li>
                    <?php }$num=1;?>

                <li class="ml-2 nav-item">
                    <a class="nav-link btn btn-primary" href="cart.php"><i class="fa-solid fa-cart-shopping"><span class="mx-3"><?php if(isset($_SESSION['cart'])){$num = count($_SESSION['cart']); echo $num;} else{echo 0;}?></span></i></a>
                </li>
                <?php if(!empty($_SESSION['cart'])):?>
                <li class="ml-2 nav-item">
                    <a class="nav-link btn btn-danger" href="clearingCart.php"><i class="fa-solid fa-trash"></i></a>
                </li>
                <?php endif; ?>
                



            </ul>

        </div>
    </nav>