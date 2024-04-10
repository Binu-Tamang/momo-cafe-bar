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

    <!-- <div class="mouse_move objects">
            <img class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img class="mouse" value="1.8" src="assets/img/ob-2.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img class="mouse" value="1.8" src="assets/img/ob-3.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img class="mouse" value="1.8" src="assets/img/ob-1.png" alt="food fly" style="transform: translateX(-0.202222px) translateY(1.56222px);">
            <img loading="lazy" class="mouse" value="0.8" src="assets/img/cherry-tomato.png" alt="food" id="bg-2" data-depth="40" style="transform: translateX(10.9378px) translateY(-25.2067px);">
            <img loading="lazy" class="mouse" value="1.5" src="assets/img/leaf-3.png" alt="food" id="bg-3" data-depth="20" style="transform: translateX(15.0778px) translateY(-50.4778px); right:10%;">
            <img class="mouse" value="1.8" src="assets/img/mint.png" alt="food" style="transform: translateX(0.877778px) translateY(-4.07778px); left:10%; bottom:20%;">
            <img loading="lazy" class="mouse" value="0.8" src="assets/img/cherry-tomato.png" alt="food" id="bg-2" data-depth="40" style="transform: translateX(10.9378px) translateY(-25.2067px); bottom:15%; right:10%; rotate:190deg;">
        </div> -->
    <div class="sitewrapper">
        <!-- banner and headre page  -->
        <?php $page_title = 'Food Order ' ?>
        <?php $page_name = 'Food Order' ?>
        <?php include('inc/breadcrumb.php') ?>
        <!-- banner and header page -->

        <div class="sitecontent">

            <section class="section section-order">
                <div class="container">
                    <div class="section-inner">
                        <div class="order">
                            <div class="order-row row">
                                <div class="col-lg-3 col-md-4 dis-sm">
                                    <div class="order-side order-list-sticky" id="orderCategories">
                                        <h3 class="order-side-title">Categories</h3>
                                        <ul class="order-side-list">
                                            <li>
                                                <a href="#orderSectionAppetizer" class="page-scroll">
                                                    Appetizer <span class="order-side-list-num">(22)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionStarters" class="page-scroll">
                                                    Starters <span class="order-side-list-num">(14)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionGrill" class="page-scroll">
                                                    Grill <span class="order-side-list-num">(7)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionDish" class="page-scroll">
                                                    Dish <span class="order-side-list-num">(32)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionNaanBreads" class="page-scroll">
                                                    Naan Breads <span class="order-side-list-num">(9)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionChildrensMenu" class="page-scroll">
                                                    Children's Menu <span class="order-side-list-num">(15)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionDesserts" class="page-scroll">
                                                    Desserts <span class="order-side-list-num">(6)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="order-main">
                                        <div class="order-header">
                                            <div class="container">
                                                <select class="order-side-list-select app-sm" id="orderselectCat">
                                                    <option value="#orderSectionAppetizer" class="page-scroll">
                                                        Appetizer <span class="order-side-list-num">(22)</span>
                                                        </a>
                                                    <option value="#orderSectionStarters" class="page-scroll">
                                                        Starters <span class="order-side-list-num">(14)</span>
                                                        </a>
                                                    <option value="#orderSectionGrill" class="page-scroll">
                                                        Grill <span class="order-side-list-num">(7)</span>
                                                        </a>
                                                    <option value="#orderSectionDish" class="page-scroll">
                                                        Dish <span class="order-side-list-num">(32)</span>
                                                        </a>
                                                    <option value="#orderSectionNaanBreads" class="page-scroll">
                                                        Naan Breads <span class="order-side-list-num">(9)</span>
                                                        </a>
                                                    <option value="#orderSectionChildrensMenu" class="page-scroll">
                                                        Children's Menu <span class="order-side-list-num">(15)</span>
                                                        </a>
                                                    <option value="#orderSectionDesserts" class="page-scroll">
                                                        Desserts <span class="order-side-list-num">(6)</span>
                                                        </a>
                                                </select>
                                                <div class="order-search">
                                                    <div class="order-search-field">
                                                        <span class="order-search-icon icon-magnifier">
                                                            <img src="images/icons/magnifying-glass.svg" alt="">
                                                        </span>
                                                        <input type="text" placeholder="Search within menu">
                                                        <span class="order-search-icon icon-close">
                                                            <img src="images/icons/cancel.svg" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-body">
                                            <section class="order-section" id="orderSectionAppetizer">
                                                <h4 class="order-section-title">Appetizer</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionStarters">
                                                <h4 class="order-section-title">Starters</h4>
                                                <h5 class="order-section-subtitle">Vegetable Starters</h5>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="order-section-subtitle">Non Veg Starters</h5>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionGrill">
                                                <h4 class="order-section-title">Grill</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionDish">
                                                <h4 class="order-section-title">Dish</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionNaanBreads">
                                                <h4 class="order-section-title">NaanBreads</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionChildrensMenu">
                                                <h4 class="order-section-title">Children's Menu</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionDesserts">
                                                <h4 class="order-section-title">Desserts</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Papadom</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Fried plain crispy
                                                                    lentils wafer.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Masala papadom (order:
                                                                    Mild, Medium or Hot)</h4>
                                                                <p class="order-item-box-para">Topped with onion,
                                                                    tomato, cucumber and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomato Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    tomato, fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Daal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with lentil,
                                                                    fresh cream and spices</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Vegetable Soup</h4>
                                                                <p class="order-item-box-para">Prepared with seasonal
                                                                    vegetables and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken Soup</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with chicken,
                                                                    fresh cream and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nepali Herbal Soup</h4>
                                                                <p class="order-item-box-para">Prepared with fresh
                                                                    ginger, tomato, special herbs and spices.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">House Mixed Salad</h4>
                                                                <p class="order-item-box-para">Prepared with iceberg
                                                                    salad, tomato, onion, carrot, cucumber, lemon,
                                                                    olives and orange.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,25​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Mix Raita</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prepared with yoghurt,
                                                                    cucumber, tomato, onion and fresh coriander.</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">2,80 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="order-cart-fixed app-md">
                                        <span class="order-cart-fixed-total">(3 items) 27,00 €</span>
                                        <button class="order-cart-toggle order-cart-fixed-toggle">View Basket</button>
                                    </div>
                                    <a class="mt-5" href="checkout.php">Checkout Page Link <small>(for test purposes only)</small></a>
                                    <div class="order-cart order-cart-sticky">
                                        <div class="order-cart-exit order-cart-toggle app-md">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="order-cart-inner">
                                            <h3 class="order-cart-title">Your Cart</h3>
                                            <div class="order-type">
                                                <div class="order-type-title">
                                                    <h4>Food For:</h4>
                                                </div>
                                                <div class="order-type-field">
                                                    <input id="orderTypeDelivery" name="order-type" type="radio" value="Delivery" checked>
                                                    <label for="orderTypeDelivery">Delivery</label>
                                                </div>
                                                <div class="order-type-field">
                                                    <input id="orderTypePickup" name="order-type" type="radio" value="Pickup">
                                                    <label for="orderTypePickup">Pickup</label>
                                                </div>
                                            </div>
                                            <table class="order-cart-table">
                                                <!-- <thead>
                                                <tr>
                                                    <th colspan="3">
                                                        <span class="order-cart-subtotal">3,000.00</span>
                                                        <span class="order-cart-totalnum">(3 items)</span>
                                                    </th>
                                                </tr>
                                            </thead> -->
                                                <tbody>
                                                    <tr class="order-cart-item">
                                                        <td class="order-cart-item-cell order-cart-item-quantity">
                                                            <span class="order-cart-item-num">2</span>
                                                            <div class="order-cart-item-num-toggle">
                                                                <span class="order-cart-item-num-toggler order-cart-item-num-minus">
                                                                    <i class="fa fa-minus"></i>
                                                                </span>
                                                                <span class="order-cart-item-num-toggler order-cart-item-num-plus">
                                                                    <i class="fa fa-plus"></i>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="order-cart-item-cell order-cart-item-cont">
                                                            <span class="order-cart-item-name">Masala papadom (order:
                                                                Mild,
                                                                Medium or Hot)</span>
                                                            <p class="order-cart-item-desc">Need it in hot, but less
                                                                spicier.</p>
                                                        </td>
                                                        <td class="order-cart-item-cell order-cart-item-value">
                                                            <span class="order-cart-item-price">9,50​ €</span>
                                                            <div class="order-cart-item-remove">
                                                                <span class="order-cart-item-remove-toggler fa fa-times"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-cart-item">
                                                        <td class="order-cart-item-cell order-cart-item-quantity">
                                                            <span class="order-cart-item-num">1</span>
                                                            <div class="order-cart-item-num-toggle">
                                                                <span class="order-cart-item-num-toggler order-cart-item-num-minus">
                                                                    <i class="fa fa-minus"></i>
                                                                </span>
                                                                <span class="order-cart-item-num-toggler order-cart-item-num-plus">
                                                                    <i class="fa fa-plus"></i>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="order-cart-item-cell order-cart-item-cont">
                                                            <span class="order-cart-item-name">Tomato Soup</span>
                                                            <p class="order-cart-item-desc">Prepared with fresh tomato,
                                                                fresh cream and spices.</p>
                                                        </td>
                                                        <td class="order-cart-item-cell order-cart-item-value">
                                                            <span class="order-cart-item-price">3,50 ​€</span>
                                                            <div class="order-cart-item-remove">
                                                                <span class="order-cart-item-remove-toggler fa fa-times"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-cart-item">
                                                        <td class="order-cart-item-cell order-cart-item-quantity">
                                                            <span class="order-cart-item-num">3</span>
                                                            <div class="order-cart-item-num-toggle">
                                                                <span class="order-cart-item-num-toggler order-cart-item-num-minus">
                                                                    <i class="fa fa-minus"></i>
                                                                </span>
                                                                <span class="order-cart-item-num-toggler order-cart-item-num-plus">
                                                                    <i class="fa fa-plus"></i>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="order-cart-item-cell order-cart-item-cont">
                                                            <span class="order-cart-item-name">Nepali Herbal Soup</span>
                                                            <p class="order-cart-item-desc">Prepared with fresh ginger,
                                                                tomato, special herbs and spices.</p>
                                                        </td>
                                                        <td class="order-cart-item-cell order-cart-item-value">
                                                            <span class="order-cart-item-price">4,00 €</span>
                                                            <div class="order-cart-item-remove">
                                                                <span class="order-cart-item-remove-toggler fa fa-times"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="order-cart-summary">
                                                <ul class="order-cart-summary-list">
                                                    <li>
                                                        <div class="order-cart-summary-list-name"><span>Sub Total</span>
                                                        </div>
                                                        <div class="order-cart-summary-list-amt"><span>17,00 €</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="order-cart-summary-list-name"><span>Service
                                                                Charge</span></div>
                                                        <div class="order-cart-summary-list-amt"><span>0,00 €</span>
                                                        </div>
                                                    </li>
                                                    <li class="order-cart-summary-delivery">
                                                        <div class="order-cart-summary-list-name"><span>Delivery
                                                                Charge</span></div>
                                                        <div class="order-cart-summary-list-amt"><span>10,00 €</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="order-cart-summary-list-name"><span>Grand
                                                                Total</span>
                                                        </div>
                                                        <div class="order-cart-summary-list-amt"><span>27,00 €</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div>
                                                    <button class="order-cart-summary-btn">Proceed to Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <!-- <div class="modal fade order-modal" id="orderModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="modal-title" class="modal-title">Papadom</h3>
                    <div class="modal-icons">
                        <span><img src="images/menu-icons/eggs.png" alt=""></span>
                        <span><img src="images/menu-icons/fish.png" alt=""></span>
                    </div>
                    <span class="modal-price">9,50 €</span>
                    <p class="modal-desc">Fried plain crispy lentils wafer.</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-instructions">
                        <label for="modalInstructions" class="modal-label">Special Instructions</label>
                        <textarea name="orderInstructions" id="modalInstructions" placeholder="Add Notes"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="modal-btn-remove">Remove</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="order-modal-quantity">
                                        <span class="order-modal-quantity-toggle order-modal-quantity-minus">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                        <input class="order-modal-quantity-field" type="number" name="orderQuantity"
                                            value="1" disabled>
                                        <span class="order-modal-quantity-toggle order-modal-quantity-plus">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="order-modal-add-to-cart">
                                <span class="order-modal-add-to-cart-text">Update Bag</span>
                                <span class="order-modal-add-to-cart-price">9,50 €</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>
</body>

</html>