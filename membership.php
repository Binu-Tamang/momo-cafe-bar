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

    <section class="section-membership">
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
            <h2 class="web-tittle text-center py-4">Membership Form</h2>
            <div class="membership-box">
                <div class="membership-hero">
                    <form class="cnct-form" id="contactForm" action="php/reservation-form.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="fullName">Full Name:</label>
                                <input type="text" id="fullName" name="fullName" required>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="email">Email Address:</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" id="phone" name="phone" required>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" required>
                            </div>
                        </div>
                    </form>
                    <fieldset>
                        <legend>Membership Details</legend>
                        <label>Membership Type:</label>
                        <div class="login-hero-remember">
                            <input id="free" name="free" type="checkbox" value="Basic (Free)">
                            <label for="free">Basic (5% Off)</label>
                        </div> <br>
                        <div class="login-hero-remember">
                            <input id="paid" name="paid" type="checkbox" value="Premium (Paid)">
                            <label for="paid">Premium (10% Off)</label>
                        </div>
                    </fieldset>

                    <div class="login-hero-notice text-left">
                        <div class="login-hero-remember">
                            <input id="loginAgree" name="login-agree" type="checkbox" value="Agree to terms">
                            <label for="loginAgree"> By Signing Up, I agree to MomoCafe’s <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>. </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-left pt-3">
                            <button type="submit" class="default-btn">Sign Up <span></span><i class="fa-solid fa-arrow-right-long"></i></button>
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