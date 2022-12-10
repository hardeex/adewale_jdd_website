<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suport</title>

     <!-- Linking the css files-->
     <link rel="stylesheet" href="../css/support.css">
     <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mediaQuerry.css">
   

    
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
    <section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">
        <div class="map">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no"
             marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=lagos&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:100%;}.gmap_canvas {overflow:hidden;
                background:none!important;width:100%;height:100%;}.gmap_iframe {height:100%!important;}</style></div>
         

        <form action="https://formsubmit.co/webmasterjdd@gmail.com" method="POST" >
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Contact Number">
            </div>
            <div class="message-box">
                <textarea name="message" id="message" cols="50" rows="15" placeholder="Your Message" required></textarea>
            </div>
            <div>
                <!-- navigate the user to another page upon the form submission -->
            <input type="hidden" name="_next" value="https://jdd.com/thanks.php">
            <!--- adding a subject to each message received-->
            <input type="hidden" name="_subject" value="New Message from JDD Website !">
            <!---- send a copy of each email to my personal email-->
            <input type="hidden" name="_cc" value="jamiuadewaleyusuf@email.com">
            <!--- honeypot to avoid spam messages-->
            <input type="text" name="_honey" style="display:none">
            <!--- adding an auto response message-->
            <input type="hidden" name="_autoresponse" value="Your message has been received. We'll get back to you shortly....">
            </div>
            <input type="submit" value="contact" id="btn-submit">
            <!-- <input type="submit" value="contact now " class="btn"> -->
        </form>

    </div>

</section>

<!-- contact section ends -->

<footer>
         <!--adding the footer file--->
  <?php  include '../html/footer.php'; ?>

</footer>
</body>
</html>