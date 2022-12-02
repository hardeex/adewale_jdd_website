<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
 
    <!-- Linking the css files-->
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

    <!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="../images/logo.png" alt="the website logo">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="../html/blog.php">blog</a>
        <a href="#designs">designs</a>
        <a href="#support">support</a>
        <a href="#telecom">telecom</a>
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
   
    <main>

        <section class="hero-section" id="hero-section">
            <div class="hero-content">
              <ul>
                <h1>Learn, Build, Buy and Connect for free...</h1>
                <li>Native Android App Development</li>
                <li>Web Development</li>
                <li>Software Development</li>
                <li>
                  Programming Languages such as C, C++, Phython, SQL and much
                  more...
                </li>
                <li>
                  Buy Internet data bundles, airtime and cable Tv subscriptions
                </li>
                <li>Fund your betting wallet</li>
                <li>Download educational materials</li>
    
                <form action="" method="post">
                  <input type="email" name="user-email" id="user-email" required placeholder="Email Address"/>
                  <a href="">
                    <button type="submit">Subscribe</button>
                  </a>
                </form>
              </ul>
            </div>
            </section>


            <section class="program" >
                <h2>Take advantage to improve your coding skills and experience</h2>
                <ul>
                   <!--start of the first program list-->
                   <li>
                  <div class="program-item">
              <img src="../images/w3school.jpeg" alt="W3School logo">
          
              <div class="program-content">
                   <h2>W3School Complete Website Download</h2>
              <p>
                The largest web developer site on the internet. 3 billion pages displayed each year. 
                60 million visitors each month. Download for free to begin your programming journey
                  
              </p>
              <div class="download-btn">
                 <a href="https://drive.google.com/file/d/1eBJqshZ8QNLsnYDDLRbtdHwX0cBnyw1i/view?usp=sharing" target="_blank">
                  <button>Zip File</button>
                  <a href="https://github.com/hardeex/w3school-webite" target="_blank" rel="noopener noreferrer">
                    <button>Github 1</button>
                  </a>
                 
                  <a href="https://github.com/Ja7ad/W3Schools" target="_blank" rel="noopener noreferrer">
                    <button>Github 2</button>
                  </a>
              </a>
              </div>
             
              </div>
          </div>
          </li>
           <!--End of the first program list-->
          
            <!--start of the second program list-->
            <li>
              <div class="program-item">
          <img src="../images/web-programming.png" alt="The world wide web (www) logo">
          
          <div class="program-content">
               <h2>100 Days Web Development Course</h2>
          <p>
            The premium course contains 100 HD videos training that will guide you to become
            a frontend and a backend web developer.
              
          </p>
          <div class="download-btn">
             <a href="../blog/web_development_course.php" target="_blank">
              <button>Explore</button>
          </a>
          </div>
          
          </div>
          </div>
          </li>
          <!--End of the second program list-->
          
          
           <!--start of the third program list-->
           <li>
            <div class="program-item">
          <img src="../images/wordpress.png" alt="The world wide web (www) logo">
          
          <div class="program-content">
             <h2>WordPress</h2>
          <p>
            WordPress is an open source, free website creation tool to modify website to suit individual needs.
            And, share with others.
            
          </p>
          <div class="download-btn">
           <a href="" target="_blank">
            <button>Explore</button>
          </a>
          </div>
          
          </div>
          </div>
          </li>
          <!--End of the third program list-->
          
          <!--start of the fourth program list-->
          <li>
            <div class="program-item">
          <img src="../images/android.png" alt="The world wide web (www) logo">
          
          <div class="program-content">
             <h2>Android APP Development</h2>
          <p>
            Download books and material resources on native android development on both Kotlin and Java.
            
          </p>
          <div class="download-btn">
           <a href="" target="_blank">
            <button>Explore</button>
          </a>
          </div>
          
          </div>
          </div>
          </li>
          <!--End of the fourth program list-->
           
                </ul>
               
              </section>

              <section class="blog-container">
      
                <h2 id="recent-post-txt">Recent Post</h2>
                <ul>
                  <!--Start of the list-->
                  <li>
                    <div class="blog-post-container">
                  <div class="blog-image">
                  <img src="../images/why-should-my-biz-have-website.webp" alt="why-should-my-biz-have-website blog image ">
                  <div class="blog-caption">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                       <h2 class="blog-title-txt">Why Should my business have a website?</h2>
                    <h3>Category: Business</h3>
                    <p>
                      Before we go in-depth into this intriguing question, we should have an understanding of the discrepancy 
                      between websites, web apps and mobile applications for businesses to determine which is the best option for the business.
                      A website is built using HTML, CSS and the JavaScript programming language. Content Management systems such as WordPress 
                      have made the development of websites to be as extremely easy as possible at reduced cost and time. It is important to 
                      note that the development of web applications goes beyond the scripting languages of HTML and CSS and programming languages 
                      such as Javascript.
                    </p>
                    <div class="blog-explore-btn">
                      <a href="">
                        <button>More...</button>
                      </a>
                    </div>
                    </a>    
                  </div>
                </div>
                </div>
                  </li>
                   <!--End of the list-->
          
                   <!--start of blog-->
                   <li>
                    <div class="blog-post-container">
                  <div class="blog-image">
                  <img src="../images/coding.png" alt="should I use WordPress or HTML for my business website? image ">
                  <div class="blog-caption">
                    <h2 class="blog-title-txt">should I use WordPress or HTML for my website?</h2>
                    <h3>Category: Programming</h3>
                    <p>
                      In the modern business environment, making a mobile-friendly online presence is so important that the 
                      impact it has on businesses cannot be comprehended. This article of about helping business owners and 
                      developers in deciding the best platform to build the website you are thinking of. <br>
                      Unlike the development of websites using Html that can not be executed without basic scripting and programming skills.
                      Simple websites can be developed by any individual even without any programming experience. Having scripting 
                      and web development programming skills is an added advantage. Any business seeking to develop a simple website or 
                      woo-commerce website for his business at a reduced cost can take advantage of Content Management systems like WordPress. 
                      Like I said before, all you need is commitment and consistency.
                    </p>
                    <div class="blog-explore-btn">
                      <a href="">
                        <button>More...</button>
                      </a>
          
                    </div>
                  </div>
                </div>
                </div>
                  </li>
                   <!--End of the list-->
          
                    <!--Start of the list-->
                  <li>
                    <div class="blog-post-container">
                  <div class="blog-image">
                  <img src="../images/web-programming.png" alt="why-should-my-biz-have-website blog image ">
                  <div class="blog-caption">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                       <h2 class="blog-title-txt">full-stack web developer option for me?</h2>
                    <h3>Category: Web Development</h3>
                    <p>
                      The 100 days web development premium course contains 100 HD videos training that will 
                      guide you to become a frontend and backend web developer . Thus, making you a full stack web developer.
                      This is a huge course, packed with content and it's the web development bootcamp I would have loved to 
                      have when I learned web development. Here is a summary of the key concept you'll explore as part of this course.
                    </p>
                    <div class="blog-explore-btn">
                      <a href="../blog/web_development_course.php">
                        <button>More...</button>
                      </a>
                    </div>
                    </a>    
                  </div>
                </div>
                </div>
                  </li>
                   <!--End of the list-->
          
                 
                </ul>
              </section>

    

