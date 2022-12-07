<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paymennt Form</title>

      <!-- Linking the css files-->
      <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mediaQuerry.css">
    <link rel="stylesheet" href="../css/paymentForm.css">

    <!-- linking the javascript-->
    <script src="../js/paystackPayment.js" defer></script>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <!--linking the favicon-->
     <link rel="shortcut icon" href="../images/code-optimisation_favicon.png" type="image/x-icon">

      <!-- integrating paystack payment links-->
      <script src="https://js.paystack.co/v1/inline.js" defer></script>


</head>
<body>

<header>
    <!--- impending the header file to this file-->
    <?php  include '../html/header.php' ?>
</header>

<main>
<div class="paystackForm">
      <h1>Fill the details below to make your payment</h1>
   
      <form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" name="email" required />
  </div>
  <div class="form-group">
    <label for="first-name">Name</label>
    <input type="text" id="first-name"  name="first-name" required />
  </div>
  <div class="form-group">
    <label for="last-name">Contact Number</label>
    <input type="tel" id="last-name" name="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>

    </div>
</main>

<footer>
  <!--adding the footer file--->
  <?php  include '../html/footer.php'; ?>

</footer>
    
</body>
</html>