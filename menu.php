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
    <?php $page_title = 'Our Menu ' ?>
    <?php $page_name = 'Our Menu' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <section class="main-menu">
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
            <div class="coming-soon text-center">
                <h1 class="web-tittle">Menu Coming Soon !!</h1>
                <div class="separator"><span></span></div>
                <strong>Something Awesome Is In The Works.</strong>
            </div>
        </div>
        <!-- <div class="container">
            <div class="owl-carousel owl-theme food-menu-slider sticky">
                <div class="item food-list-menu">
                    <a href="#food1">BREAKFAST</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food2">TOAST</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food3">CROISSANT</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food4">GOFRES</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food5">SALADS</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food6">PIZZAS</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food7">PASTA</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food8">CARNES</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food9">PESCADOS</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food10">SOUP & SNACKS</a>

                </div>
                <div class="item food-list-menu">
                    <a href="#food11">CHILDREN MENU</a>
                </div>
                <div class="item food-list-menu">
                    <a href="#food12">BOCATAS</a>
                </div>
                <div class="item food-list-menu">
                    <a href="#food13">POSTRES</a>
                </div>
            </div>

            <div class="menu-details" id="food1">
                <h2 class="web-tittle text-center">Breakfast</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">€22</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-details pt-5" id="food2">
                <h2 class="web-tittle text-center">Toast</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-details pt-5" id="food3">
                <h2 class="web-tittle text-center">Croissant</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>

                        <div class="menu-list-details main-menu-line">
                            <div class="food-describe">
                                <strong>Desayuno</strong>
                                <p>Spinach cooked with homemade cottage with house special sauce <span class="dots">...</span><span class="more" style="display: none;">erisque
                                        enim ligula venenatis dolor.</span>
                                    <button onclick="myFunction(this)" class="myBtn">Read more</button>
                                </p>
                            </div>
                            <div class="food-review">
                                <span class="item-price">22,2€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>
    <script>
        const navItems = document.querySelectorAll('.header-menu-wrap ul li > a ');
        if (navItems.length >= 3) {
            navItems[2].classList.add("active");
        }
    </script>
</body>

</html>