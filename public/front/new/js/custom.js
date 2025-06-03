function addSubscriber() {
    // alert('test');

    var subscriber_email = $('#subscriber_email').val(); // get the value that the user will enter in the <input> field having that said HTML id Global Attribute
    // alert(subscriber_email);

    // Email validation in JavaScript    // https://www.scaler.com/topics/email-validation-in-javascript/
    var mailFormat =  /\S+@\S+\.\S+/; // Regular Expression (RegExp/Regex)
    if (subscriber_email.match(mailFormat)) {
        // alert('Valid Email!');

    } else {
        alert("Please enter a valid Email!");
        return false;
    }



    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, // X-CSRF-TOKEN: https://laravel.com/docs/9.x/csrf#csrf-x-csrf-token
        url    : '/add-subscriber-email', // check this route in web.php
        type   : 'post',
        data   : {subscriber_email: subscriber_email}, // Sending name/value pairs to server with the AJAX request (AJAX call)
        success: function(resp) { // if the AJAX request / AJAX call is successful
            // alert(resp);

            if (resp == 'Email already exists') { // Check addSubscriber() method in Front/NewsletterController.php
                alert('Your email already exists for Newsletter Subscription!');

            } else if (resp == 'Email saved in our database') { // Check addSubscriber() method in Front/NewsletterController.php
                alert('Thanks for subscribing!');
            }
        },
        error  : function() { // if the AJAX request is unsuccessful
            alert('Error');
        }
    });
}
