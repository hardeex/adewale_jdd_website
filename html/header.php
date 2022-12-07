<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>

      <!-- Linking the css files-->
      <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mediaQuerry.css">

    <!-- linking the javascript-->
    <script src="../js/index.js" defer></script>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <!--linking the favicon-->
     <link rel="shortcut icon" href="../images/code-optimisation_favicon.png" type="image/x-icon">

     <!-- integrating paystack payment links-->
     <script src="https://js.paystack.co/v1/inline.js" defer></script>
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" 
    crossorigin="anonymous" defer></script> -->

</head>
<body>

 <!-- header section starts  -->

 <header class="header">

<a href="../html/index.php" class="logo">
    <img src="../images/logo.png" alt="the website logo">
</a>

<nav class="navbar">
    <a href="../html/index.php">home</a>
    <a href="../html/blog.php">blog</a>
    <a href="../html/design.php">designs</a>
    <a href="../html/support.php">support</a>
    <a href="../html/telecom.php">telecom</a>
</nav>

<div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

<div class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</div>

<!--adding the cart item-->
<div class="cart-items-container">
  <div class="cart-item">
      <span class="fas fa-times"></span>
      <img src="../images/wordpress.png" alt="wordpress logo (cart item)">
      <div class="content">
          <h3>Learn WordPress Web development</h3>
          <div class="price">work in progress/-</div>
      </div>
  </div>
  <div class="cart-item">
      <span class="fas fa-times"></span>
      <img src="../images/android.png" alt="android logo">
      <div class="content">
          <h3>Introduction to mobile applications development</h3>
          <div class="price">work in progress/-</div>
      </div>
  </div>
  <div class="cart-item">
      <span class="fas fa-times"></span>
      <img src="../images/why-should-my-biz-have-website.webp" alt="">
      <div class="content">
          <h3>A poultry business detailed business plan</h3>
          <div class="price">work in progress/-</div>
      </div>
  </div>
  <div class="cart-item">
      <span class="fas fa-times"></span>
      <img src="../images/web-programming.png" alt="">
      <div class="content">
          <h3>Introduction to web development</h3>
          <div class="price">work in progress/-</div>
      </div>
  </div>
  <a href="#" class="btn">checkout now</a>
</div>

</header>

<!-- header section ends -->
    
</body>
</html>