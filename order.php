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
                                                <a href="#orderSectionBreakfast" class="page-scroll">
                                                    Breakfast <span class="order-side-list-num">(22)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionChildrenmenu" class="page-scroll">
                                                    Children Menu <span class="order-side-list-num">(14)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionSoupsnacks" class="page-scroll">
                                                    Soup & Snacks <span class="order-side-list-num">(7)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionSalads" class="page-scroll">
                                                    Salads <span class="order-side-list-num">(32)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionNaanPastas" class="page-scroll">
                                                    Pastas <span class="order-side-list-num">(9)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionPizzas" class="page-scroll">
                                                    Pizzas <span class="order-side-list-num">(15)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#orderSectionMeat" class="page-scroll">
                                                    Meat <span class="order-side-list-num">(6)</span>
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
                                                    <option value="#orderSectionBreakfast" class="page-scroll">
                                                        Breakfast <span class="order-side-list-num">(22)</span>
                                                        </a>
                                                    <option value="#orderSectionChildrenmenu" class="page-scroll">
                                                        Children Menu <span class="order-side-list-num">(14)</span>
                                                        </a>
                                                    <option value="#orderSectionSoupsnacks" class="page-scroll">
                                                        Soup & Snacks <span class="order-side-list-num">(7)</span>
                                                        </a>
                                                    <option value="#orderSectionSalads" class="page-scroll">
                                                        Salads <span class="order-side-list-num">(32)</span>
                                                        </a>
                                                    <option value="#orderSectionNaanPastas" class="page-scroll">
                                                        Pastas <span class="order-side-list-num">(9)</span>
                                                        </a>
                                                    <option value="#orderSectionPizzas" class="page-scroll">
                                                        Pizzas <span class="order-side-list-num">(15)</span>
                                                        </a>
                                                    <option value="#orderSectionMeat" class="page-scroll">
                                                        Meat <span class="order-side-list-num">(6)</span>
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
                                            <section class="order-section" id="orderSectionBreakfast">
                                                <h4 class="order-section-title">Breakfast</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title"> Breakfast </h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Café, zumo de naranja, 1 tostada con tomate,
                                                                    aceite o mantequilla, mermelada
                                                                    Coffee, Orange Juice, 1 Toast, Tomato, olive
                                                                    oil or Butter and Jam</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">4,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">English Breakfast Small</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">1 bacon, 1 sausage, 1 egg, 1 toast, tomato and beans</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">English Breakfast Big</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">2 beicon, 1 salchicha, 2 huevos, 2 tosta- das,
                                                                    tomate y judías ** Después de las 14: 00hrs el
                                                                    precio será de 6,50 € ** 2 bacons, 1sasuage,
                                                                    2 eggs 2 toasts, tomato and beans **
                                                                    After 14:00hrs price will be 6,50€ **</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">8,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Desayuno - Natural</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Muesli, Yogurt, Fruta, Tosta, cafe y 2 umo de naranja</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">8,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tostada - Toast</h4>
                                                                <p class="order-item-box-para">Pan tostada con tomate o mantequilla y mermelada
                                                                    **Mermelada ó mantequilla extra 0,50€**
                                                                    Toast with tomato or butter and jam
                                                                    ** Jam or butter extra 0,50€ **</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">1,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Toast Vesana </h4>
                                                                <p class="order-item-box-para">Tomate y asoccate</p>
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
                                                                <h4 class="order-item-box-title">Tostada jamón serranoy tomate</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Toast serrano ham and tomato</p>
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
                                                                <h4 class="order-item-box-title">Tostada atún y tomate</h4>
                                                                <p class="order-item-box-para">Toast tuna and tomato</p>
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
                                                                <h4 class="order-item-box-title">Tostada jamón yorky queso</h4>
                                                                <p class="order-item-box-para">Toast york ham and cheese</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">3,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tostada jamón serrano y queso</h4>
                                                                <p class="order-item-box-para">Toast serrano ham and cheese</p>
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
                                                                <h4 class="order-item-box-title">Pan con Allioli (Ración)</h4>
                                                                <p class="order-item-box-para">Bread with Allioli (Portion)</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">1,90​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionChildrenmenu">
                                                <h4 class="order-section-title">Children Menu</h4>
                                                <!-- <h5 class="order-section-subtitle">Veg Menu</h5> -->
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Espaghetti Bolognese</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Spaghetti Bolognese</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,00 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Chicken nuggets with french fries</h4>
                                                                <p class="order-item-box-para">Nuggets de pollo con patatas fritas</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Hamburguesa pequeña con patatas fritas</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Mini hamburger with chips</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">6,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionSoupSnacks">
                                                <h4 class="order-section-title">Soup & Snacks</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Sopa de tomate</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Tomato Soup</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Calamares fritos</h4>
                                                                <p class="order-item-box-para">Calamares fritos</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Sopa de pollo</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Chicken soup</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Patata fritas</h4>
                                                                <p class="order-item-box-para">Patata fritas</p>
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
                                                                <h4 class="order-item-box-title">Gambas al ajillo</h4>
                                                                <p class="order-item-box-para">Garlic prawns</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">8,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Patatas fritas,
                                                                    beicon y queso</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">French fries, bacon & cheese</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Patatas bravas</h4>
                                                                <p class="order-item-box-para">Potato wedges</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Alitas de pollo</h4>
                                                                <p class="order-item-box-para">Chicken Wings</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,95​ €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Nuggets de pollo</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/sesame.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/mustard.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Chicken nuggets</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">5,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionSalads">
                                                <h4 class="order-section-title">Salads</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Ensalada mixta</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Lechuga, tomate, cebolla pepino, aceitunas y mozzarella
                                                                    Lettuce, tomato, onion, cucumber, mozzarella and olives</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">6,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Ensalada Cesar</h4>
                                                                <p class="order-item-box-para">Techusa Tomate Chery, cebolle crujiente & edsa cesareese y pollo</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">10,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Coctail de gambas</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Prawn cocktail</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">10,50 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Melon con jamón</h4>
                                                                <p class="order-item-box-para">Melon with ham</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Tomate mozzarella</h4>
                                                                <p class="order-item-box-para">Slices of fresh tomato, mozzarella and basil Rodajas
                                                                    de tomate fresco, mozzarella y albahaca</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">7,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionNaanPastas">
                                                <h4 class="order-section-title">Pastas</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Espaguetti Pasta bolognese</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Spagh gnese</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">8,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Espaguetti Pasta carbonara</h4>
                                                                <p class="order-item-box-para">Spaghetti carbonara Crea with bacon</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Pasta Momo</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Spaghetti pollo, cevolla, pimientos Salsa agridutse y picante</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">10,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Lasaña Bdonesa</h4>
                                                                <p class="order-item-box-para">Lasagne</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Lasaña Vegetariana</h4>
                                                                <p class="order-item-box-para">Verdure</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,90 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionPizzas">
                                                <h4 class="order-section-title">Pizzas</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">MARGARITA</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Tomate, queso, orégano
                                                                    Tomato, cheese, oregano</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">7,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">ATUN/TUNA</h4>
                                                                <p class="order-item-box-para">Tomate, queso, atún y cebolla Tomato, cheese, tuna & onion</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">HAWAI</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Tomate, queso, jamón y piña Tomato, cheese, ham & pineapple</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">8,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">CAPRICHOSA</h4>
                                                                <p class="order-item-box-para">Tomate, queso, jamón y champiñones Tomato,
                                                                    cheese, ham & mushrooms</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">VEGETARIANA</h4>
                                                                <p class="order-item-box-para">Verduras frescas variadas Fresh mix vegetable</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">8,50 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Pizza Mascarpone</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Tomate, queso, atun, Beicon, jamon serrano Tomato, cheese, tuna, bacon, serrano ham</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">10,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="order-section" id="orderSectionMeat">
                                                <h4 class="order-section-title">Meat</h4>
                                                <div class="order-item-wrap">
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Pechuga de pollo plancha</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/celery.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/eggs.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Grilled chicken breast
                                                                    Grillet kyllingbryst</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">9,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Pechuga empanada</h4>
                                                                <p class="order-item-box-para">Breaded chicken breast
                                                                    Breaded kyllingbryst</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">10,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Solomillo de cerdo</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/fish.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/lupins.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Pork llet
                                                                    Svinekjøttlé</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">14,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Costilla BBQ</h4>
                                                                <p class="order-item-box-para">BBQ spare ribs</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">16,95 ​€</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Lomo de cerdo</h4>
                                                                <p class="order-item-box-para">Pork, egg and potatoes
                                                                    Svinekjott med potets og egg</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">10,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">Stconverguarnicion Patatas</h4>
                                                                <div class="order-item-box-icons">
                                                                    <span><img src="images/menu-icons/gluten.png" alt=""></span>
                                                                    <span><img src="images/menu-icons/shellfish.png" alt=""></span>
                                                                </div>
                                                                <p class="order-item-box-para">Verduras</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">19,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">CHULETAS DE CORDERO</h4>
                                                                <p class="order-item-box-para">Lamb chops/Lammekoteletter</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">18,95 €</span>
                                                                <button class="order-item-box-btn">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-item">
                                                        <div class="order-item-box">
                                                            <div class="order-item-box-cont">
                                                                <h4 class="order-item-box-title">SOLOMILLO DE TERNERA</h4>
                                                                <p class="order-item-box-para">Beef tenderloin / okse indrelet</p>
                                                            </div>
                                                            <div class="order-item-box-pricing">
                                                                <span class="order-item-box-price">19,95​ €</span>
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
                                    <!-- <a class="mt-5" href="checkout.php">Checkout Page Link <small>(for test purposes only)</small></a> -->
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