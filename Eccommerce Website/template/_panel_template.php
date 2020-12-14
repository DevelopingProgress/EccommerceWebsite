<?php
if(isset($_GET['action']) && $_GET['action'] == "logout") {
    logout();
}
?>
<!--Section: Login Form-->
<section id="panelnav" class="mb-5">
    <!-- start panel nav -->
    <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="panel.php">Panel Sterowania</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPanel" aria-controls="navbarPanel" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarPanel">
                <?php if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 1){?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=usermanagement">Użytkownicy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=adminorders">Zamówienia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=products">Produkty </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=categories">Kategorie </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?action=logout">Wyloguj się</a>
                    </li>
                </ul>
                <?php } else{ ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=editprofile">Edytuj profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=setpassword">Zmień hasło</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=editaddress">Edytuj adres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=clientorders">Historia zamówień</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?page=deleteaccount">Usuń konto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panel.php?action=logout">Wyloguj się</a>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </nav>
    <!-- finish panel nav -->
</section>

<section id="panelheader" class="mb-5">

</section>
<?php     var_dump($_SESSION);?>