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

    <section class="section-login">
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
                <div class="login-bg">
                    <img src="images/spices-bg.jpg" alt="" class="imgtobg-img">
                </div>
                <div class="login">
                    <div class="login-hero">
                        <div class="login-hero-header">
                            <h1 class="heading web-tittle">Forgot Password</h1>
                            <p>We Will Send Password On Your Registered Email Id</p>
                        </div>
                        <form action="" class="login-hero-form">
                            <div class="login-hero-form-field">
                                <i class="fa fa-user login-hero-form-field-icon"></i>
                                <input type="email" name="email" placeholder="Your Email Address">
                            </div>
                            <div class="login-hero-form-field login-hero-form-field-submit">
                                <button class="login-hero-form-submit">
                                    <i class="fa fa-key"></i> Send Link
                                </button>
                            </div>
                        </form>
                        <div class="login-hero-notice">
                            <span>Remember your password? <a href="login.php">Login</a></span>
                        </div>
                        <div class="login-hero-footer">
                            <span>2024 &copy; The Momo Cafe Bar | All Rights Reserved</span>
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