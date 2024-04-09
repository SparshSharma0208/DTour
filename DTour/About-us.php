<?php
session_start();
include("connect.php");

if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
   header("Location: Login.php");
   exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="Frontend/img/favicon-32x32.png" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="Frontend/css/styles.css">

   <title>DTOUR</title>
</head>

<body>
   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="index.php" class="nav__logo">
            <img src="Frontend/img/favicon-32x32.png" alt="Icon" class="nav__logo-icon">
         </a>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="index.php" class="nav__link active-link">Home</a>
               </li>

               <li class="nav__item">
                  <a href="#About Us" class="nav__link">About Us</a>
               </li>

               <li class="nav__item">
                  <a href="Contact.php" class="nav__link">Contact Us</a>
               </li>
               
               <li class="nav__item">
               <a href="logout.php" class="nav__link">Logout</a> 
             </li>

            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
               <i class="ri-close-line"></i>
            </div>
         </div>

         <!-- Toggle button -->
         <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
         </div>
      </nav>
   </header>
   <main class="main">


        <!--==================== About Us ====================-->
    <section class="popular section" id="popular">
        <div>
            <h2 class="section__title">About Us</h2>
            <p class="About-us__description">
                Occaecat est ipsum reprehenderit reprehenderit veniam anim laborum est
                esse duis occaecat reprehenderit pariatur.
            </p>
        </div>
        <div class="apm__image">
            <img src="Frontend/img/About-us.jpg" alt="apm image" class="apm__img">
            <div class="about__shadow"></div>
         </div>


        <div class="about-us__container container grid">
        <div>
            <h2 class="about__title"><i class="ri-arrow-right-line"></i> Vision</h2>
            <p class="about__subtitle">
                Ex nisi in in minim dolore ad nostrud cillum. Fugiat
                veniam adipisicing nulla amet cupidatat sunt dolore nisi
                ullamco exercitation exercitation.Mollit
            </p>
        </div>
    
        <div>
            <h2 class="about__title"><i class="ri-arrow-right-line"></i> Mission</h2>
            <p class="about__subtitle">
                Ex nisi in in minim dolore ad nostrud cillum. Fugiat
                veniam adipisicing nulla amet cupidatat sunt dolore nisi
                ullamco exercitation exercitation.Mollit
            </p>
        </div>
        </div>

        <div>
            <h2 class="section__title">Our Team</h2>
            <div class="about-us__container container grid">
                <article class="popular__card">
                   <div class="about-us__image">
                      <img src="Frontend/img/home-bg.jpg" alt="Person 1" class="about-us__img">
                      <div class="about__shadow"></div>
                   </div>
    
                   <h2 class="about__title">
                      Acchyutam Agrawal
                   </h2>
    
                   <div class="popular_location">
                      <span>developer</span>
                   </div>
                </article>

                <article class="popular__card">
                  <div class="about-us__image">
                     <img src="Frontend/img/home-bg.jpg" alt="Person 1" class="about-us__img">
                     <div class="about__shadow"></div>
                  </div>
   
                  <h2 class="about__title">
                     Sparsh Sharma
                  </h2>
   
                  <div class="popular_location">
                     <span>developer</span>
                  </div>
               </article>
             </div>
        </div>
    </section>
 
    </main>
   <!--==================== FOOTER ====================-->
   <footer class="footer">
    <div class="footer__container container grid">
       <div class="footer__content grid">
          <div>
             <a href="#" class="footer__logo">Dtour</a>

             <p class="footer__description">
                Travel with us and explore <br>
                Start you Tour Now .
             </p>
          </div>

          <div class="footer__data grid">
             <div>
                <h3 class="footer__title">About</h3>

                <ul class="footer__links">
                   <li>
                      <a href="#" class="footer__link">About Us</a>
                   </li>

                   <li>
                      <a href="#" class="footer__link">Features</a>
                   </li>

                </ul>
             </div>

             <div>
                <h3 class="footer__title">Project</h3>

                <ul class="footer__links">
                   <li>
                      <a href="Contact.php" class="footer__link">FAQs</a>
                   </li>

                   <li>
                      <a href="index.php" class="footer__link">Home</a>
                   </li>

                </ul>
             </div>

             <div>
                <h3 class="footer__title">Contact</h3>

                <ul class="footer__links">
                   <li>
                      <a href="Contact.php" class="footer__link">Contact us</a>
                   </li>


                </ul>
             </div>

             <div>
                <h3 class="footer__title">Support</h3>

                <ul class="footer__links">
                   <li>
                      <a href="#" class="footer__link">Privacy Policy</a>
                   </li>

                   <li>
                      <a href="#" class="footer__link">Terms & Services</a>
                   </li>

                </ul>
             </div>
          </div>
       </div>

       <div class="footer__group">
          <div class="footer__social">
             <a href="https://www.linkedin.com/" target="_blank" class="footer__social-link">
                <i class="ri-linkedin-line"></i>
             </a>

             <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                <i class="ri-instagram-line"></i>
             </a>

          </div>

          <span class="footer__copy">
             &#169; Copyright DTour. All rights reserved
          </span>
       </div>
    </div>
 </footer>

 <!--========== SCROLL UP ==========-->
 <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
 </a>

 <!--=============== SCROLLREVEAL ===============-->
 <script src="Backend/js/scrollreveal.min.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="Backend/js/main.js"></script>
</body>

</html>