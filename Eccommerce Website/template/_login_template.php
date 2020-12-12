<?php
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['login_submit'])){
        login($_POST['email'], $_POST['password']);
    }
}
?>
<!--Section: Login Form-->
<section id="login-form" class="py-3 mb-5">
    <div class="container-fluid w-25">
        <h5 class="font-roboto font-size-20">Zaloguj się</h5>

            <form method="post" class="needs-validation" novalidate autocomplete="off">

                <div class="md-form md-outline">
                    <input type="email" name="email" id="login-email" class="form-control">
                    <label data-error="wrong" data-success="right" for="login-email">Email</label>
                </div>
                <div class="md-form md-outline">
                    <input type="password" name="password" id="login-password" class="form-control">
                    <label data-error="wrong" data-success="right" for="login-password">Hasło</label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">

                    <?php
                    if(isset($_GET['action']) && $_GET['action'] == "loginfailed"){

                        ?>
                        <p class="font-weight-bold"><span class="text-danger">Niepoprawny login lub hasło</span></p>
                        <?php
                    }
                    // unset($_SESSION['admin']);
                    ?>

                </div>

                <div class="text-center pb-2">

                    <button type="submit" name="login_submit" class="btn btn-danger mb-4">Zaloguj</button>
                    <p><a class="text-danger text-decoration-none" href="#">Zapomniałeś hasła?</a></p>

                    <p>Nie masz konta? <a class="text-danger text-decoration-none" href="#">Zarejestruj</a></p>

                    <p>lub zarejestruj za pomocą:</p>

                    <a type="button" class="btn-floating btn-sm btn-danger mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-sm btn-danger mr-1">
                        <i class="fab fa-google"></i>
                    </a>
                </div>

            </form>
        <!--Section: Login Form-->
    </div>

</section>