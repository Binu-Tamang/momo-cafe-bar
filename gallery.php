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
    <?php $page_title = 'Our Gallery ' ?>
    <?php $page_name = 'Our Gallery' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->
    <section class="main-gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 tm-page-cols-container">
                    <div class="tm-page-col-left">
                        <ul class="tabs clearfix filters-button-group">
                            <li>
                                <a href="#" class="active" data-filter="*">
                                    <div class="tm-tab-icon"></div>
                                    All Category
                                </a>
                            </li>
                            <li>
                                <a href="#" class="" data-filter=".category-1">
                                    <div class="tm-tab-icon"></div>
                                    Food Category
                                </a>
                            </li>
                            <li>
                                <a href="#" class="" data-filter=".category-2">
                                    <div class="tm-tab-icon"></div>
                                    Ambiance
                                </a>
                            </li>
                            <li>
                                <a href="#" class="" data-filter=".category-3">
                                    <div class="tm-tab-icon"></div>
                                    Events and Occasions
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#" class="" data-filter=".category-4">
                                    <div class="tm-tab-icon"></div>
                                    Cuisine Types
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="#" class="" data-filter=".category-5">
                                    <div class="tm-tab-icon"></div>
                                    Staff and Customers
                                </a>
                            </li> -->
                        </ul>
                    </div>

                    <div class="tm-page-col-right">
                        <div class="tm-gallery" id="tmGallery">
                            <div class="tm-gallery-item col-lg-4 col-md-6 category-3">
                                <a href="assets/img/event-1.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/img/event-1.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Coming <span>Event</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/banner-1.jpg" data-lightbox="pop-images" title="pop images">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/banner-1.jpg" alt="Gallery item" class="img-fluid" />

                                        <figcaption>
                                            <h2>French <span>Fries</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/banner-3.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/banner-3.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/wa12.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa12.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-2">
                                <a href="assets/Photos/wa9.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa9.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Outdoor <span>Seating</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/wa3.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa3.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/wa4.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa4.jpg" alt="Food Bubba" class="img-fluid">
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/wa5.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa5.jpg" alt="Food Bubba" class="img-fluid">
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/wa6.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa6.jpg" alt="Food" class="img-fluid">
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-3">
                                <a href="assets/img/event-2.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/img/event-2.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Coming <span>Event</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/wa7.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa7.jpg" alt="Food Bubba" class="img-fluid">
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-1">
                                <a href="assets/Photos/banner-2.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/banner-2.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Food <span>Categories</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-2">
                                <a href="assets/Photos/wa13.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa13.jpg" alt="Outdoor Area" class="img-fluid">
                                        <figcaption>
                                            <h2>OutDoor <span>Area</span></h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-2">
                                <a href="assets/Photos/wa9.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/Photos/wa9.jpg" alt="OutDoor Seating" class="img-fluid">
                                        <figcaption>
                                            <h2>OutDoor <span>Seating</span></h2>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-3">
                                <a href="assets/img/event-3.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/img/event-3.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Coming <span>Event</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <div class="tm-gallery-item col-lg-4 col-md-6 category-3">
                                <a href="assets/img/event-4.jpg">
                                    <figure class="effect-bubba">
                                        <img src="assets/img/event-4.jpg" alt="Gallery item" class="img-fluid" />
                                        <figcaption>
                                            <h2>Coming <span>Event</span></h2>
                                            <!-- <p>Bubba likes to appear out of thin air.</p> -->
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
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
    <script>
        const navItems = document.querySelectorAll('.header-menu-wrap ul li > a ');
        if (navItems.length >= 4) {
            navItems[3].classList.add("active");
        }
    </script>
</body>

</html>