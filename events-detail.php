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

    <section class="event-dt">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="details-evt-img">
                        <strong>Moraira And David Bellingham</strong>
                        <img src="assets/img/event-2.jpg" alt="events">
                        <!-- <p>Craving mouth-watering momos in Teulada, Alicante? Look no further than The Momo Cafe Bar! 🌟Come and experience the irresistible flavors that will leave you craving for more. Our cozy cafe bar is the perfect spot to indulge in the best momos in town. Bring your friends and family for a delightful culinary adventure!
                            Don't miss out on the unforgettable taste of our delicious momos. Visit us at The Momo Cafe Bar and treat your taste buds to something truly special. See you soon! </p> -->
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="events-time mt-md-0 mt-4">
                        <div class="events-time-box">
                            <strong>Moraira And David Bellingham</strong>
                            <p><span>Start Date:</span> 2024-04-12</p>
                            <p><span>End Date:</span> 2024-04-13</p>
                            <p><span>Time:</span> 12pm-6pm</p>
                            <p><span>Contact Us:</span> <a href="tel:34 686 12 42 03">+34 686 12 42 03 </a></p>
                            <button class="default-btn mt-2">Book A Table</button>
                        </div>
                        <div class="events-time-box">
                        <p>Craving mouth-watering momos in Teulada, Alicante? Look no further than The Momo Cafe Bar! 🌟Come and experience the irresistible flavors that will leave you craving for more. Our cozy cafe bar is the perfect spot to indulge in the best momos in town. Bring your friends and family for a delightful culinary adventure!
                            Don't miss out on the unforgettable taste of our delicious momos. Visit us at The Momo Cafe Bar and treat your taste buds to something truly special. See you soon! </p>
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