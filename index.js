$(document).ready(function(){
    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    //top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    $(".btn-group").on("click","button",function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue})
    });

    //new products owl carousel
    $("#new-products .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    //product qty
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    //click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({ url: "template/ajax.php",type : 'post', data: { itemid : $(this).data("id")}, success: function (result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];


            if ($input.val() >= 1 && $input.val() <= 9){
                $input.val(function(i,oldval){
                    return ++oldval;
                })
                $price.text(parseInt(item_price * $input.val()).toFixed(2));

                let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
            }



        }});


    });
    //click on qty down button
    $qty_down.click(function() {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "template/ajax.php", type: 'post', data: {itemid: $(this).data("id")}, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];


                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    })
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }


            }
        });
    })



    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

    $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });


    let $cart_submit = $("#cart_submit");
    $cart_submit.click(function(e){
            $.ajax({
                type: "POST",
                url: "cart.php",
                data: {itemid: $(this).data("id")},
            }).done(function (){
                window.location.reload();
            });

    });



});

