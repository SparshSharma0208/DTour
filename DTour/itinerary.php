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
    $instruction = $_GET['instruction'];
    // Display the destination and days as the title
    echo "<h1 class='main__title'>$destination - $days days</h1>";

    // Generate a prompt for the chatbot API
    $prompt = "Please create a travel itinerary for a $days-day trip to $destination, based on the following instructions: ($instruction). 
    If no specific instructions are given, proceed with a standard itinerary. Please format the response as follows:
      (Also add travel tips like what to avoid,things to remember,travel advisory etc. for every day)
      Day 1:
      [2 line spaces]
      Morning: 
      [Provide morning activities, including places to visit and foods to try, in a professional manner.]
      [2 line spaces]
      Noon: 
      [Provide activities for the afternoon, again, in a professional manner.]
      [2 line spaces]
      Evening: 
      [Provide evening activities, professionally described.]
      [4 line spaces]
      . 
      . 
      .
      Repeat this format for each day of the itinerary until the final day.";

   
    $api_key = "API_KEY"; // Replace with your OpenAI API key
    $url = "https://api.openai.com/v1/chat/completions"; // Use the chat endpoint for chat models
    $data = array(
        "model" => "gpt-3.5-turbo-0125",
        "messages" => array(
            array("role" => "system", "content" => "You are Travel agent"),
            array("role" => "user", "content" => $prompt)
        ),
        "max_tokens" => 1000
    );
    $data_string = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Bearer " . $api_key
    ));

    $result = curl_exec($ch);
    if ($result === false) {
        // Handle curl error
        echo "Curl error: " . curl_error($ch);
    } else {
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_code != 200) {
            // Handle HTTP error
            echo "HTTP error: " . $http_code;
            echo "Response: " . $result;
        } else {
            // Decode the API response and display the itinerary
            $response = json_decode($result, true);
            if (isset($response['choices']) && isset($response['choices'][0]['message']['content'])) {
                $itinerary = $response['choices'][0]['message']['content'];
                // Display the itinerary in a readable format
                echo "<div class='response'><pre>$itinerary</pre></div>";
            } else {
                echo "Error: Unable to retrieve itinerary.";
            }
        }
    }
    curl_close($ch);
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