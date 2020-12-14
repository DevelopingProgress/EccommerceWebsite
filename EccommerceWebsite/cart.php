<?php
session_start();
require ("database/DBconnect.php");
require ("functions.php");

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Biurka Plex</title>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- start header -->
<header id="header">

    <!-- start primary nav -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PLEX BIURKA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Oferta<i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategorie <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                </ul>
                <div class="mb-0 me-3">
                    <a href="<?php if(isset($_SESSION['admin'])) echo 'panel.php'; else echo 'login.php' ?>" class="border-right border-left text-white font-weight-bold text-decoration-none"><?php


                        if(isset($_SESSION['admin'])){
                            echo $_SESSION['admin'];
                        }else{
                            echo 'Zaloguj się';
                        }


                        ?></a>
                    <?php
                    $count = count(fetchProduct('wishlist')) ?? 0;
                    if(isset($_SESSION['admin'])) echo '<a href="cart.php" class="px-3 border-right  text-dark text-decoration-none">Lista życzeń('.$count.')</a>'
                    ?>
                </div>

                <form action="#" class="font-size-14 font-rale">
                    <a href="cart.php" class="py-2 rounded-pill color-primary-bg text-decoration-none">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php
                            echo count(fetchProduct('cart'));?></span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- finish primary nav -->

</header>
<!-- finish header -->


<!-- start main -->
<main id="main">


        <?php
        /*products section*/
        include('template/_cart_template.php');
        ?>

        <?php
        /*products section*/
        include('template/_wishlist_template.php');
        ?>




    <?php
    /*footer*/
    include('footer.php')
    ?>
