const url = location.protocol + "//" + location.host;

$("#signin-btn").click(function(event) {
    event.preventDefault();
    var data = getFormData('#signin-form');

    $.ajax({
        url: url + "/main/signin",
        type: 'post',
        data: data,
        success: function(result) {
            console.log(result);
        }
    });
})

$('#signup-btn').click(function(event) {
    event.preventDefault();
    var data = getFormData("#signup-form");

    $.ajax({
        url: url + "/main/signup",
        type: 'post',
        data: data,
        success: function(result) {
            console.log(result);
        }
    });
})

function getFormData(form_id) {
    var data = {};

    $(form_id).find('input').each(function() {
        data[this.name] = $(this).val();
    });

    return data;
}