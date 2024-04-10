<?php

// error_reporting(0);

?>

<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$time = $_REQUEST['time'];
$phone = $_REQUEST['phone'];
$date = $_REQUEST['date'];
$number_guest = $_REQUEST['number_guest'];
$message = $_REQUEST['message'];

if (($name == "") || ($email == "")) {
    echo "<script>alert('Message Sent Failed')</script>";
    echo "<script>location.href='../index.php'</script>";
} else {

    // multiple recipients
    $to  = 'info@mapleleapgroups.com,rafik@mapleleapgroups.com' . ', '; // note the comma


    // message
    $reservationHtml = '
				<html>
				<head>
				  <title>Reservation  Form</title>
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
					  <td>Phone </td><td>' . $phone . '</td>
					</tr>
					<tr>
					  <td>Time</td><td>' . $time . '</td>
					</tr>
					<tr>
					 <td>Date</td><td>' . $date . '</td>
					</tr>
					<tr>
					 <td>Number of Guest</td><td>' . $number_guest . '</td>
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
    $subject = 'Reservation Form.';

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