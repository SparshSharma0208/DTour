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

   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="Frontend/img/favicon-32x32.png" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="Frontend/css/styles.css">
   <link rel="stylesheet" href="Frontend/css/bot.css">
   <link rel="stylesheet" href="Frontend/css/post_upload.css">

   <title>DTOUR</title>
</head>

<body>
   <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Liv</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p> Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>🌍Bonjour! Liv here,<br>your travel expert at your service. How may I assist you?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>

   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="#" class="nav__logo">
            <img src="Frontend/img/favicon-32x32.png" alt="Icon" class="nav__logo-icon">
         </a>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="#" class="nav__link active-link">Home</a>
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
   <!--==================== Carousel ====================-->
    <div class="carousel">
      <!-- list item -->
      <div class="list">
          <div class="item">
              <img src="Frontend/img/Japan.jpg">
              <div class="content">
                  <div class="author">Welcome To DTour</div>
                  <div class="title">
                  Explore <br>
                  The World With</div>
                  <div class="topic">LIV</div>
                  <div class="des">
                      <!-- lorem 50 -->
                     Having difficulty finding information regarding Your travel plans,<br> Don't Worry with our Ai driven bot you can rest assured. <br> Click below to start chatting. 
                     </div>
                  <div class="bot_buttons">
                      <button >Start Chat <i class="ri-arrow-right-line"></i></button>
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="Frontend/img/India.jpg">
              <div class="content">
                  <div class="author">Welcome To DTour</div>
                  <div class="title">                  Explore <br>
                  The World With</div>
                  <div class="topic">LIV</div>
                  <div class="des">
                  Having difficulty finding information regarding Your travel plans,<br> Don't Worry with our Ai driven bot you can rest assured. <br> Click below to start chatting..      
                  </div>
                  <div class="bot_buttons">
                      <button >Start Chat <i class="ri-arrow-right-line"></i></button>
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="Frontend/img/France.jpg">
              <div class="content">
                  <div class="author">Welcome to DTour</div>
                  <div class="title">                  Explore <br>
                  The World With</div>
                  <div class="topic">LIV</div>
                  <div class="des">
                  Having difficulty finding information regarding Your travel plans,<br> Don't Worry with our Ai driven bot you can rest assured. <br> Click below to start chatting.    
                  </div>
                  <div class="bot_buttons">
                      <button >Start Chat <i class="ri-arrow-right-line"></i></button>
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="Frontend/img/Italy.jpg">
              <div class="content">
                  <div class="author">Welcome To DTour</div>
                  <div class="title">                  Explore <br>
                  The World With</div>
                  <div class="topic">LIV</div>
                  <div class="des">
                  Having difficulty finding information regarding Your travel plans,<br> Don't Worry with our Ai driven bot you can rest assured. <br> Click below to start chatting.    
                  </div>
                  <div class="bot_buttons">
                      <button >Start Chat <i class="ri-arrow-right-line"></i></button>
                  </div>
              </div>
          </div>
      </div>
      <!-- list thumnail -->
      <div class="thumbnail">
          <div class="item">
            <a href="https://www.japan.travel/en/fuji-guide/" target="_blank">
              <img src="Frontend/img/Japan.jpg" ></a>
              <div class="content">
                  <div class="title">
                     <i class="ri-map-pin-line"></i>
                      Japan
                  </div>
                  <div class="description">
                      Mount fuji,Honshu
                  </div>
              </div>
          </div>
          <div class="item">
            <a href="https://mysorepalace.karnataka.gov.in/attractions.html" target="_blank">
              <img src="Frontend/img/India.jpg"></a>
              <div class="content">
                  <div class="title">
                     <i class="ri-map-pin-line"></i>
                      India
                  </div>
                  <div class="description">
                      Mysore Palace,karnataka
                  </div>
              </div>
          </div>
          <div class="item">
            <a href="https://www.toureiffel.paris/en" target="_blank">
              <img src="Frontend/img/France.jpg"></a>
              <div class="content">
                  <div class="title">
                     <i class="ri-map-pin-line"></i>
                      France
                  </div>
                  <div class="description">
                      Effil Tower,Paris
                  </div>
              </div>
          </div>
          <div class="item">
            <a href="https://www.thecolosseum.org/visit/" target="_blank">
              <img src="Frontend/img/Italy.jpg"></a>
              <div class="content">
                  <div class="title">
                     <i class="ri-map-pin-line"></i>
                      Italy
                  </div>
                  <div class="description">
                      Colosseum,Rome
                  </div>
              </div>
          </div>
      </div>
      <!-- next prev -->

      <div class="arrows">
          <button id="prev"><</button>
          <button id="next">></button>
      </div>
      <!-- time running -->
      <div class="time"></div>
  </div>

      <!--==================== Itinerary ====================-->
 
      <section class="itinerary" id="itinerary">
         <div class="itinerary__container container grid">
           <div class="itinerary__data">
             <h2 class="itinerary__title">Itinerary Creation</h2>
             <p class="itinerary__subtitle">Create your personalized itinerary</p>
             <p class="itinerary__description">
               Enter your desired destination and number of days to create a personalized itinerary for your next adventure.
             </p>
             <form  action="" class="itinerary__form">
               <input type="text" placeholder="Destination" class="itinerary__input itinerary__input-destination" required>
               <input type="number" min="1" placeholder="No. of days"  class="itinerary__input itinerary__input-days" required>
               <input type="textarea" placeholder="provide instruction" class="itinerary__input-instruction">
               <button type="submit"  class="button">Create Itinerary
               <i class="ri-arrow-right-line"></i>
               </button>
             </form>
           </div>
           <div class="itinerary__image">
             <img src="Frontend/img/Itinerary-Planning.jpg" alt="itinerary" class="itinerary__img">
             <div class="itinerary__shadow"></div>
           </div>
         </div>
       </section>


      <!--==================== POPULAR ====================-->

      <section class="popular section" id="popular">
         <h2 class="section__title">
            Enjoy The Exotic Beauty <br>
            Of The World
         </h2>

         <div class="popular__container container grid">
            <article class="popular__card">
               <div class="popular__image">
                  <img src="Frontend/img/popular-alaska.jpg" alt="popular image" class="popular__img">
                  <div class="popular__shadow"></div>
               </div>

               <h2 class="popular__title">
                  Mendenhall Ice Caves
               </h2>

               <div class="popular__location">
                  <i class="ri-map-pin-line"></i>
                  <span>Alaska,US</span>
               </div>
            </article>

            <article class="popular__card">
               <div class="popular__image">
                  <img src="Frontend/img/popular-cambodia.jpg" alt="popular image" class="popular__img">
                  <div class="popular__shadow"></div>
               </div>

               <h2 class="popular__title">
                  Bayon temple
               </h2>

               <div class="popular__location">
                  <i class="ri-map-pin-line"></i>
                  <span>Cambodia</span>
               </div>
            </article>

            <article class="popular__card">
               <div class="popular__image">
                  <img src="Frontend/img/popular-indonesia.jpg" alt="popular image" class="popular__img">
                  <div class="popular__shadow"></div>
               </div>

               <h2 class="popular__title">
                  Bali
               </h2>

               <div class="popular__location">
                  <i class="ri-map-pin-line"></i>
                  <span>Indonesia</span>
               </div>
            </article>
            
         </div>
         
      </section>


