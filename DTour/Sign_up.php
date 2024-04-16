<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="shortcut icon" href="Frontend/img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="Frontend/css/signup.css">
    <title>DTour-SignUp</title>

</head>
<body>
    <div class="container">
        <div class="topheading">
                    <div class="logo">
            <img src="Frontend/img/favicon-32x32.png" alt="Logo">
                        DTOUR
                    </div>
        <div class="login">Already have an account? <a href="Login.php">Login</a></div>
        </div>

        <h5><u>Sign up</u></h5>
        <button class="google-signup"><i class="ri-google-line"></i>  Sign up with Google</button>
        
        <h2>
            <span class="line"></span>
            <p> OR</p>
            <span class="line"></span>
          </h2>
        <form method="post" action="register.php">
            <div class="first-last-names-container">
                <label for="first-name">First name:</label>
                <label for="last-name">Last name:</label>
            </div>
            <div class="first-last-names">
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            </div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            <label> <p><input type="checkbox">By signing up, I agree with the Terms of Use & <a href="#">Privacy Policy</a>.</p></label>
            <button type="submit" class="btn" name="signUp">Create an account</button>
        </form>
    </div>

    <script src="Backend/js/sign_up.js"></script>
</body>
</html>



