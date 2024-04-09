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

    <!-- banner and headre page  -->
    <?php $page_title = 'Book A Table ' ?>
    <?php $page_name = 'Book A Table' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <section class="section-booking">
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
            <div class=" login-hero">
                <div class="login-hero-header">
                    <h1 class="heading web-tittle">Book A Table</h1>
                </div>
                <form class="cnct-form" id="contactForm" action="php/contact-form.php" method="post">
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-12">
                            <div class="input-group">
                                <input type="text" id="name" name="name" class="form-control border-2" required="" placeholder="Name" aria-label="Name" aria-describedby="nameError" style="height: 40px;">
                                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                            <small id="nameError" class="form-text text-danger"></small>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="input-group">
                                <input type="email" id="email" name="email" class="form-control border-2" required="" placeholder="Email Address" aria-label="Email Address" style="height: 40px;">
                                <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="input-group flatpickr">
                                <input type="text" id="time" name="time" class="form-control border-2 time-input flatpickr-input" required="" placeholder="Time" style="height: 40px;" data-input="" readonly="readonly">
                                <a class="input-button" title="toggle" data-toggle="">
                                    <i class="fa-regular fa-clock"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="input-group">
                                <input type="tel" id="phone" name="phone" pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control border-2" required="" placeholder="Mobile No." aria-label="Mobile No." style="height: 40px;">
                                <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="input-group flatpickr">
                                <input type="text" id="date" name="date" class="form-control border-2 flatpickr-input" required="" placeholder="Date" style="height: 40px;" data-input="" readonly="readonly">
                                <a class="input-button" title="toggle" data-toggle="">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="input-group custom-select">
                                <input type="number" id="number-guest" name="number_guest" class="form-control border-2" required="" placeholder="Number of Guests" aria-label="Numbe of Guests" style="height: 40px;">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-left" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your message here..."></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="text-left pt-3">
                                <button type="submit" class="default-btn">Book Now <span></span><i class="fa-solid fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
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