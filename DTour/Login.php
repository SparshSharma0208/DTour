
< <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="Frontend/img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="Frontend/css/login.css">
    <link rel="stylesheet" href="Frontend/css/log.css">
    <title>DTour-Login</title>

</head>
<body>
    <div class="container">
        <div class="topheading">
                    <div class="logo">
            <img src="Frontend/img/favicon-32x32.png" alt="Logo">
                        DTOUR
                    </div>
        <div class="signup">Don't have an account? <a href="Sign_up.php">SignUp</a></div>
        </div>

        <h5><u>Log in</u></h5>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Forget Password</a>
          </p>
         <input type="submit" class="btn" value="Log In" name="signIn">
        </form>
        <h2><p>OR</p></h2>
        <button class="google-login" ><i class="ri-google-line"></i>  Log in with Google</button>
    </div>

    <script src="Backend/js/log_in.js"></script>
</body>
</html>

