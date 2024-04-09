<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="Frontend/img/favicon-32x32.png" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="Frontend/css/styles.css">
   <link rel="stylesheet" href="Frontend/css/itinerary.css">

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
                  <a href="About-us.php" class="nav__link">About Us</a>
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

   <!--==================== MAIN ====================-->

   <main class="main">
      <div class="container_i">
         <?php
      // Check if destination and days parameters are set in the URL
      if (isset($_GET['destination']) && isset($_GET['days'])) {
         // Get the destination and days values from the URL parameters
         $destination = $_GET['destination'];
         $days = $_GET['days'];
         // Display the destination and days as the title
         echo "<h1 class='main__title'>$destination - $days days</h1>";
      } else {
         // If destination and days parameters are not set, display a default title
         echo "<h1 class='main__title'>Your Itinerary</h1>";
      }
      ?>
      </div>
            
   </main>
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