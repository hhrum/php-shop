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

$('.product__buy-btn').click(function(event) {
    event.preventDefault();
    btn = $(this);
    get_url = $(this).attr('href');

    $.get(get_url, function(result){
        console.log(result);
        result = JSON.parse(result);
        if (result.status) {
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
            btn.parent().parent().parent().remove();
            if ($(".products").children().length == 0) location = location;
            delete basket[product_key];
            updateBasketPrice(basket);
        } else {
            console.error(result.message);
        }
    });
})

if (basket) {
    updateBasketPrice(basket);
}

function updateBasketPrice(basket) {
    var price = 0;

    for (const key in basket) {
        price += parseInt(basket[key].price);
    }

    $("#basket-buy").html(toNormalPrice(price) + "р");
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