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
    <!-- ==================Page Loader======================= -->
    <!-- Loader -->
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/momo_logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- ==================banner slider ======================== -->
    <section class="banner-slider">
        <div class="container">
            <div class="mouse_move objects">
                <img class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
                <img class="mouse" value="1.8" src="assets/img/ob-2.png" alt="food fly">
                <img class="mouse" value="1.8" src="assets/img/ob-3.png" alt="food fly">
                <img class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="left-banner">
                        <strong>An <span>Ambient</span> <br> Dining Journey</strong>
                        <p>The Momos Cafe Bar, where we're breaking new ground with an exciting array of dishes to be enjoyed.</p>
                        <a href="menu.php" class="default-btn"> Explore Menu<span></span><i class="fa-solid fa-arrow-right-long"></i></a>
                        <div id="circlebanner">

                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="right-banner">
                        <div class="owl-carousel owl-theme banner-slider">
                            <div class="item banner-box" data-dot='<img src="assets/img/b-1.png" alt="food-slider">'>
                                <div class="banner-img-cover">
                                    <img src="assets/img/b-1.png" alt="food-slider">
                                </div>
                                <div class="offer-rate-banner">
                                    <div class="img-offer-wrap">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item banner-box" data-dot='<img rel="preload" src="assets/img/b-2.png" alt="food-slider" as="image">'>
                                <div class="banner-img-cover">
                                    <img rel="preload" src="assets/img/b-2.png" alt="food-slider" as="image">
                                </div>
                                <div class="offer-rate-banner">
                                    <div class="img-offer-wrap">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item banner-box" data-dot='<img rel="preload" src="assets/img/b-3.png" alt="food-slider" as="image">'>
                                <div class="banner-img-cover">
                                    <img rel="preload" src="assets/img/b-3.png" alt="food-slider" as="image">
                                </div>
                                <div class="offer-rate-banner">
                                    <div class="img-offer-wrap">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="banner-fly-object mouse_move">
                            <img class="mouse" value="1.8" src="assets/img/capcicum.png" alt="food">
                            <img class="mouse" value="1.8" src="assets/img/cherry-tomato.png" alt="food">
                            <img class="mouse" value="1.8" src="assets/img/mint.png" alt="food">
                            <img class="mouse" value="1.8" src="assets/img/1.png" alt="food">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======button to click ==== -->
        <div class="bottom-click">
            <div class="menu-click hi-icon-wrap hi-icon-effect-6">
                <div class="food-box hi-icon" id="food1"></div>
                <div class="food-box" id="food2"></div>
                <div class="food-box" id="food3"></div>
            </div>
        </div>
        </div>
    </section>

    <!-- ========three box html starts--------------------- -->
    <section class="food-box">
        <div class="mouse_move second-objects">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="food-box-wrap">
                        <img loading="lazy" decoding="async" src="assets/img/ficon.png" alt="icon images" width="80px" height="80px">
                        <strong>Healthy Food</strong>
                        We maintain the quality and standard of our food that gets delevired to our customers.
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="food-box-wrap">
                        <img loading="lazy" decoding="async" src="assets/img/ficon3.png" alt="icon images" width="80px" height="80px">
                        <strong>Fast Delivery</strong>
                        We make sure that our customers received there order on time.
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="food-box-wrap">
                        <img loading="lazy" decoding="async" src="assets/img/ficon2.png" alt="icon images" width="80px" height="80px">
                        <strong>Event & Party</strong>
                        We organized event and party at our restaurant.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================About Us================= -->
    <section class="abt-food">
        <div class="container">
            <div id="main" class="bg-img">
                <div id="parallax mouse_move" class="bg-img-top">
                    <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/tomo-bg.png" alt="background food">
                </div>
                <div id="parallax mouse_move" class="bg-img-down">
                    <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/tomo-bg.png" alt="background food">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6" style="display: flex;justify-content: center;
    align-items: center;">
                    <div class="abt-food-img">
                        <div class="food_1">
                            <img loading="lazy" decoding="async" src="assets/img/two-pasta.jpg" alt="food">
                        </div>
                        <div class="food_2">
                            <img loading="lazy" decoding="async" src="assets/img/momo.jpg" alt="food">
                        </div>
                        <div class="food_3">
                            <img loading="lazy" decoding="async" src="assets/img/burger.jpg" alt="food">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="abt-food-cntent">
                        <span class="small-heading">the momo’s cafe bar</span>
                        <h1 class="web-tittle">Nothing brings people together like a good Food</h1>
                        <p>
                            Welcome to The Momos Café Bar in Teulada, Alicante - where good food brings people together! We're thrilled to have you join us in our cozy and welcoming café bar, where we strive to create a warm and inviting atmosphere for our guests. Whether you're a local or just passing through, our menu offers a delightful selection of momos and other delectable dishes that are sure to satisfy your cravings. Our team is dedicated to providing top-notch service and ensuring that your dining experience is nothing short of fantastic. So, come on in, grab a seat, and get ready to enjoy some delicious food and great company at The Momos Café Bar!</p>
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
                            <a href="about-us.php" class="yellow_btn"> About Us <span></span><i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================About Us================= -->

    <!-- ==================food menu ======================== -->
    <section class="food-menu">
        <div class="mouse_move objects">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-2.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-3.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
        </div>
        <div class="container">
            <span class="small-heading text-center">Menu</span>
            <h3 class="web-tittle text-center">Our Menu</h3>
            <ul class="nav nav-tab-btn-wrap nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Meats</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="salads-tab" data-bs-toggle="pill" data-bs-target="#salads" type="button" role="tab" aria-controls="salads" aria-selected="false">Salads</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pasta-tab" data-bs-toggle="pill" data-bs-target="#pasta" type="button" role="tab" aria-controls="pasta" aria-selected="false">Pasta</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pizza-tab" data-bs-toggle="pill" data-bs-target="#pizza" type="button" role="tab" aria-controls="pizza" aria-selected="false">Pizza</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-btn" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Children Menu</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/wa6.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>English Breakfast Small</strong>
                                        <p>1 bacon, 1 sausage, 1 egg, 1 toast, tomato and beans</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>5,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/vegan-toast.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Vegan Toast</strong>
                                        <p>Tomato, avocado</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>4,00 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/tomato.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Tomato Toast</strong>
                                        <p>Toast with Tomato</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>1,90 €</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img loading="lazy" decoding="async" src="assets/img/dish-2.png" alt="food">
                                    </div>
                                    <div class="img-offer-wrap menu-offer">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                    <div class="cap-down mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/jam-toast.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Butter and Jam Toast</strong>
                                        <p>Toast with butter and jam
                                            +Jam or butter extra 0,50€
                                            </span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>1,90 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/olive.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Tostada De Aceite </strong>
                                        <p>Toasted bread with olive oil</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>1,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/natural.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Natural Breakfast</strong>
                                        <p>Muesli, Yogurt, Fruta, Tosta</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>8,95 €</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/chick-breast.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Pechuga De Pllo</strong>
                                        <p>Chicken Breast</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong> 9,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/banner-3.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Escalope De Pollo</strong>
                                        <p>Chicken Escalope</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>10,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/wa7.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Lomo De Cerdo Con Patatas Y Ensalada</strong>
                                        <p>Pork Loin With Potatoes And Salad</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>12,00€</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img loading="lazy" decoding="async" src="assets/img/menu-se(2).png" alt="food">
                                    </div>
                                    <div class="img-offer-wrap menu-offer">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                    <div class="cap-down mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/ribeye.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Entrecotte</strong>
                                        <p>Ribeye Steak</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>19,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/banner-1.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Costilla Barbacoa</strong>
                                        <p>Barbecue Ribs</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>17,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/lamb.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Chuleta Cordero</strong>
                                        <p>Lamb Chop</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>19,95€</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="salads" role="tabpanel" aria-labelledby="salads-tab">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/salad.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Ensalada mixta</strong>
                                        <p>Lechuga, tomate, cebolla pepino, aceitunas y mozzarella</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>6,95 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/ceaser.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Ensalada César 10,95€</strong>
                                        <p>Lettuce, chicken, cherry tomato, croutons, crispy onion and Caesar sauce</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>10,95 €</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img loading="lazy" decoding="async" src="assets/img/menu-se(1).png" alt="food">
                                    </div>
                                    <div class="img-offer-wrap menu-offer">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                    <div class="cap-down mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/toamto-salad.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Ensalada Caprese</strong>
                                        <p>Tomato, mozzarella cheese and oregano</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>7,95 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/prawn.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Ensalada gambas</strong>
                                        <p>Lettuce, tomato, onion, avocado, shrimp and pink sauce</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>10,95 €</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pasta" role="tabpanel" aria-labelledby="pasta-tab">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/bolognesa.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>SPAGUETTI BOLOGNESA</strong>
                                        <p>Spaghetti or macaroni Bolognese</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>8,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/carbonara.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>SPAGUETTI CARBONARA</strong>
                                        <p>Spaghetti or macaroni carbonara</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>9,95€</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img loading="lazy" decoding="async" src="assets/img/dish-2.png" alt="food">
                                    </div>
                                    <div class="img-offer-wrap menu-offer">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                    <div class="cap-down mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/lasagna.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>LASAÑA BOLOÑESA </strong>
                                        <p>Lasagna Bolognese</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>10,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/lasagna-veg.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>LASAÑA VEGETAL </strong>
                                        <p>Vegetable Lasagna</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>9,90€</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/margarita.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Margarita </strong>
                                        <p>Tomato, cheese, oregano</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>7,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/tuna-pizza.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Atun/Tuna </strong>
                                        <p>Tomato, cheese, tuna & onion</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>8,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/pineapple-pizza.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Hawai</strong>
                                        <p>Tomato, cheese, ham & pineapple</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>8,95€</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img loading="lazy" decoding="async" src="assets/img/menu-se(3).png" alt="food">
                                    </div>
                                    <div class="img-offer-wrap menu-offer">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                    <div class="cap-down mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/ham-pizza.png" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Caprichosa</strong>
                                        <p>Tomato, cheese, ham & mushrooms</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>9,95€</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/veg-pizza.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Vegetariana</strong>
                                        <p>Fresh mix vegetable</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>8,50€</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="menu-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/bolognesa.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Espaghetti Bolognese </strong>
                                        <p>Spaghetti Bolognese
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>5,00 €</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/min-burger.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Hamburguesa pequeña con patatas fritas</strong>
                                        <p>Mini hamburger with chips
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>6,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="food-offer-wrap">
                                    <div class="food-bg-cap mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                    <div class="food-menu-offer-img">
                                        <img loading="lazy" decoding="async" src="assets/img/menu(2).png" alt="food">
                                    </div>
                                    <div class="img-offer-wrap menu-offer">
                                        <img src="assets/img/offer-banner.png" alt="food">
                                        <span>Call Us Now</span>
                                    </div>
                                    <div class="cap-down mouse_move">
                                        <img loading="lazy" decoding="async" class="mouse" value="0.9" src="assets/img/capcicum.png" alt="food">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="menu-list">
                                    <img loading="lazy" decoding="async" src="assets/Photos/nuggets.jpg" alt="food">
                                    <div class="menu-list-details">
                                        <strong>Chicken nuggets with french fries</strong>
                                        <p>Nuggets de pollo con patatas fritas</span>
                                            <!-- <button onclick="myFunction(this)" class="myBtn">Read more</button> -->
                                        </p>
                                        <div class="food-review">
                                            <!-- <span><i class="fa-solid fa-star"></i> 4K Reviews </span> -->
                                            <strong>5,50 €</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-5 two-btn">
                <a href="order2.php" class="default-btn"> Order Online<span></span><i class="fa-solid fa-arrow-right-long"></i></a>
                <a href="menu.php" class="yellow_btn mx-4"> View Our Menu <span></span><i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>
    <!-- ==================food menu ======================== -->

    <!-- ====================book a table html starts--------------------- -->
    <section class="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <span class="small-heading">Reservations</span>
                    <h2 class="web-tittle text-white">Book Your Table Now !</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet doloremque magni pariatur veniam</p> -->
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="form-box-wrap">
                        <form class="cnct-form" id="contactForm" action="book-table.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-4 col-sm-6">
                                    <div class="input-group">
                                        <input type="text" id="name" name="name" class="form-control border-2" required placeholder="Name" aria-label="Name" aria-describedby="nameError" style="height: 40px;">
                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <small id="nameError" class="form-text text-danger"></small>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="input-group">
                                        <input type="email" id="email" name="email" class="form-control border-2" required placeholder="Email Address" aria-label="Email Address" style="height: 40px;">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="input-group flatpickr">
                                        <input type="text" id="time" name="time" class="form-control border-2 time-input" required placeholder="Time" style="height: 40px;" data-input>
                                        <a class="input-button" title="toggle" data-toggle>
                                            <i class="fa-regular fa-clock"></i>
                                        </a>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-6">
                                    <div class="input-group">
                                        <input type="tel" id="phone" name="phone" pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control border-2" required placeholder="Mobile No." aria-label="Mobile No." style="height: 40px;">
                                        <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="input-group flatpickr">
                                        <input type="text" id="date" name="date" class="form-control border-2" required placeholder="Date" style="height: 40px;" data-input>
                                        <a class="input-button" title="toggle" data-toggle>
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="input-group custom-select">
                                        <input type="number" id="number-guest" min="1" max="50" name="number_guest" class="form-control border-2" required placeholder="Number of Guests" aria-label="Numbe of Guests" style="height: 40px;">
                                        <!-- <span class="input-group-text"><i class="fa-solid fa-angle-down"></i></span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="text-left pt-3">
                                <button class="default-btn">Book Now <span></span><i class="fa-solid fa-arrow-right-long"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================book a table html starts--------------------- -->

    <!-- ===========testimonial html starts--------------------- -->
    <section class="guest-review">
        <div class="mouse_move objects">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-2.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-3.png" alt="food fly">
            <img loading="lazy" decoding="async" class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="food-review-wrap">
                        <span class="small-heading">testimonials</span>
                        <h3 class="web-tittle">Some Words From Our Loyal Guests</h3>
                        <div class="owl-carousel owl-theme banner-review-carousel">
                            <div class="item">
                                <div class="review-box-wrap">
                                    <div class="quotation">
                                        <img loading="lazy" decoding="async" src="assets/img/Qq.png" alt="qoute">
                                    </div>
                                    <div class="user-profile">
                                        <div class="user-name">
                                            <strong> ros anchors</strong>
                                        </div>
                                    </div>
                                    <p>A great location with very reasonably priced drinks, live music and tasty bites . The barbecue looks fantastic. We hope Subas and his super friendly team do well. Definitely worth a visit.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-box-wrap">
                                    <div class="quotation">
                                        <img loading="lazy" decoding="async" src="assets/img/Qq.png" alt="qoute">
                                    </div>
                                    <div class="user-profile">
                                        <div class="user-name">
                                            <strong> Alison Reeve</strong>
                                        </div>
                                    </div>
                                    <p>Great place for a full English, lovely staff too! Highly recommended
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-box-wrap">
                                    <div class="quotation">
                                        <img loading="lazy" decoding="async" src="assets/img/Qq.png" alt="qoute">
                                    </div>
                                    <div class="user-profile">
                                        <div class="user-name">
                                            <strong> Maria josefa Perez</strong>
                                        </div>
                                    </div>
                                    <p>Quiet and spacious place. The food was excellent, I liked the momos and their spiciness, the perfect menu, a lot of food, the delicious homemade desserts. Very good treatment, I recommend it.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review-box-wrap">
                                    <div class="quotation">
                                        <img loading="lazy" decoding="async" src="assets/img/Qq.png" alt="qoute">
                                    </div>
                                    <div class="user-profile">
                                        <div class="user-name">
                                            <strong>Andrea Cortes</strong>
                                        </div>
                                    </div>
                                    <p>Place to have a good time. Good prices and excellent service. Live music.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="social-platform">
                            <a href="https://maps.app.goo.gl/Qxv4vPFTU7Gq9g77A" target="_blank">
                                <img loading="lazy" decoding="async" src="assets/img/google-review-logo.png" alt="google">

                            </a>
                            <a href="https://www.tripadvisor.com/Restaurant_Review-g1064230-d27493514-Reviews-The_Momos_Cafe_Bar-Alicante_Costa_Blanca_Province_of_Alicante_Valencian_Communi.html?m=19905" target="_blank">
                                <img loading="lazy" decoding="async" src="assets/img/trip.png" alt="tripadvisor">

                            </a>
                            <a href="" target="_blank">
                                <img loading="lazy" decoding="async" src="assets/img/yelp-review-logo.png" alt="yelp">

                            </a>
                            <a href="https://www.facebook.com/themomscafebar/reviews" target="_blank">
                                <img loading="lazy" decoding="async" src="assets/img/facebook-review-logo.png" alt="facebook">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="circle-animated-box">
                        <div class="move-mouse mouse_move" id="main">
                            <img loading="lazy" decoding="async" class="mouse" value="1.5" src="assets/img/capcicum.png" alt="food" id="bg-1" data-depth="30">
                            <img loading="lazy" decoding="async" class="mouse" value="0.8" src="assets/img/cherry-tomato.png" alt="food" id="bg-2" data-depth="40">
                            <img loading="lazy" decoding="async" class="mouse" value="1.5" src="assets/img/leaf-3.png" alt="food" id="bg-3" data-depth="20">
                            <img loading="lazy" decoding="async" class="mouse" value="1.5" src="assets/img/capcicum.png" alt="food" id="bg-4" data-depth="25">
                        </div>

                        <div class="main-container-md">
                            <div class="main">
                                <!-- <div class="big-circle">
              </div>
              <div class="circle">
              </div> -->
                                <div class="center-logo">
                                    <img href="index.php" src="assets/img/chicken-grill.png" alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========testimonial html starts--------------------- -->

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>
    <script>
        const navItems = document.querySelectorAll('.header-menu-wrap ul li > a ');
        if (navItems.length >= 1) {
            navItems[0].classList.add("active");
        }
    </script>
</body>

</html>