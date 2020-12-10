<!--  new products  -->
<?php
    $product_shuffle = fetchProduct('product');
    shuffle($product_shuffle);
?>
<section id="new-products">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Nowości</h4>
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item) {?>
                <div class="item py-2 bg-light">
                    <div class="product font-raleway">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/biurka_game_1.png"?>" alt="top1" class="img-fluid" height="300px" width="300px"></a>
                        <div class="text-center">
                            <br>
                            <h6><?php echo $item['item_name']?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?php echo $item['item_price']?></span>
                            </div>
                            <button type="submit" class="btn btn-danger text-white font-size-12">do koszyka</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- finish owl -->
</section>