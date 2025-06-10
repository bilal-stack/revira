function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        autoDisplay: false
    }, 'google_translate_element');
}


function translateLanguage(lang) {
    var select = document.querySelector('.goog-te-combo');
    if (select) {
        select.value = lang;
        select.dispatchEvent(new Event('change'));
    } else {
        alert("Translate widget is not ready yet.");
    }
}


function addSubscriber() {
    // alert('test');

    var subscriber_email = $('#subscriber_email').val(); // get the value that the user will enter in the <input> field having that said HTML id Global Attribute
    // alert(subscriber_email);

    // Email validation in JavaScript    // https://www.scaler.com/topics/email-validation-in-javascript/
    var mailFormat = /\S+@\S+\.\S+/; // Regular Expression (RegExp/Regex)
    if (subscriber_email.match(mailFormat)) {
        // alert('Valid Email!');

    } else {
        alert("Please enter a valid Email!");
        return false;
    }


    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, // X-CSRF-TOKEN: https://laravel.com/docs/9.x/csrf#csrf-x-csrf-token
        url: '/add-subscriber-email', // check this route in web.php
        type: 'post',
        data: {subscriber_email: subscriber_email}, // Sending name/value pairs to server with the AJAX request (AJAX call)
        success: function (resp) { // if the AJAX request / AJAX call is successful
            // alert(resp);

            if (resp == 'Email already exists') { // Check addSubscriber() method in Front/NewsletterController.php
                alert('Your email already exists for Newsletter Subscription!');

            } else if (resp == 'Email saved in our database') { // Check addSubscriber() method in Front/NewsletterController.php
                alert('Thanks for subscribing!');
            }
        },
        error: function () { // if the AJAX request is unsuccessful
            alert('Error');
        }
    });
}

$(document).ready(function() {
    $('#getPrice').change(function() {
        // console.log(this);
        var size       = $(this).val();
        var product_id = $(this).attr('product-id');
        // console.log(size, product_id);


        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, // X-CSRF-TOKEN: https://laravel.com/docs/9.x/csrf#csrf-x-csrf-token
            url    : '/get-product-price', // check this route in web.php
            type   : 'post',
            data   : {size: size, product_id: product_id}, // Sending name/value pairs to server with the AJAX request (AJAX call)
            success: function(resp) {
                console.log(resp);
                if (resp.discount > 0) { // if there's a discount    // this is the same as:    if (resp['discount'] > 0) {
                    $('.getAttributePrice').text(
                        '$' + resp.product_price
                    ); // Note: resp.product_price    is the same as    resp['product_price']
                } else { // if there's no discount
                    $('.getAttributePrice').text(
                        '$' +  resp.final_price
                    ); // Note: resp.final_price    is the same as    resp['final_price']
                }
            },
            error  : function() {
                alert('Error');
            }
        });
    });
});
