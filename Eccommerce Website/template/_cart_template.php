<!--  shopping cart  -->
<?php
ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['delete_cart_submit'])){
            deleteCart($_POST['item_id']);
        }

        if(isset($_POST['wishlist_submit'])){
            rotate($_POST['item_id']);
        }
    }
?>
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Koszyk</h5>

        <!-- shopping cart items-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    $cart = fetchProduct('cart');
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

                            <!-- product qty -->
                            <div class="qty d-flex pt-2">
                                <div class="d-flex font-raleway w-25">
                                    <div class="qty d-flex">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0' ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty-input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1" data-id="<?php echo $item['item_id'] ?? '0' ?>">
                                        <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0' ?>" ><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                    <button type="submit" name="delete_cart_submit" class="btn font-baloo text-danger px-3 border-end">Usuń</button>
                                </form>

                                <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                    <button type="submit" name="wishlist_submit" class="btn font-baloo text-danger px-3">Dodaj do listy życzeń</button>
                                </form>

                            </div>
                            <!-- product qty -->
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
                    if(empty($subTotal)) echo '<h5 class="font-baloo font-size-16 text-danger">Koszyk jest pusty</h5>'
                ?>
            </div>
            <!-- subtotal -->
            <div class="col-sm-3">
                <div class="sub-total text-center mt-2 border">
                    <h6 class="font-size-12 font-raleway text-success py-3"><i class="fas fa-check"></i>&nbsp;Osiągnąłeś/aś limit BEZPŁATNEJ dostawy</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">(<?php if (isset($_SESSION['admin'])) {if(isset($subTotal)) echo count($subTotal); else echo 0;} else echo 0;?> przedmiotów)</h5>
                        <h5 class="font-baloo font-size-20">Razem:&nbsp;<span class="text-danger"><span class="text-danger" id="deal-price"><?php if(isset($subTotal)) echo  getSum($subTotal); else echo 0; ?></span>&nbsp;zł</span></h5>
                        <button type="submit" class="btn btn-danger mt-3">Zamów</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