<h2 class="section__title">
            <br>Relive Your <br>
            Memory
         </h2>
      <div id="postContainer"></div>
       
      <script>
    var postContainer = document.getElementById("postContainer");
    var containerCount = 0;
    if (containerCount==0){
        var deletable = false;
    }else{
        var deletable = true;
    }
    

    function createPostContainer() {
        var newContainer = document.createElement("div");
        newContainer.className = "container-post";
        newContainer.id = "imgBox" + containerCount;
        newContainer.deletable = deletable;
        newContainer.innerHTML = `
            <div id="prevText"></div>
            <textarea id="textBox" placeholder="Add Caption"></textarea>
            <input type="file" accept="image/*" name="image" id="file" style="display: none" onchange="loadFile(event, ${containerCount})">
            <label for="file"><img src="Frontend/img/upload.png" class="upload-icon"></label>
        `;
        postContainer.insertBefore(newContainer, postContainer.firstChild);
        containerCount++;
    
        var textBox = newContainer.querySelector("#textBox");
        var prevText = newContainer.querySelector("#prevText");
    
        textBox.addEventListener("input", function() {
            prevText.textContent = this.value;
        });
    
        newContainer.addEventListener("mousedown", function(event) {
            if (event.button === 2 && newContainer.deletable) { // Check if the right mouse button is clicked and the container is deletable
                postContainer.removeChild(newContainer); // Remove the container
                containerCount--; // Decrement the container count
            }
        });

        // Remove upload option from other containers
        var containers = postContainer.querySelectorAll(".container-post");
        containers.forEach(function(container) {
            if (container !== newContainer) {
                container.removeChild(container.querySelector("input"));
                container.removeChild(container.querySelector("label"));
                container.deletable = true; // Allow deleting other containers
            }
        });

        deletable = false; // Newly created container is not deletable

        document.addEventListener("DOMContentLoaded", function() {
            ScrollReveal().reveal(".container-post", { delay: 200, duration: 800, reset: true });
        });
    }

    function loadFile(event, containerId){
        var imgBox = document.getElementById("imgBox" + containerId);
        var file = event.target.files[0];
        var reader = new FileReader();
        
        reader.onload = function(e) {
            imgBox.style.backgroundImage = "url(" + e.target.result + ")";
            createPostContainer(); // Create new post container after setting the image
            event.target.value = null; // Reset the file input to allow re-uploading the same image
        }
    
        if (file) {
            reader.readAsDataURL(file);
        }
    }

    // Initial creation of the first post container
    createPostContainer();
</script>
<script src="https://unpkg.com/scrollreveal"></script>
      <!--==================== JOIN ====================-->
      <section class="join section">
         <div class="join__container container grid">
            <div class="join__data">
               <h2 class="section__title">
                  Join Us <br>
               </h2>

               <p class="join__description">
                  Get up to date with the latest
                  travel and information from us.
               </p>

               <form action="" class="join__form">
                  <input type="email" value="<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['email'];
        }
       }
       ?>" class="join__input">

                  <button class="join__button button">
                     Subscribe Our Newsletter <i class="ri-arrow-right-line"></i>
                  </button>
               </form>
            </div>

            <div class="join__image">
               <img src="Frontend/img/join-island.jpg" alt="join image" class="join__img">
               <div class="join__shadow"></div>
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
                        <a href="About-us.php" class="footer__link">About Us</a>
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
                        <a href="#" class="footer__link">Home</a>
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

   <script src="Backend/js/bot.js"></script>
</body>

</html>
