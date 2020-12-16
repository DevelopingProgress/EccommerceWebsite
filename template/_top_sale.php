<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['top_sale_submit'])) {
            if(isset($_SESSION['admin'])) addtoCart($_SESSION['userID'], $_POST['item_id']);
            else{
                addtoCart(0, $_POST['item_id']);
            }
            header("Location:".$_SERVER['PHP_SELF']);
        }
    }
?>
<section id="top-sale">
    <div class="container-fluid py-5">
        <h4 class="font-rubik font-size-20">Najlepiej oceniane</h4>
        <hr>
        <!-- start owl carousel top sale products -->
        <div class="owl-carousel owl-theme">
            <?php
            if (!empty($product_shuffle)) {
                foreach ($product_shuffle as $item) {?>
                <div class="item py-2">
                    <div class="product font-raleway">
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "./assets/biurka_game_1.png"?>" alt="top1" class="img-fluid" height="300px" width="300px"></a>
                        <div class="text-center">
                            <br>
                            <h6><?php echo $item['item_name']?></h6>
                            <div class="price py-2">
                                <span><?php echo $item['item_price']?> zł</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'];?>">
                                <?php
                                $arr = getCartId(fetchProduct('cart'));
                                    if(in_array($item['item_id'], $arr) ){
                                        echo ' <button type="submit" disabled class="btn btn-success text-white font-size-12">w koszyku</button>';
                                    }else{
                                        echo ' <button type="submit" name="top_sale_submit" class="btn btn-danger text-white font-size-12">do koszyka</button>';
                                    }

                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                 <?php }
            } ?>
        </div>
        <!-- finish owl -->
    </div>
</section>