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
    <?php $page_title = 'Our Events ' ?>
    <?php $page_name = 'Our Events' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <section class="main-events">
        <div class="container">
            <!-- <span class="small-heading text-center">Our Events</span>
            <h1 class="web-tittle text-center">Upcoming Events</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptatibus architecto deserunt tenetur minus enim aperiam ipsam</p> -->
            <div class="events-box">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="events-img">
                            <img src="assets/img/event-2.jpg" alt="eventa">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="events-details">
                            <strong>Moraira And David Bellingham</strong>
                            <p>Another live entertainment on Friday and Saturday with FOOD, DRINKS, COCKTAILS AND BBQ PARTY please book your place in advance</p>
                            <a href="#"> <i class="fa-solid fa-location-dot"></i> C. Saida, 2 Teulada, 03724 Alicante</a>
                            <a href="#"> <i class="fa-solid fa-calendar-days"></i> 2021-04-12</a>
                            <p><a href="events-detail.php">Read More </a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="events-box">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="events-img">
                            <img src="assets/img/event-1.jpg" alt="eventa">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="events-details">
                            <strong>Moraira And David Bellingham</strong>
                            <p>Another live entertainment on Friday and Saturday with FOOD, DRINKS, COCKTAILS AND BBQ PARTY please book your place in advance</p>
                            <a href="#"> <i class="fa-solid fa-location-dot"></i> C. Saida, 2 Teulada, 03724 Alicante</a>
                            <a href="#"> <i class="fa-solid fa-calendar-days"></i> 2021-04-12</a>
                            <p><a href="events-detail.php">Read More </a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="events-box">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="events-img">
                            <img src="assets/img/event-2.jpg" alt="eventa">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="events-details">
                            <strong>Moraira And David Bellingham</strong>
                            <p>Another live entertainment on Friday and Saturday with FOOD, DRINKS, COCKTAILS AND BBQ PARTY please book your place in advance</p>
                            <a href="#"> <i class="fa-solid fa-location-dot"></i> C. Saida, 2 Teulada, 03724 Alicante</a>
                            <a href="#"> <i class="fa-solid fa-calendar-days"></i> 2021-04-12</a>
                            <p><a href="events-detail.php">Read More </a></p>
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
        if (navItems.length >= 5) {
            navItems[4].classList.add("active");
        }
    </script>
</body>

</html>