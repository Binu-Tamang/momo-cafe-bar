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
    <!-- =====================Banner Slider ==================== -->
    <!-- <section class="banner_slider">
        <img src="assets/img/banner_food.jpg" alt="momo and other food">
    </section> -->
    <!-- =====================Banner Slider ==================== -->

    <!-- ====================About Us================= -->
    <section class="abt-food">
        <div class="container">
            <div class="bg-img">
                <div id="objectTop" class="moveable bg-img-top">
                    <img src="assets/img/tomo-bg.png" alt="background food">
                </div>
                <div id="objectDown" class="moveable bg-img-down">
                    <img src="assets/img/tomo-bg.png" alt="background food">
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="abt-food-img">
                        <div class="food_1">
                            <img src="assets/img/two-pasta.jpg" alt="food">
                        </div>
                        <div class="food_2">
                            <img src="assets/img/momo.jpg" alt="food">
                        </div>
                        <div class="food_3">
                            <img src="assets/img/burger.jpg" alt="food">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="abt-food-cntent">
                        <span class="small-heading">Welcome to the momo’s cafe bar</span>
                        <h1 class="web-tittle">Nothing brings people together like a good Food</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi doloremque consequuntur
                            corrupti
                            mollitia odit ullam ipsam enim, molestias sunt nulla aut autem tenetur sapiente
                            reprehenderit,
                            suscipit modi a. Facere, possimus.</p>
                        <div class="div-two">
                            <ul>
                                <li><i class="fa-solid fa-check"></i><span>Food Items management</span></li>
                                <li><i class="fa-solid fa-check"></i><span>Customer feedback portal</span></li>
                            </ul>
                            <ul>
                                <li><i class="fa-solid fa-check"></i><span>Table reservation</span></li>
                                <li><i class="fa-solid fa-check"></i><span>Location-based services</span></li>
                            </ul>
                        </div>
                        <div class="text-left">
                            <a href="#" class="yellow_btn"> About Resturant <span></span><i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================About Us================= -->

    <!-- ====================Opening Hours============= -->
    <section class="cafe-hrs">
        <div class="container">
            <span class="small-heading">the momo’s cafe bar</span>
            <h2 class="web-tittle">Opening Time</h2>
            <ul class="opening_time">
                <li><span>Monday - Thrusday</span> <span>08:00 AM - 08:00pm</span> </li>
                <li><span>Friday</span> <span>08:00 AM - 02:00pm</span> </li>
                <li><span>Saturday - Sunday</span> <span>08:00 AM - 08:00pm</span> </li>
            </ul>
        </div>
    </section>
    <!-- ====================Opening Hours============= -->

    <!-- ====================reservation section============= -->
    <!-- <div class="bg-up">
        <img src="assets/img/bg-1.jpg" alt="background">
    </div> -->
    <section class="reserv_wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <!-- <div class="reserv_img">
                        <img src="assets/img/chicken_lilipop.jpg" alt="Chicken lalipop">
                    </div> -->
                    <div class="main-container-md">
                <div class="main">
                    <div class="big-circle">
                        <!-- <div class="icon-block">
                            <a href="about-us.php">
                                <img src="assets/img/mountain.png" alt="icon">
                            </a>
                        </div> -->
                        <!-- <div class="icon-block">
                            <a href="about-us.php">
                                <img src="assets/img/medal.png" alt=" icon">
                            </a>
                        </div> -->
                        <!-- <div class="icon-block">
                            <a href="about-us.php">
                                <img src="assets/img/snowflake.png" alt=" icon">
                            </a>
                        </div> -->
                        <!-- <div class="icon-block">
                            <a href="about-us.php">
                                <img src="assets/img/helmet.png" alt=" icon">
                            </a>
                        </div> -->
                    </div>
                    <div class="circle">
                        <!-- <div class="icon-block">
                            <a href="trails.php">
                                <img src="assets/img/map.png" alt=" icon">
                            </a>
                        </div> -->
                        <!-- <div class="icon-block">
                            <a href="gallery.php">
                                <img src="assets/img/image-gallery.png" alt=" icon">
                            </a>
                        </div> -->
                        <!-- <div class="icon-block">
                            <a href="sponsor.php">
                                <img src="assets/img/sponsor.png" alt="icon">
                            </a>
                        </div> -->
                        <!-- <div class="icon-block">
                            <a href="events.php">
                                <img src="assets/img/planner.png" alt=" icon">
                            </a>
                        </div> -->
                    </div>
                    <div class="center-logo">
                        <img href="index.php" src="assets/img/chief.png" alt="logo">
                    </div>
                </div>
            </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="reserv_form">
                        <span class="small-heading">Reservations</span>
                        <h2 class="web-tittle text-white">Book Your Table Now</h2>
                        <form class="cnct-form" id="contactForm" action="php/contact-form.php" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <div class="input-group">
                                        <input type="text" id="name" name="name" class="form-control border-2" required
                                            placeholder="Name" style="height: 40px;">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <small id="nameError" class="form-text text-danger"></small>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="email" id="email" name="email" class="form-control border-2"
                                            required placeholder="Email Address" style="height: 40px;">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="input-group">
                                        <input type="text" id="time" name="time" class="form-control border-2" required
                                            placeholder="Time" style="height: 40px;">
                                        <i class="fa-regular fa-clock"></i>
                                    </div>
                                    <small id="timeError" class="form-text text-danger"></small>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="input-group">
                                        <input type="tel" id="phone" name="phone"
                                            pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$"
                                            class="form-control border-2" required placeholder="Mobile No."
                                            style="height: 40px;">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="date" id="birthDate" name="birthDate" class="form-control border-2"
                                            required placeholder="Your Date of Birth" style="height: 40px;">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group custom-select">
                                        <select id="guests" name="guests" class="form-control border-2" required
                                            style="height: 40px;">
                                            <option value="1">Number of Guest</option>
                                            <option value="2">1 Guest</option>
                                            <option value="3">2 Guests</option>
                                            <option value="4">3 Guests</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>

                                <div class="col-12 contact-msg">
                                    <textarea id="message" class="form-control border-2" name="message" required
                                        placeholder="Your Message" rows="5"></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX">
                                </div>
                            </div>
                        </form>

                        <div class="text-left">
                            <a href="#" class="default-btn"> Book Now <span></span><i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="bg-up">
        <img src="assets/img/crop-bg-up.png" alt="background">
    </div> -->
    <!-- ====================reservation section============= -->

    <!-- ==================food menu ======================== -->
    <section class="food-menu">
        <div class="container"></div>
    </section>
    <!-- ==================food menu ======================== -->

    <!-- ==================food video===================== -->
    <!-- <section class="food_video">
        <div class="container">
            <span class="small-heading">Reservations</span>
            <h2 class="web-tittle text-white">Book Your Table Now</h2>
        </div>
    </section> -->
    <!-- ==================food video===================== -->

    <section class="testimonial cafe-hrs">
        <div class="container">
            <span class="small-heading text-center">testimonials</span>
            <h2 class="web-tittle text-center">Some Words From Our Loyal Guests</h2>

            <div class="owl-carousel owl-theme testimonial-owl">
                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>

                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>

                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>

                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>

                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>

                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>

                <div class="item pro-wrap">
                    <div class="img-peofile">
                        <img src="assets/img/Ellipse16.png" alt="user">
                    </div>
                    <span class="quote"><i class="fa-solid fa-quote-right"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sequi temporibus dignissimos
                        aspernatur, voluptatum laudantium debitis, eius veritatis illum esse cumque officiis vero! Optio
                        commodi harum aliquid voluptatibus esse animi.</p>
                    <strong>person name</strong>
                </div>
            </div>
            <div class="text-center pt-3">
                <a href="#" class="default-btn"> Write A Review <span></span><i
                        class="fa-solid fa-arrow-right-long"></i></a>
                <a href="#" class="yellow_btn"> View All <span></span><i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-lg-6">
            
        </div>
    </div>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
        ?>

    <script>const navItems = document.querySelectorAll('.nav-links ul.links  > li ');
        if (navItems.length >= 1) {
            navItems[0].classList.add("active");
        }
    </script>
</body>

</html>