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
    <?php $page_title = 'Contact Us ' ?>
    <?php $page_name = 'Contact Us' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

<!--==============================
      Contact Form Area    
    ==============================-->
    <section class="main-contact-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <!-- <h2>Contact Us</h2> -->
                        <form action="#" method="post">
                            <div>
                                <label for="name">Name:</label><br>
                                <input type="text" id="name" name="name" required><br>
                            </div>
                            <div>
                                <label for="number">Number:</label><br>
                                <input type="tel" id="number" name="number" required><br>
                            </div>
                            <div>
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" required><br>
                            </div>
                            <div>
                                <label for="message">Message:</label><br>
                                <textarea id="message" name="message" rows="4" required></textarea><br>
                            </div>
                            <div class="text-left pt-3">
                                <button type="submit" class="default-btn">Send Now <span></span><i class="fa-solid fa-arrow-right-long"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="contact-information-layout1 list-style-none pl-xl-30">
                        <div class="box mb-20 mb-lg-40">
                            <h2 class="h4 mb-10">Opening Hours</h2>
                            <ul>
                                <li class="d-flex justify-content-between  border-dashed">
                                    <p class="mb-0"><strong>Working Days</strong></p>
                                    <p class="mb-0"><strong>Working Hours</strong></p>
                                </li>
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Saturday</p>
                                    <p class="mb-0">11AM - 6PM</p>
                                </li>
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Saturday</p>
                                    <p class="mb-0">11AM - 6PM</p>
                                </li>
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Monday</p>
                                    <p class="mb-0">9AM - 3PM</p>
                                </li>
                            </ul>
                        </div>
                        <div class="box mb-20 mb-lg-35">
                            <h2 class="h4 mb-10">Address</h2>
                            <p class="mb-3"><i class="fa-solid fa-location-dot"></i>C. Saida, 2, 03724 Teulada, Alicante, Spain</p>
                        </div>
                        <div class="box-wrap mb-0">
                            <h2 class="h4 mb-0">Customer Support</h2>
                            <a href="tel:+34 686 12 42 03" class="h3 text-bold mb-0">+34 686 12 42 03</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cafe-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99670.73385983035!2d0.02482814204775032!3d38.678522391739044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129e07d8aaa6ce0f%3A0xdee9d9be6574f847!2sThe%20momos%20caf%C3%A9%20bar!5e0!3m2!1sen!2snp!4v1712490661456!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

     <!--==============================
      Contact Form Area    
    ==============================-->
    
    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>
</body>

</html>