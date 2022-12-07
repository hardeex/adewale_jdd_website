const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_f0a7e900e3367840ca8ac7d6ddff3720f122ee28', // Replace with your public key
    email: document.getElementById("email-address").value,
    // amount: document.getElementById("amount").value * 100,
    amount: 3500 * 100,
    currency: 'NGN',
    // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Transaction was not completed, Window closed.');
    },
    callback: function(response){
//         curl https://api.paystack.co/transaction/verify/:reference
// -H "Authorization: Bearer YOUR_SECRET_KEY"
// -X GET

$.ajax({
    url: 'https://www.yoururl.com/verify_transaction?reference='+ response.reference,
    method: 'get',
    success: function (response) {
      // the transaction status is in response.data.status
    }
});
    
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}