<section class="education-container">
  <h2 id="edu-txt">Education & scholarships</h2>

  <ul>
    <!-- start of the list-->
    <li>
 <div class="edu-content">
    <a href="">
      <p>
        Scholarships in the Tech industry 
      </p>
    </a>
  </div>
    </li>
    <!--End of the list -->

 <!-- start of the list-->
 <li>
  <div class="edu-content">
   
     <a href="">
       <p>
        Scholarships for institutions
       </p>
     </a>
   </div>
     </li>
     <!--End of the list -->

      <!-- start of the list-->
    <li>
      <div class="edu-content">
         <a href="">
           <p>
             Research work & Report
           </p>
         </a>
       </div>
         </li>
         <!--End of the list -->
    
         <!-- start of the list-->
    <li>
      <div class="edu-content">
         <a href="">
           <p>
             Basic & High school materials and resources
           </p>
         </a>
       </div>
         </li>
         <!--End of the list -->
    
         <!-- start of the list-->
    <li>
      <div class="edu-content">
         <a href="">
           <p>
             scholarship whatsapp group
           </p>
         </a>
       </div>
         </li>
         <!--End of the list -->
  </ul>
    </section>

    <section class="telecom-container">

    </section>

    <section class="architecture-container">
      <h2>Architectural Designs</h2>
      <ul>

         <!-- start of architecture video container-->
         <li>
          <div class="architecture-video">
          <video controls>
            <source src="../Architecture/videos/VID-20221027-WA0002.mp4" type="video/mp4">
          </video>
          </div>
        </li>
        <!-- End of architecture video container-->

        <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/198ddefcb60ba7bb0984b030012e9d72.jpg" target="_blank">
              <img src="../Architecture/images/198ddefcb60ba7bb0984b030012e9d72.jpg" alt="A duple architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

              <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/3 bedroom duplex.effectsResult (2).jpg" target="_blank">
              <img src="../Architecture/images/3 bedroom duplex.effectsResult (2).jpg" alt="A three bedroom duplex architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!-- start of architecture video container-->
               <li>
                <div class="architecture-video">
                <video controls>
                  <source src="../Architecture/videos/VID-20221027-WA0003.mp4" type="video/mp4">
                </video>
                </div>
              </li>
              <!-- End of architecture video container-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/Amidu Jamiu 8.effectsResult.jpg" target="_blank">
              <img src="../Architecture/images/Amidu Jamiu 8.effectsResult.jpg" alt="An architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/COMPTEPORARY DESIGN PHOTOSHOP.jpg" target="_blank">
              <img src="../Architecture/images/COMPTEPORARY DESIGN PHOTOSHOP.jpg" alt="An architectural image" >
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/Enscape_2022-10-12-02-03-43.jpg" target="_blank">
              <img src="../Architecture/images/Enscape_2022-10-12-02-03-43.jpg" alt="An architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/Enscape_2022-10-23-07-26-03.jpg" target="_blank">
              <img src="../Architecture/images/Enscape_2022-10-23-07-26-03.jpg" alt="An architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/Enscape_2022-10-23-07-28-52.jpg" target="_blank">
              <img src="../Architecture/images/Enscape_2022-10-23-07-28-52.jpg" alt="An architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/Enscape_2022-10-24-06-03-31.jpg" target="_blank">
              <img src="../Architecture/images/Enscape_2022-10-24-06-03-31.jpg" alt="An architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/kitchen.jpg" target="_blank">
              <img src="../Architecture/images/kitchen.jpg" alt="An interior design of a kitchen">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/KPTV RADIO STATION.jpg" target="_blank">
              <img src="../Architecture/images/KPTV RADIO STATION.jpg" alt="A radio studio interior design">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/room dining and kitchen layout 6.effectsResult.jpg" target="_blank">
              <img src="../Architecture/images/living room dining and kitchen layout 6.effectsResult.jpg" alt="A dinning room interior design">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

               <!--start of the images containers-->
        <li>
          <div class="architect-images-container">
            <a href="../Architecture/images/view from ante  room 1..effectsResult.jpg" target="_blank">
              <img src="../Architecture/images/view from ante  room 1..effectsResult.jpg" alt="An architectural image">
            </a>
      </div>
        </li>
              <!--End of the images containers-->

              <!-- start of architecture video container-->
              <li>
                <div class="architecture-video">
                <video controls>
                  <source src="../Architecture/videos/VID-20221023-WA0001.mp4" type="video/mp4">
                </video>
                </div>
              </li>
              <!-- End of architecture video container-->
              
      </ul>
    
      <div class="architecture-btn">
        <a href="" target="_blank">
         <button>Explore More...</button>
       </a>
       
       <a href="" target="_blank">
          <button>Contact Us</button>
      </a>
       
     
       </div>
 
    </section>
    
    
