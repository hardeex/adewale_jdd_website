<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Contents</title>

     <!-- Linking the css files-->
     <link rel="stylesheet" href="../css/index.css">
      <link rel="stylesheet" href="../css/mediaQuerry.css">
      <link rel="stylesheet" href="../css/categorized_blog.css">
      <link rel="stylesheet" href="../css/blog_post.css">
  
      <!-- linking the javascript-->
      <script src="../js/index.js" defer></script>
  
       <!-- font awesome cdn link  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
       <!--linking the favicon-->
       <link rel="shortcut icon" href="../images/code-optimisation_favicon.png" type="image/x-icon">
  
        <!-- integrating paystack payment links-->
        <script src="https://js.paystack.co/v1/inline.js" defer></script>

        <style> 
    body{
        margin-top: 8rem;  
        
    }
#h1{
            text-align: center;
            font-size: 3rem;
        }

    </style>
</head>
<body>
    
<header>
    <!--- impending the header file to this file-->
    <?php  include '../html/header.php' ?>
</header>

<main>
     <!--- blog section start-->
<section class="blogs" id="blogs">

<h1 id="h1" > <span>Wordpress</span> Content</h1>

<div class="box-container">

<div class="box">
            <div class="image">
                <img src="../images/wordpress.png" alt="WordPress image">
            </div>
            <div class="content">
                <a href="../blog/how-to-host-wordpress-website-locally.php" class="title">How to host your wordpress website locally?</a>
                <span>by Adewale / 21st December, 2022</span>
 <p>  Localhost is the use of your computer as a virtual server to run your websites or web applications. 
                    Unlike your web hosting, where your website goes live and can be accessed on all devices across the globe.
                    A developer can decide to host a website locally. Upon the full development of the website, 
                    we can then upload the website globally via web hosting. You can host your WordPress website locally using WampServer or xamp. 
                    Another option is to install WordPress directly on your drive.</p>
                <a href="../blog/how-to-host-wordpress-website-locally.php" class="btn">read more</a>
            </div>

</div>

            <div class="box">
            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkWmhlgM5BNQFbtFfqLxWGTdpK_UmLtsCDuVhAutu5gQ&s" alt="Wpbeginner image">
            </div>
            <div class="content">
                <a href="https://www.wpbeginner.com/" class="title">Where can i learn wordPress and get updates?</a>
                <span>by Adewale / 22nd December, 2022</span>
 <p> WPBeginner is a free WordPress resource site for Beginners. WPBeginner was founded in July 2009 by Syed Balkhi.
     The main goal of this site is to provide quality tips, tricks, hacks, and other WordPress resources that 
     allows WordPress beginners to improve their site(s).
    </p>
                <a href="https://www.wpbeginner.com/" class="btn">read more</a>
            </div>
        </div>



        

        

</section>

<!-- blogs section ends -->

</main>
</body>
<footer>
  <!--adding the footer file--->
  <?php  include '../html/footer.php'; ?>

</footer>
</html>



