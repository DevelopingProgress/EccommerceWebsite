<?php
function login($email, $password){
    if(isset($email) && isset($password)){
        if(isset($_POST['login_submit'])){
            include("DBconnect.php");
            $login_sql = 'SELECT * FROM user WHERE user_email="'.$_POST['email'].'" AND user_password="'.sha1($_POST['password']).'"';
            $login_stmt = $dbconnect->prepare($login_sql);
            $login_stmt->execute();
            $login_rows = $login_stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['admin'] = $login_rows[0]['user_name'];
            $_SESSION['logged'] = true;
            $_SESSION['usertype'] = $login_rows[0]['user_type'];
            $_SESSION['email'] = $login_rows[0]['user_email'];
            $_SESSION['userID'] = $login_rows[0]['user_id'];
            $_SESSION['wishlist_count'] = count(fetchProduct('wishlist'));
            $_SESSION['cart_count'] = count(fetchProduct('cart'));
            header("Location:index.php");

        }
        else{
            header("Location:login.php?action=loginfailed");
        }

        if(isset($_POST['login']) && !isset($_SESSION['admin'])){

            header("Location:index.php?page=admin&action=loginfailed");
        }
    }
}

function logout(){
    clearCart();
    unset($_SESSION);
    session_unset();
    header('Location:index.php');
}
?>