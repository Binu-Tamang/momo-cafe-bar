<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>

    <title>The Momo Cafe Bar </title>
</head>

<body>

    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <section class="section section-login">
        <div class="mouse_move objects">
            <img class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img class="mouse" value="1.8" src="assets/img/ob-2.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img class="mouse" value="1.8" src="assets/img/ob-3.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img loading="lazy" class="mouse" value="0.8" src="assets/img/cherry-tomato.png" alt="food" id="bg-2" data-depth="40" style="transform: translateX(10.9378px) translateY(-25.2067px);">
            <img loading="lazy" class="mouse" value="1.5" src="assets/img/leaf-3.png" alt="food" id="bg-3" data-depth="20" style="transform: translateX(15.0778px) translateY(-50.4778px); right:10%;">
            <img class="mouse" value="1.8" src="assets/img/mint.png" alt="food" style="transform: translateX(0.877778px) translateY(-4.07778px); left:10%; bottom:20%;">
            <img loading="lazy" class="mouse" value="0.8" src="assets/img/cherry-tomato.png" alt="food" id="bg-2" data-depth="40" style="transform: translateX(10.9378px) translateY(-25.2067px); bottom:15%; right:10%; rotate:190deg;">
        </div>
        <div class="container">
            <div class="section-inner">
                <div class="login">
                    <div class="login-hero">
                        <div class="login-hero-header">
                            <h1 class="heading web-tittle">Register New Account</h1>
                        </div>
                        <form action="" class="login-hero-form">
                            <div class="login-hero-form-field">
                                <i class="fa fa-user login-hero-form-field-icon"></i>
                                <input type="text" name="name" placeholder="Your Full Name">
                            </div>
                            <div class="login-hero-form-field">
                                <i class="fa fa-envelope login-hero-form-field-icon"></i>
                                <input type="email" name="email" placeholder="Your Email Address">
                            </div>
                            <div class="login-hero-form-field">
                                <i class="fa-solid fa-phone login-hero-form-field-icon"></i>
                                <input type="tel" name="tel" placeholder="Your Phone Number">
                            </div>
                            <div class="login-hero-form-field">
                                <i class="fa fa-lock login-hero-form-field-icon"></i>
                                <div class="password-field">
                                    <input type="password" name="password" placeholder="Password">
                                    <span class="password-field-icon"></span>
                                </div>
                            </div>
                            <div class="login-hero-form-field">
                                <i class="fa fa-lock login-hero-form-field-icon"></i>
                                <div class="password-field">
                                    <input type="password" name="password" placeholder="Repeat Password">
                                    <span class="password-field-icon"></span>
                                </div>
                            </div>
                            <div class="login-hero-notice text-left">
                                <div class="login-hero-remember">
                                    <input id="loginAgree" name="login-agree" type="checkbox" value="Agree to terms">
                                    <label for="loginAgree"> By Signing Up, I agree to MomoCafe’s <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>. </label>
                                </div>
                            </div>
                            <div class="login-hero-form-field login-hero-form-field-submit">
                                <button class="login-hero-form-submit">
                                    <i class="fa fa-sign-in-alt"></i> Sign Up
                                </button>
                            </div>
                        </form>
                        <div class="login-hero-notice">
                            <span>Already have an account? <a href="login.php">Login</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>
</body>

</html>