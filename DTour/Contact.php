<?php
// Start the session
session_start();

include("connect.php");
// Check if the user is not logged in
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header("Location: Login.php");
    exit;
}

// Check if last activity timestamp is not set
if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = time(); // Set the initial timestamp
}

// Check if the user has been inactive for more than 30 minutes
$timeout_duration = 1800; // 30 minutes in seconds
if (time() - $_SESSION['last_activity'] > $timeout_duration) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: Login.php");
    exit;
}

// Update last activity timestamp
$_SESSION['last_activity'] = time();
?>

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
   <link rel="stylesheet" href="Frontend/css/contact.css">

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
                  <a href="#Contact Us" class="nav__link">Contact Us</a>
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
      <section>
   <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos eaque doloremque, nulla mollitia facilis temporibus ullam voluptas nostrum consequatur? Fugiat vitae sint quo est eveniet perspiciatis eum asperiores ipsam.</p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
              <p>Bennett University,<br/> Greater Noida, Uttar Pradesh, <br/>India</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>XXX-XXX-1211</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
             <p>example@email.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
        <form method="post" action="send_msg.php" id="contact-form">
    <h2>Send Message</h2>
    <div class="input-box">
        <input type="text" required="true" value="<?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
        ?>" name="fullName" readonly>
        <span>Full Name</span>
    </div>
    
    <div class="input-box">
        <input type="email" value="<?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['email'];
                }
            }
        ?> " required="true" name="email" readonly>
        <span>Email</span>
    </div>
    
    <div class="input-box">
        <textarea required="true" name="message"></textarea>
        <span>Type your Message...</span>
    </div>
    
    <div class="input-box">
        <input type="submit" value="Send" name="submit-msg">
    </div>
</form>

        </div>
        
      </div>
    </div>
  </section>
  <!-- ==================================FAQ SECTION======================================== -->


  <h2 class="section__title">
      Frequently Asked Questions <br>
                  (FAQs)
         </h2>
  <div class="container">
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Why is the moon sometimes out during the day?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">Why is the sky blue?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Will we ever discover aliens?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">How much does the Earth weigh?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">How do airplanes stay up?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
    </div>

   </main>
     <!--========== SCROLL UP ==========-->
 <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
 </a>

 <!--=============== SCROLLREVEAL ===============-->
 <script src="Backend/js/scrollreveal.min.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="Backend/js/contct.js"></script>
 <script src="Backend/js/main.js"></script>
</body>

</html>