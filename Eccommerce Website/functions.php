<?php

require ('database/Product.php');
$product_shuffle = fetchProduct('product');

require ('database/Cart.php');
require ('database/Wishlist.php');
require ('database/User.php');
