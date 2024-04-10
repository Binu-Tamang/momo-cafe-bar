<?php

// error_reporting(0);

?>

<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$message = $_REQUEST['message'];

if (($name == "") || ($email == "")) {
    echo "<script>alert('Message Sent Failed')</script>";
    echo "<script>location.href='../index.php'</script>";
} else {

    // multiple recipients
    $to  = 'mailto:info@mapleleapgroups.com,rafik' . ', '; // note the comma


    // message
    $reservationHtml = '
				<html>
				<head>
				  <title>Contact  Form</title>
				  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;700&display=swap" rel="stylesheet">
				  <style>
				  table{
					  font-family: Spartan;
				  }
					table#contenttable{
						border:4px solid #222;
						color:#222;
						padding:10px;
						width:100%;
						max-width: 991px;
					}
					table#logotable{
						width:100%;
						border:0;
						text-align: center;
					}
					th{
						width:50%;
						height:30px;
						border-bottom: 2px solid rgba(34,34,34,0.6);
						font-size:18px;
					}
					td{
						font-family:Spartan;
						font-size:16px;
						width:50%;
						height:30px;
						text-align:center;
						border-bottom: 2px solid rgba(34,34,34,0.3);
					}
					tr td::first-child{
						border-right: 2px solid rgba(34,34,34,0.3);
					}
					#logo{
						width:250px;height:auto;
						text-align:center;
						margin:5px auto;
					}
					h1#title{
						text-align:center;
						font-family:Spartan;
					}
				  </style>
				</head>
				<body>
				  <h1 id="title">Reservation Form</h1>
				  <table id="contenttable" style="max-width:767px;margin:0 auto;">
					<tr>
					  <td>Name</td><td>' . $name . ' </td>
					</tr>
					<tr>
					  <td>Email</td><td>' . $email . '</td>
					</tr>
					<tr>
					  <td>Phone </td><td>' . $number . '</td>
					</tr>
					 <td colspan="2">Message</td>
					</tr>
					<tr>
					 <td colspan="2" >' . $message . '</td>
					</tr>
				  </table>
				</body>
				</html>';




    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From:  ' . $name . ' <' . $email . '>' . "\r\n";
    $subject = 'Contact Form.';

    // Mail it
    mail(
        $to,
        $subject,
        $reservationHtml,
        $headers
    );



    echo "<script>location.href='msgsuccess.php'</script>";
}

?>
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
                                    <p class="mb-0"><strong>Opening Days</strong></p>
                                    <p class="mb-0"><strong>Opening Hours</strong></p>
                                </li>
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Monday - Tuesday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li>
                                <!-- <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Tuesday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li> -->
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Wednesday - Thrusday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li>
                                <!-- <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Thrusday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li> -->
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Friday - Saturday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li>
                                <!-- <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Saturday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li> -->
                                <li class="d-flex justify-content-between ">
                                    <p class="mb-0">Sunday</p>
                                    <p class="mb-0"><i class="fa-regular fa-clock"></i> 09AM - 11PM</p>
                                </li>
                            </ul>
                        </div>
                        <div class="box mb-20 mb-lg-35">
                            <h2 class="h4 mb-10">Address</h2>
                            <p class="mb-3"><i class="fa-solid fa-location-dot"></i>C. Saida, 2, 03724 Teulada, Alicante, Spain</p>
                        </div>
                        <div class="box-wrap mb-0">
                            <h2 class="h4 mb-0">Contact Us Today</h2>
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
    <script>
        const navItems = document.querySelectorAll('.header-menu-wrap ul li > a ');
        if (navItems.length >= 5) {
            navItems[4].classList.add("active");
        }
    </script>
</body>

</html>