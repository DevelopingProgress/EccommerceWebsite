<!-- special price -->
<?php
$product_shuffle = fetchProduct('product');
$brand = array_map(function ($pro){ return $pro['item_brand'];},$product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Produkty</h4>
        <div id="filters" class="btn-group text-right">
            <button class="btn is-checked" data-filter="*">Wszyscy producenci</button>
            <?php
                array_map(function ($brand){
                    printf('<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
                },$unique);
            ?>
        </div><br><br>
        <div class="grid">
            <?php array_map(function ($item){?>
            <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand"; ?>">
                <div class="item py_2" style="width: 200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/biurka_game_1.png"; ?>" class="img-fluid" height="300px" width="300px"></a>
                        <div class="text-center">
                            <br>
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?php echo $item['item_price'] ?? 0; ?></span>
                            </div>
                            <button type="submit" class="btn btn-danger text-white font-size-12">do koszyka</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            },$product_shuffle)
            ?>
        </div>
    </div>
</section>
