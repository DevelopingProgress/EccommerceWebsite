<!--  new products  -->
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['new_products_submit'])){
        addtoCart($_POST['user_id'], $_POST['item_id']);
        header("Location:".$_SERVER['PHP_SELF']);
    }

}

$in_cart =  getCartId(fetchProduct('cart'));
?>
<section id="new-products">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Nowości</h4>
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item) {?>
                <div class="item py-2 bg-light">
                    <div class="product font-raleway">
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "./assets/biurka_game_1.png"?>" alt="top1" class="img-fluid" height="300px" width="300px"></a>
                        <div class="text-center">
                            <br>
                            <h6><?php echo $item['item_name']?></h6>
                            <div class="price py-2">
                                <span><?php echo $item['item_price']?> zł</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 'i';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <?php
                                if(in_array($item['item_id'], $in_cart ?? []) ){
                                    echo ' <button type="submit" disabled class="btn btn-success text-white font-size-12">w koszyku</button>';
                                }else{
                                    echo ' <button type="submit" name="new_products_submit" class="btn btn-danger text-white font-size-12">do koszyka</button>';
                                }

                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- finish owl -->
</section>