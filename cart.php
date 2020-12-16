<?php

include ('header.php');
if(isset($_GET['wishlist']) && $_GET['wishlist'] == 'added'){
        ?>
        <script type="text/javascript">
                function reloadPage()
                {
                        window.location.reload()
                }
        </script>
        <?php
}

?>




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
include('footer.php')?>

