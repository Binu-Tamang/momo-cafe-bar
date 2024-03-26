<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include ('inc/css.php') ?>

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
                        <span class="small-heading">the momo’s cafe bar</span>
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
                            <a href="#" class="yellow_btn"> About Us <span></span><i
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
                <li><span>Monday - Thrusday</span> <span>03:00 AM - 01:00pm</span> </li>
                <li><span>Friday</span> <span>03:00 AM - 02:00pm</span> </li>
                <li><span>Saturday - Sunday</span> <span>12:00 AM - 12:00pm</span> </li>
            </ul>
        </div>
    </section>
    <!-- ====================Opening Hours============= -->

    <!-- ====================reservation section============= -->
    <section class="reserv_wrapper">
        <div class="bg-img">
            <div id="objectTop" class="moveable bckg-up">
                <img src="assets/img/bg-16.png" alt="background food">
            </div>
            <div id="objectDown" class="moveable bckg-dwn">
                <img src="assets/img/bg-16.png" alt="background food">
            </div>
        </div>
        <div class="bg-up u-bg">
            <img src="assets/img/zb-divider1.png" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="reserv_img">
                        <img src="assets/img/chicken_lilipop.jpg" alt="Chicken lalipop">
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
        <div class="bg-up d-bg">
            <img src="assets/img/zb-divider.png" alt="background">
        </div>
    </section>
    <!-- ====================reservation section============= -->

    <!-- ==================food menu ======================== -->
    <section class="food-menu">
        <div class="container">
            <span class="small-heading text-center">Menu</span>
            <h2 class="web-tittle text-center">Our Menu</h2>
            <ul class="nav nav-tab-btn-wrap nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Breakfast</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Lunch</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Children Menu</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="salads-tab" data-bs-toggle="pill" data-bs-target="#salads"
                        type="button" role="tab" aria-controls="salads" aria-selected="false">Salads</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pasta-tab" data-bs-toggle="pill" data-bs-target="#pasta"
                        type="button" role="tab" aria-controls="pasta" aria-selected="false">Pasta</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pizza-tab" data-bs-toggle="pill" data-bs-target="#pizza"
                        type="button" role="tab" aria-controls="pizza" aria-selected="false">Pizza</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="menu-list">
                                    <img src="assets/img/burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Desayuno</strong>
                                        <p>Spinach cooked with homemade cottage with house special sauce <span
                                                id="dots">...</span><span id="more" style="display: none;">erisque enim
                                                ligula venenatis dolor.</span>
                                            <button onclick="myFunction()" id="myBtn">Read more</button>
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img src="assets/img/burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Desayuno</strong>
                                        <p>Spinach cooked with homemade cottage with house special sauce <span
                                                id="dots">...</span><span id="more" style="display: none;">erisque enim
                                                ligula venenatis dolor.</span>
                                            <button onclick="myFunction()" id="myBtn">Read more</button>
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img src="assets/img/burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Desayuno</strong>
                                        <p>Spinach cooked with homemade cottage with house special sauce <span
                                                id="dots">...</span><span id="more" style="display: none;">erisque enim
                                                ligula venenatis dolor.</span>
                                            <button onclick="myFunction()" id="myBtn">Read more</button>
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,50 €</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap">
                                        <img src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img src="assets/img/dish-2.png" alt="food">
                                    </div>
                                    <div class="offer-banner">
                                        <img src="assets/img/offer-rate.png" alt="offer pamplet">
                                    </div>
                                    <div class="cap-down">
                                        <img src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="menu-list">
                                    <img src="assets/img/burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Desayuno</strong>
                                        <p>Spinach cooked with homemade cottage with house special sauce <span
                                                id="dots">...</span><span id="more" style="display: none;">erisque enim
                                                ligula venenatis dolor.</span>
                                            <button onclick="myFunction()" id="myBtn">Read more</button>
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img src="assets/img/burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Desayuno</strong>
                                        <p>Spinach cooked with homemade cottage with house special sauce <span
                                                id="dots">...</span><span id="more" style="display: none;">erisque enim
                                                ligula venenatis dolor.</span>
                                            <button onclick="myFunction()" id="myBtn">Read more</button>
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img src="assets/img/burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Desayuno</strong>
                                        <p>Spinach cooked with homemade cottage with house special sauce <span
                                                id="dots">...</span><span id="more" style="display: none;">erisque enim
                                                ligula venenatis dolor.</span>
                                            <button onclick="myFunction()" id="myBtn">Read more</button>
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,50 €</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    Content for Lunch tab
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    Content for Children Menu tab
                </div>
                <div class="tab-pane fade" id="salads" role="tabpanel" aria-labelledby="salads-tab">
                    Content for Salads tab
                </div>
                <div class="tab-pane fade" id="pasta" role="tabpanel" aria-labelledby="pasta-tab">
                    Content for Pasta tab
                </div>
                <div class="tab-pane fade" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
                    Content for Pizza tab
                </div>
            </div>
            <div class="text-center pt-5">
                <a href="#" class="default-btn"> Order Online<span></span><i
                        class="fa-solid fa-arrow-right-long"></i></a>
                <a href="#" class="yellow_btn mx-4"> View Our Menu <span></span><i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>
    <!-- ==================food menu ======================== -->

    <!-- ==================food video===================== -->
    <section class="food_video">
        <img src="assets/img/food-video.png" alt="food video">
        <div class="item_btn">
            <a href="#" class="btn_play"><span class="circular_text_wrap"></span></a>
        </div>
    </section>
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

            <div class="review-platform">
                <h2 class="web-tittle text-center">Share your experience with us on</h2>
                <div class="f-box py-3">
                    <img class="socisl-img-1" src="assets/img/google-review-logo.png" alt="google">
                    <img class="socisl-img-2" src="assets/img/trip.png" alt="tripadvisor">
                    <img class="socisl-img-1" src="assets/img/yelp-review-logo.png" alt="yelp">
                </div>
                <div class="f-box s-box">
                    <img class="socisl-img-3" src="assets/img/facebook-review-logo.png" alt="facebook">
                </div>
            </div>
        </div>
    </section>


    <div class="mouse_move">
        <img id="img1" src="assets/img/b-1.png" alt="food" class="mouse"
            value="5" >
        <img id="img2" src="assets/img/b-1.png" alt="food" 
            class="mouse" value="-5">
        <h2>GeeksforGeeks</h2>
    </div>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include ('inc/footer.php');
    include ('inc/js.php')
        ?>

    <script>
        const navItems = document.querySelectorAll('.nav-links ul.links  > li ');
        if (navItems.length >= 1) {
            navItems[0].classList.add("active");
        }
    </script>
</body>

</html>