<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

     <!-- Linking the css files-->
     <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mediaQuerry.css">
    <link rel="stylesheet" href="../css/categorized_blog.css">

    
    <!-- linking the javascript-->
    <script src="../js/index.js" defer></script>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <!--linking the favicon-->
     <link rel="shortcut icon" href="../images/code-optimisation_favicon.png" type="image/x-icon">

</head>
<body>

<header>
    <!--- impending the header file to this file-->
    <?php  include '../html/header.php' ?>
</header>

<main>

<h1>blog categories</h1>

<section class="scholarship-development-category" >
<h2>scholarship category</h2>
<hr>
</section>

<section class="programming-development-category" >
<h2>programming category</h2>
<hr>
</section>

<section class="web-development-category" >
<h2>web development category</h2>
<ul>
        <li>
            <a href="">Where do i learn web development?</a>
        </li>

        <li>
            <a href="">Should I learn Html/css/javascript or wordpress?</a>
        </li>
</ul>
<hr>
</section>

<section class="business-development-category" >
<h2>business category</h2>

<ul>
        <li>
            <a href="">should i use wordpress for my business website?</a>
        </li>

        
</ul>
<hr>
</section>

<section class="app-development-category" >
<h2>android app development category</h2>
<hr>
</section>


<section class="architecture-development-category" >
<h2>architecture category</h2>
<hr>
</section>

<section class="realEstate-development-category" >
<h2>real estate category</h2>
</section>


    </main>

    <footer>
         <!--adding the footer file--->
  <?php  include '../html/footer.php'; ?>

</footer>
    
</body>
</html>