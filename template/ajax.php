<?php
require ('../database/Product.php');


if(isset($_POST["itemid"])){
    $product = getProduct($_POST["itemid"]);
    echo json_encode($product);
}
