<!--  shopping cart  -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Koszyk</h5>

        <!-- shopping cart items-->
        <div class="row">
            <div class="col-sm-9">
                <!-- cart item -->
                <div class="row">
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="./assets/biurka_game_1.png" alt="cart1" class="img-fluid" style="height: 120px">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20">Biurko gamingowe PLEX GAME 1</h5>
                            <small>by PLEX</small>
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
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty-input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1" data-id="pro1">
                                        <button class="qty-down border bg-light" data-id="pro1" ><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <button type="submit" class="btn font-baloo text-danger px-3 border-end">Usuń</button>
                                <button type="submit" class="btn font-baloo text-danger px-3">Dodaj do listy życzeń</button>
                            </div>
                            <!-- product qty -->
                        </div>
                        <div class="col-sm-2 text-end">
                            <div class="font-size-20 text-danger font-baloo">
                                <span class="product_price">252</span>&nbsp;zł
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cart item -->
                <div class="row">
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="./assets/biurka_game_1.png" alt="cart1" class="img-fluid" style="height: 120px">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20">Biurko gamingowe PLEX GAME 1</h5>
                            <small>by PLEX</small>
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
                                        <button class="qty-up border bg-light" data-id="pro2"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro2" class="qty-input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="pro2"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <button type="submit" class="btn font-baloo text-danger px-3 border-end" >Usuń</button>
                                <button type="submit" class="btn font-baloo text-danger px-3">Dodaj do listy życzeń</button>
                            </div>
                            <!-- product qty -->
                        </div>
                        <div class="col-sm-2 text-end">
                            <div class="font-size-20 text-danger font-baloo">
                                <span class="product_price">252</span>&nbsp;zł
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subtotal -->
            <div class="col-sm-3">
                <div class="sub-total text-center mt-2 border">
                    <h6 class="font-size-12 font-raleway text-success py-3"><i class="fas fa-check"></i>&nbsp;Osiągnąłeś/aś limit BEZPŁATNEJ dostawy</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">(5 przedmiotów)</h5>
                        <h5 class="font-baloo font-size-20">Razem:&nbsp;<span class="text-danger"><span class="text-danger" id="deal-price">504.00</span>&nbsp;zł</span></h5>
                        <button type="submit" class="btn btn-danger mt-3">Zamów</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
