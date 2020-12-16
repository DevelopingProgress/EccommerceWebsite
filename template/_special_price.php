<?php
if (!empty($product_shuffle)) {
    $brand = array_map(function ($pro){ return $pro['item_brand'];},$product_shuffle);
}
$unique = array_unique($brand);
sort($unique);
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['special_price_submit'])){
        if(isset($_SESSION['admin'])) addtoCart($_SESSION['userID'], $_POST['item_id']);
        else{
            addtoCart(0, $_POST['item_id']);
        }
        header("Location:".$_SERVER['PHP_SELF']);
    }
}
$in_cart =  getCartId(fetchProduct('cart'));
?>
<section id="special-price">
    <div class="container-fluid">
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
            <?php array_map(function ($item) use($in_cart){?>
            <div class="grid-item <?php echo $item['item_brand']; ?>">
                <div class="item py_2" style="width: 200px;">
                    <div class="product font-raleway">
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image']?>" class="img-fluid" height="300px" width="300px"></a>
                        <div class="text-center">
                            <br>
                            <h6><?php echo $item['item_name']; ?></h6>
                            <div class="price py-2">
                                <span><?php echo $item['item_price']; ?> zł</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'];?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <?php
                                if(in_array($item['item_id'], $in_cart) ){
                                    echo ' <button type="submit" disabled class="btn btn-success text-white font-size-12">w koszyku</button>';
                                }else{
                                    echo ' <button onclick="function refreshPage() {
                                      window.location.reload();
                                    }" type="submit" name="special_price_submit" class="btn btn-danger text-white font-size-12">do koszyka</button>';
                                }

                                ?>
                            </form>
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
