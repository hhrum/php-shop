const url = location.protocol + "//" + location.host;

$("#signin-btn").click(function(event) {
    event.preventDefault();
    var data = getFormData('#signin-form');

    sendPost(url + "/profile/signin", data, function(result) {
        if (result.status) {
            location = location
        } else {
            console.log(result);
            $('#signin-error').html(result.message);
        }
    });
})

$('#signup-btn').click(function(event) {
    event.preventDefault();
    var data = getFormData("#signup-form");

    sendPost(url + "/profile/signup", data, function(result){
        if (result.status) {
            location = location
        } else {
            console.log(result);
            $('#signup-error').html(result.message);
        }
    })
})

$('#buy-btn').click(function(event) {
    event.preventDefault();
    var data = [];
    console.log(url + "/order/place");

    sendPost(url + "/order/place", data, function(result){
        if (result.status) {
            location = url;
        } else {
            console.log(result);
        }
    })
})

$('.product__buy-btn').click(function(event) {
    event.preventDefault();
    btn = $(this);
    get_url = $(this).attr('href');

    $.get(get_url, function(result){
        console.log(result);
        result = JSON.parse(result);
        if (result.status) {
            updateBasketCount(1);
            btn.remove();
        }
    });
})

$('.product__close-btn').click(function(event) {
    event.preventDefault();
    btn = $(this);
    product_key = btn.data("product-key");
    get_url = $(this).attr('href') + product_key;

    $.get(get_url, function(result){
        console.log(result);
        result = JSON.parse(result);
        if (result.status) {
            btn.parent().parent().parent().parent().parent().remove();
            if ($(".products").children().length == 0) location = location;
            updateBasketCount(-1);

            delete basket[product_key];
            updateBasketPrice(basket);
        } else {
            console.error(result.message);
        }
    });
})

$(".product__price").each((index, element) => {
    element = $(element);
    price = element.html();
    element.html(toNormalPrice(price) + "р");
});

if (typeof basket != 'undefined') {
    updateBasketPrice(basket);
}

function updateBasketPrice(basket) {
    var price = 0;

    for (const key in basket) {
        price += parseInt(basket[key].price);
    }

    $("#basket-buy").html("Купить за " + toNormalPrice(price) + "р");
}

function updateBasketCount(diff) {
    basket_counter = $(".basket-counter");
    count = parseInt(basket_counter.html()) + diff;

    if (count == 0) basket_counter.addClass("d-none");
    else basket_counter.removeClass("d-none");

    basket_counter.html(count);
}

function sendPost(url, data, callback) {
    $.ajax({
        url: url,
        dataType: 'json',
        type: 'post',
        data: data,
        success: callback
    });
}

function getFormData(form_id) {
    var data = {};

    $(form_id).find('input').each(function() {
        data[this.name] = $(this).val();
    });

    return data;
}

function toNormalPrice(price) {
    return `${(+price).toLocaleString()}`;
}