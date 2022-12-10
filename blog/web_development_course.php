<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web development premium course</title>

     <!-- Linking the css files-->
     <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mediaQuerry.css">
    <link rel="stylesheet" href="../css/blog_post.css">

    <!-- linking the javascript-->
    <script src="../js/index.js" defer></script>

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
<div class="blog-text">
 <h1>The 100 days web Development premiun course</h1>
  <p>
        The 100 days web development premium course contains 100 HD videos training that will guide you to become a frontend
        and backend web developer . Thus, making you a full stack web developer. <br> <br>
        This is a huge course, packed with content and it's the web development bootcamp I would have loved to have when I learned
        web development. Here is a summary of the key concept you'll explore as part of this course.
        <ul>
            <li>How the web works</li>
            <li>Core technologies: HTML, CSS & JavaScript</li>
            <li>understanding how HTML documents are structured and how HTML elements are used correctly</li>
            <li>Learn core CSS concepts like the box model, flexbox, positioning, units and much more</li>
            <li>Explore advanced CSS concepts like building responsive websites, layouts, custom CSS properties, CSS grid & more</li>
            <li>Learn browser-side JavaScript from the ground up</li>
            <li>Understand what the "DOM" is and how you can manipulate it via JavaScript</li>
            <li>Explore browser / user events and how to handle them with JavaScript</li>
            <li>Build tons of projects (e.g. a Tic-Tac-Toe browser game) to practice and fully understand all these technologies</li>
            <li>Dive into backend development with NodeJS & ExpressJS</li>
            <li>Learn what NodeJS is and how it works</li>
            <li>Build basic backend-driven websites with advanced concepts like dynamic routing or dynamic templates</li>
            <li>Learn how to work with databases - SQL & NoSQL (and what that is)</li>
            <li>Practice how to use SQL / NoSQL with NodeJS & Express</li>
            <li>Dive into advanced concepts like authentication, website security, coding patterns, file uploads, user input validation and so much more!</li>
            <li>Again: Build plenty of projects (e.g. a complete online shop, from the ground up!) to practice all advanced concepts as well</li>
            <li>Learn how to use third-party packages and services (e.g. Stripe for payments) in your websites</li>
            <li>Move on to more specialized, advanced concepts like building REST APIs</li>
            <li>Explore frontend JavaScript frameworks like Vue.js to build even more powerful web user interface.</li>
        </ul>
    </p>

     <div class="download-link">
        <!-- <h2>Here is the Drive link </h2> -->
        <!-- <a href="https://mega.nz/folder/ovRjCYCI#Nv9THAZz9-QeHThb7Q6kOw" class="downloadCourse" >Download the full course  </a> -->
         <!-- <a href="../html/paystackForm.php" class="check" >Download the full course  </a> -->
         <a href="../html/whatsAppForm.php" target="_blank" rel="noopener noreferrer">Download course</a>
        <!-- <button  class="downloadCourse" >download the full course </button> -->
        <p>Kindly keep it properly and make sure to download and backup as soon as possible</p>
    </div>

    <div class="other-blog" >

<a href="../blog/should-i-use-wordpress-or-html-for-my-website.php" rel="noopener noreferrer">
     <button>Previous</button>
 </a> 
<a href="../blog/why-should-my-business-have-a-website.php" rel="noopener noreferrer">
     <button id= "next">Next</button>
 </a>
    </div>

   
  
</main>

<footer>
  <!--adding the footer file--->
  <?php  include '../html/footer.php'; ?>

</footer>
    
</body>
</html>