<section class="telecom-container">
  <h2>Telecom</h2>
  <ul>
    
        <!--start of the first program list-->
        <li>
          <div class="program-item">
      <img src="../images/mtn.jpg" alt="MTN logo">
  
      <div class="program-content">
           <h2>MTN SME Data Subscriptions</h2>
      <p>
        Start enjoying this very low rates for your internet browsing databundle.
        <ul class="telecom-list">
          <li>500MB @ NGN 180</li>
          <li>1GB @ NGN 280</li>
          <li>2GB @ NGN 550</li>
          <li>3GB @ NGN 800</li>
          <li>5GB @ NGN 1,300</li>
          <li>10GB @ NGN 2,700</li>
          <li> <b>And Much More...</b></li>
        </ul>
          
      </p>
      <div class="download-btn">
         <a href="" target="_blank">
          <button>Buy Now</button>
      </a>
      </div>
     
      </div>
  </div>
  </li>
   <!--End of the first program list-->

     <!--start of the first program list-->
     <li>
      <div class="program-item">
  <img src="../images/bet.png" alt="Betting logo">

  <div class="program-content">
       <h2>Fund your betting wallet</h2>
  <p>
    Fund your betting wallet using only customer ID
    <ul class="telecom-list">
      <li>Bet9ja</li>
      <li>SportyBet</li>
      <li>NairaBet</li>
      <li>Betway</li>
      <li>BangBet</li>
      <li>MylottoHub</li>
      <li>Betking</li>
      <li>Paripesa</li>
      <li>NairaMillion</li>
      <li>NaijaBet</li>
      <li>BetLion</li>
      <li><b>And Much More...</b></li>
    </ul>
  </p>
  <div class="download-btn">
     <a href="" target="_blank">
      <button>Buy Now</button>
  </a>
  </div>
 
  </div>
