<!--  shopping cart  -->
<?php
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['delete_wishlist_submit'])){
        $deletedrecord = deleteWishlist($_POST['item_id']);
    }
    if(isset($_POST['cart_submit'])){
        rotate($_POST['item_id'], 'cart', 'wishlist');
    }
}
if(isset($_SESSION['admin'])){
?>
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Lista życzeń</h5>

        <!-- shopping cart items-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                $cart = fetchProduct('wishlist');
                foreach ($cart as $item):
                    $product = getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                if(!isset($_SESSION['admin'])) $subTotal[] = null;
                else{
                        ?>
                        <div class="row">
                            <!-- cart item -->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="<?php echo $item['item_image'] ?? "./assets/biurka_game_1.png"; ?>" alt="cart1" class="img-fluid" style="height: 120px">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"?></h5>
                                    <small>by <?php echo $item['item_brand'] ?? "BRAND:"?></small>
                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <a href="" class="px-2 font-raleway font-size-14">20000 ocen</a>
                                    </div>
                                    <!-- product rating -->


                                    <div class="qty d-flex pt-2">

                                        <form method="post">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                            <button type="submit" name="delete_wishlist_submit" class="btn font-baloo text-danger ps-0 pe-3 border-end">Usuń</button>
                                        </form>

                                        <form method="post">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                            <button type="submit" name="cart_submit" class="btn font-baloo text-danger px-3">Dodaj do koszyka</button>
                                        </form>
                                    </div>

                                </div>
                                <div class="col-sm-2 text-end">
                                    <div class="font-size-20 text-danger font-baloo">
                                        <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0' ?>"><?php echo $item['item_price'] ?? 0;?></span>&nbsp;zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                }},$product);
                endforeach;
                if(empty($cart)) echo '<h5 class="font-baloo font-size-16 text-danger">Lista życzeń jest pusta</h5>'
                ?>
            </div>
        </div>
    </div>
</section>
<?php
}