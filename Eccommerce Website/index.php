<?php
ob_start();
    /*header*/
    include('header.php')
?>

    <?php
        /*banner-area area*/
        include('template/_banner_area.php');
    ?>
    <?php
        /*top-sale section*/
        include('template/_top_sale.php');
    ?>
    <?php
        /*special-price section*/
        include('template/_special_price.php');
    ?>
    <?php
        /*banner-adds section*/
        include('template/_banner_adds.php');
    ?>
    <?php
        /*new-products section*/
        include('template/_new_products.php');
    ?>

<?php
    /*footer*/
    include('footer.php')
?>
<?php     var_dump($_SESSION);?>
