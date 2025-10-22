<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/dent.css">
    <title>Dental Application</title>
</head>
<body>
    <header>
        <a href="#" class="logo1">Dentaline</a>
        <nav class="navi">
            <a href="#about" class="info">About</a>
            <a href="#services" class="info">Services</a>
            <a href="#contact" class="info">Contact</a>
            <a href="#" class="btnLogin-popup" id="loginbutton">Login</a>
        </nav>
    </header>
    <div class="wrapper" id="formWrapper">
        <span class="icon-close" id="closeBtn">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box login">
            <h1>Login</h1>
            <form action="config/login.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" placeholder="Enter Your Username"
                    required>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="password" placeholder="Enter Your Password"
                    required> 
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox"> Remember Me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="loginbtn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <h1>Signup</h1>
            <form action="config/signup.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="username" placeholder="Enter Your Username"
                    required>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="email" placeholder="Enter Your Email"
                    required>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="password" placeholder="Enter Your Password"
                    required> 
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="confirm_password" placeholder="Confirm Password"
                    required> 
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox"> I agree with the terms & conditions</label>
                </div>
                <button type="submit" class="loginbtn">Signup</button>
                <div class="login-link">
                    <p>Already have an account? <a href="#">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="assets/regist.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>