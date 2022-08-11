Stripe.setPublishableKey('pk_test_TYooMQauvdEDq54NiTphI7jx');
var $form = $('#checkout-form');

$form.submit(function(event) {
    $('charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);

Stripe.card.createToken({
    number: $('#card-number').val(),
    cvc: $('#card-cvc').val(),
    exp_month: $('#card-expiry-month').val(),
    exp_year: $('#card-expiry-yeat').val(),
    name: $('#card-name').val()

}, stripeResponseHandler);
return false;
});
