

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<div class="jumbotron text-center container">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=ATySX60_SEP8-9euZmR-tU7Qhd8IjcE75fQ3UczQ58QgiJR06eUYbKUyRr0oFYQuKhmJg-3zGzNVqwKz"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <script
    src="https://www.paypal.com/sdk/js?client-id=ATySX60_SEP8-9euZmR-tU7Qhd8IjcE75fQ3UczQ58QgiJR06eUYbKUyRr0oFYQuKhmJg-3zGzNVqwKz"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '50.00'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
  </script>
<br>
<hr>
<br>
<img src="<?php echo e(asset('qrcodebrupay.jpg')); ?>" width="200" alt="BruPAY QRCODE">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f8837c02901b9207693b03b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rxsltn\resources\views/payment.blade.php ENDPATH**/ ?>