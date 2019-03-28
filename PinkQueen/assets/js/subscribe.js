function subscribeNewsletter() {

    var emailField = $('#email').val();

    $.ajax({
        type: 'POST',
        url: 'includes/subscribe.php',
        data: 'subscribeForm=1&email=' + emailField,
        success: function (msg) {
            if (msg == 'ok') {
                $('.statusMsg').text('Thank you for your subscription');
            }
            if (msg == 'No') {
                $('.statusMsg').text('You are already subscribed to our newsletter');
            }
            else {
                alert("Something went wrong :(");
            }
        }
    });
}