<?php
    $item_id = $_GET['item_id'] ?? 1;
    $products_db = fetchProduct('product');
    foreach ($products_db as $item):
        if ($item['item_id'] == $item_id):
            $in_cart =  getCartId(fetchProduct('cart'));
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['product_submit'])){
                    if(isset($_SESSION['admin'])) addtoCart($_SESSION['userID'], $_POST['item_id']);
                    else{
                        addtoCart(0, $_POST['item_id']);
                    }
                    header("Location:product.php?item_id=".$item_id);
                }
            }
?>
<!--  start product  -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? '.asstets/biurka_game_1.png' ?>" alt="" class="img-fluid">
                <div class="row row-cols-2 pt-4 font-size-16 font-roboto">

                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Kup</button>

                    </div>

                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 'i';?>">
                        <?php
                        if(in_array($item['item_id'], $in_cart ?? []) ){
                            echo ' <button type="submit" disabled class="btn btn-success text-white form-control">w koszyku</button>';
                        }else{
                            echo '<button type="submit" name="product_submit" class="btn bg-dark text-white form-control">Do koszyka</button>';
                        }

                        ?>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-roboto font-size-20"><?php echo $item['item_name'] ?? 'Unknown'?></h5>
                <small>by <?php echo $item['item_brand'] ?? 'Brand:' ?></small>
                <div class="d-flex">
                    <a href="#" class="px-2 font-raleway font-size-14" style="text-decoration: none">20000 ocen | 1000+ udzielonych odpowiedzi</a>
                </div>
                <hr class="m-0">

                <!-- product price -->
                <table class="my-3">
                    <tr class="font-roboto font-size-14">
                        <td>Cena:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['item_price'].' zł'; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;+VAT</small></td>
                    </tr>
                </table>
                <!-- product price -->

                <!-- policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mx-3">
                            <div class="font-size-20 my-2 color-primary">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-raleway font-size-12 text-dark text-decoration-none">10 dni<br>Na Wymianę</a>
                        </div>
                        <div class="return text-center mx-3">
                            <div class="font-size-20 my-2 color-primary">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-raleway font-size-12 text-dark text-decoration-none">Dostawa<br>DPD, UPS</a>
                        </div>
                        <div class="return text-center mx-3">
                            <div class="font-size-20 my-2 color-primary">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-raleway font-size-12 text-dark text-decoration-none">2 lata<br>Gwarancji</a>
                        </div>
                    </div>
                </div>
                <!-- policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-raleway d-flex flex-column text-dark">
                    <small>Dostawa: 31 gru - 1 lut</small>
                    <small>Sprzedane przez <a href="#" class="text-decoration-none">PLEX</a>(4,5 z 5 | 18000 ocen)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Dostarcz do Klienta - 424201</small>
                </div>
                <!-- order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-roboto">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- color -->
                    </div>
                    <div class="col-6">
                        <!--  quantity  -->
                        <div class="qty d-flex">
                            <h6 class="font-roboto">Ilość:</h6>
                            <div class="px-4 d-flex font-raleway">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qty-input border px-2 w-50 bg-light text-center" disabled value="1" placeholder="1" data-id="pro1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!--  quantity  -->
                    </div>
                </div>

                <!-- size -->

                <div class="size my-3">
                    <h6 class="font-roboto">Rozmiar blatu:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">160cm x 100cm</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">200cm x 100cm</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">250cm x 100cm</button>
                        </div>
                    </div>
                </div>

                <!-- size -->
            </div>
            <div class="col-12">
                <h6 class="font-rubik">Opis Produktu</h6>
                <hr>
                <p class="font-raleway font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores, cumque dolore eos facilis id inventore nihil perspiciatis quaerat temporibus. Ab aliquid aut beatae cumque, distinctio ducimus eaque earum error eum facere fugiat illo impedit inventore iure magnam maiores, minus molestiae nostrum, numquam perferendis perspiciatis quae quo sequi sunt vero voluptas voluptatum. A asperiores, at aut consequuntur culpa cum delectus dignissimos ducimus ea excepturi facere pariatur perferendis quaerat quas quod quos reiciendis rerum suscipit veniam vero. Adipisci beatae, deserunt earum facere quae tenetur veritatis. A ad maiores numquam. Debitis dolore dolorem earum, error id illum laboriosam officiis repudiandae rerum sint!</p>
                <p class="font-raleway font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores, cumque dolore eos facilis id inventore nihil perspiciatis quaerat temporibus. Ab aliquid aut beatae cumque, distinctio ducimus eaque earum error eum facere fugiat illo impedit inventore iure magnam maiores, minus molestiae nostrum, numquam perferendis perspiciatis quae quo sequi sunt vero voluptas voluptatum. A asperiores, at aut consequuntur culpa cum delectus dignissimos ducimus ea excepturi facere pariatur perferendis quaerat quas quod quos reiciendis rerum suscipit veniam vero. Adipisci beatae, deserunt earum facere quae tenetur veritatis. A ad maiores numquam. Debitis dolore dolorem earum, error id illum laboriosam officiis repudiandae rerum sint!</p>
            </div>
        </div>
    </div>
</section>

<!--  finish product  -->
<?php
endif;
endforeach;

?>