</div>
</li>
<!--End of the first program list-->
    

 <!--start of the first program list-->
 <li>
  <div class="program-item">
<img src="../images/tower.png" alt="tower image">

<div class="program-content">
   <h2>Pay your Electrcity bills</h2>
<p>
Pay your electricity bills online e.g. EKEDC, IKEDC, AEDC, PHEDC e.t.c.
<ul class="telecom-list">
  <li>Eko Electric - EKEDC</li>
  <li>Ikeja Electric- IKEDC</li>
  <li>Ibadan Electric - IBEDC</li>
  <li>Abuja Electric - AEDC </li>
  <li>PorthHarcout Electric - PHEDC</li>
  <li>Kano Electric - KEDC</li>
  <li>Jos Electric- JEDC</li>
  <li>Enugu Electric - EEDC</li>
  <li><b>And Much More...</b></li>
</ul>
</p>
<div class="download-btn">
 <a href="" target="_blank">
  <button>Buy Now</button>
</a>
</div>

</div>
</div>
</li>
<!--End of the first program list-->

 <!--start of the first program list-->
 <li>
  <div class="program-item">
<img src="../images/cable-tv.png" alt="Cable TV image">

<div class="program-content">
   <h2>Cable TV Subscriptions</h2>
<p>
Instant recharge of DSTV, Gotv, Startimes etc. using
SMARTCARD/IUC NUMBER and the registered number.
</p>
<div class="download-btn">
 <a href="" target="_blank">
  <button>Buy Now</button>
</a>
</div>

</div>
</div>
</li>
<!--End of the first program list-->


  </ul>
</section>



    <section class="memory-game-containet">

      <div class="open-source-code-link">

      </div>

    </section>
   
    
    </main>
<!--adding the footer file--->
   <?php  include 'footer.php'; ?>


</body>
</html>