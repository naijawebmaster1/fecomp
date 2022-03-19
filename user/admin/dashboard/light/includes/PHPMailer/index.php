<?php 

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class


  
//  include('../../../config.php');


function approveBooking($email, $post_id){

  //$bkref = $_GET['bkref'] ;

  global $conn;

  $sql = "SELECT id, email, firstName, lastName, tnxId, createdAt  FROM bookings WHERE id=$post_id";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "id: " . $row["id"]. " - Name: " . $row["tnxId"]. " " . $row["phone"]. "<br>";
      $BKref = $row["tnxId"];
      $email = $row["email"];
      $firstName = $row["firstName"];
      $lastName = $row["lastName"];
      $address = $row["address"];
      $hotelName = $row["hotelName"];
      $roomName = $row["roomName"];
      $phone = $row["phone"];
      $checkIn = $row["checkIn"];
      $checkOut = $row["checkOut"];
      $createdAt = $row["createdAt"];
  
     // $adults = $row["adult"];
      $kids = $row["kids"];
      $adults = $row["adults"];

      $description = $row["description"];
  
      $hotelAddress = $row["address"];
      $roomPrice = $row["roomPrice"];

      
      $formattedRomPrice = number_format("$roomPrice");

                // Escape user inputs for security
                /*
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $firstName = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
    $hotelName = mysqli_real_escape_string($conn, $_REQUEST['hotelName']);
    $roomName = mysqli_real_escape_string($conn, $_REQUEST['roomName']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $checkIn = mysqli_real_escape_string($conn, $_REQUEST['checkIn']);
    $checkOut = mysqli_real_escape_string($conn, $_REQUEST['checkOut']);
    $adults = mysqli_real_escape_string($conn, $_REQUEST['adults']);
    $kids = mysqli_real_escape_string($conn, $_REQUEST['kids']);
    $description = mysqli_real_escape_string($conn, $_REQUEST['description']);

    $hotelAddress = mysqli_real_escape_string($conn, $_REQUEST['hotelAddress']);
    $roomPrice = mysqli_real_escape_string($conn, $_REQUEST['roomPrice']);

    $formtxref = "BK";
    $BKref = $formtxref.time();

    $formattedRomPrice = number_format("$roomPrice");

    */
  
    }
  } else {
    echo "0 results";
  }
  // $conn->close();




$mail = new PHPMailer(true);

$output = '';

$message = '<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flight Email Template - Quickai</title>
<style type="text/css">
@media only screen and (max-width: 600px) {
table[class="contenttable"] {
	width: 320px !important;
	border-width: 3px!important;
}
table[class="tablefull"] {
	width: 100% !important;
}
table[class="tablefull"] + table[class="tablefull"] td {
	padding-top: 0px !important;
}
table td[class="tablepadding"] {
	padding: 15px !important;
}
}
</style>
</head>
<body style="margin:0; border: none; background:#f5f7f8">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
  <tr>
    <td align="center" valign="top"><table class="contenttable" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff" style="border-width:1px; border-style: solid; border-collapse: separate; border-color:#ededed; margin-top:20px; font-family:Arial, Helvetica, sans-serif">
        <tr>
          <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td width="100%" height="30">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top" align="center"><a href="#"><img alt="" src="logo.png" style="padding-bottom: 0; display: inline !important;"></a></td>
                </tr>
                <tr>
                  <td width="100%" height="30">&nbsp;</td>
                </tr>
                <tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td style="padding:0px 20px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
          <center>          <img style="margin:auto; text-align: center; width:80%;" src="https://bluecrosshospital.com.ng/wp-content/uploads/sites/14/2018/03/general-hospital-logo-color.png" alt="">
          </center> <br>
              <tbody>
                <tr>
                  <td style="border:4px solid #eee; border-radius:4px; padding:25px 0px;"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                      <tbody>
                        <tr>
                          <td style="font-size:14px; padding:0px 25px;" width="50"><img alt="" src="https://bluecrosshospital.com.ng/images/approved.svg" style="width:100%" ></td>
                          <td style="font-size:16px; font-weight:600; color:#777; line-height:26px; padding-right:20px;"><span style="font-size:13px;">Hi  '.$firstName.' '.$lastName.',</span><br>
                            Congratulations! Your Appountment Booking is <span style="color:#28a745;">CONFIRMED</span>.</td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td style="padding:20px;"><table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td style="font-size:14px; line-height:28px;"><span style="color:#7a7a7a;">Booking Reference Number -</span> <a style="outline:none; color:#0071cc; text-decoration:none;" href="#">'.$BKref.'</a></td>
                  <br><br><br>                <br><br>
                </tr>

                <td style="font-size:14px; line-height:28px; text-align:center;  ">Thank you for booking an appointment to see a doctor with us at BlueCross Hospital. We will notify you by E-mail here on the progress status of your appointment. do check back here Later.</td>
                </tr>
              </tbody>
            </table></td>
        </tr>

        <br><br><br>

        <tr>
          <td><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#555555; font-family:Arial, Helvetica, sans-serif;">
              <tbody>
                <tr>
                  <td class="tablepadding" align="center" style="font-size:14px; line-height:32px; padding:34px 20px; border-top:1px solid #e9e9e9;"> Any Questions? Get in touch with our 24x7 Customer Care team.<br />
                    <a href="https://bluecrosshospital.com.ng/confirmBooking.php?bkref='.$BKref.'" style="background-color:#28a745; color:#ffffff; padding:8px 25px; border-radius:4px; font-size:14px; text-decoration:none; display:inline-block; text-transform:uppercase; margin-top:10px;">Confirm Appointment</a></td>
                </tr>
                <tr> </tr>
              </tbody>
            </table></td>
        </tr>
      </table></td>
  </tr>

</table>
</body>

</html>';

  try {
    $mail->isSMTP();
    $mail->Host = 'bluecrosshospital.com.ng';
    $mail->SMTPAuth = true;
    // Gmail ID which you want to use as SMTP server
    $mail->Username = 'bookings@bluecrosshospital.com.ng';
    // Gmail Password
    $mail->Password = 'bookings123#';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 26;

    // Email ID from which you want to send the email
    $mail->setFrom('bookings@bluecrosshospital.com.ng');
    // Recipient Email ID where you want to receive emails
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = ' Wow Congratulations! Booking Approved';
    $mail->FromName = "BlueCross Hospital Bookings";
    $mail->Body = $message;

    $mail->send();
    $output = '<div class="alert alert-success">
                <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
              </div>';
  } catch (Exception $e) {
    $output = '<div class="alert alert-danger">
                <h5>' . $e->getMessage() . '</h5>
              </div>';
  }


}



  function declineBooking($email, $post_id, $MESSAGE){

  //$bkref = $_GET['bkref'] ;

  global $conn;

  $sql = "SELECT id, email, firstName, lastName, tnxId, createdAt  FROM bookings WHERE id=$post_id";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "id: " . $row["id"]. " - Name: " . $row["tnxId"]. " " . $row["phone"]. "<br>";
      $BKref = $row["tnxId"];
      $email = $row["email"];
      $firstName = $row["firstName"];
      $lastName = $row["lastName"];
      $address = $row["address"];
      $hotelName = $row["hotelName"];
      $roomName = $row["roomName"];
      $phone = $row["phone"];
      $checkIn = $row["checkIn"];
      $checkOut = $row["checkOut"];
      $createdAt = $row["createdAt"];
  
     // $adults = $row["adult"];
      $kids = $row["kids"];
      $adults = $row["adults"];

      $description = $row["description"];
  
      $hotelAddress = $row["address"];
      $roomPrice = $row["roomPrice"];

      
      $formattedRomPrice = number_format("$roomPrice");

                // Escape user inputs for security
                /*
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $firstName = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
    $hotelName = mysqli_real_escape_string($conn, $_REQUEST['hotelName']);
    $roomName = mysqli_real_escape_string($conn, $_REQUEST['roomName']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $checkIn = mysqli_real_escape_string($conn, $_REQUEST['checkIn']);
    $checkOut = mysqli_real_escape_string($conn, $_REQUEST['checkOut']);
    $adults = mysqli_real_escape_string($conn, $_REQUEST['adults']);
    $kids = mysqli_real_escape_string($conn, $_REQUEST['kids']);
    $description = mysqli_real_escape_string($conn, $_REQUEST['description']);

    $hotelAddress = mysqli_real_escape_string($conn, $_REQUEST['hotelAddress']);
    $roomPrice = mysqli_real_escape_string($conn, $_REQUEST['roomPrice']);

    $formtxref = "BK";
    $BKref = $formtxref.time();

    $formattedRomPrice = number_format("$roomPrice");

    */
  
    }
  } else {
    echo "0 results";
  }
    // $conn->close();
  
   


    $mail = new PHPMailer(true);
  
    $output = '';
  
    $message = '<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Email Template - Quickai</title>
    <style type="text/css">
    @media only screen and (max-width: 600px) {
    table[class="contenttable"] {
      width: 320px !important;
      border-width: 3px!important;
    }
    table[class="tablefull"] {
      width: 100% !important;
    }
    table[class="tablefull"] + table[class="tablefull"] td {
      padding-top: 0px !important;
    }
    table td[class="tablepadding"] {
      padding: 15px !important;
    }
    }
    </style>
    </head>
    <body style="margin:0; border: none; background:#f5f7f8">
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
      <tr>
        <td align="center" valign="top"><table class="contenttable" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff" style="border-width:1px; border-style: solid; border-collapse: separate; border-color:#ededed; margin-top:20px; font-family:Arial, Helvetica, sans-serif">
            <tr>
              <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="100%" height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td valign="top" align="center"><a href="#"><img alt="" src="logo.png" style="padding-bottom: 0; display: inline !important;"></a></td>
                    </tr>
                    <tr>
                      <td width="100%" height="30">&nbsp;</td>
                    </tr>
                    <tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td style="padding:0px 20px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
              <center>          <img style="margin:auto; text-align: center; width:80%;" src="https://bluecrosshospital.com.ng/wp-content/uploads/sites/14/2018/03/general-hospital-logo-color.png" alt="">
              </center> <br>
                  <tbody>
                    <tr>
                      <td style="border:4px solid #eee; border-radius:4px; padding:25px 0px;"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                          <tbody>
                            <tr>
                              <td style="font-size:14px; padding:0px 25px;" width="50"><img alt="" src="https://bluecrosshospital.com.ng/images/declined.jpg" style="width:100%" ></td>
                              <td style="font-size:16px; font-weight:600; color:#777; line-height:26px; padding-right:20px;"><span style="font-size:13px;">Hi  '.$firstName.' '.$lastName.',</span><br>
                              Oops Sorry! Your Booking is <span style="color:red;">DECLINED</span>.</td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td style="padding:20px;"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td style="font-size:14px; line-height:28px;"><span style="color:#7a7a7a;">Booking Reference Number -</span> <a style="outline:none; color:#0071cc; text-decoration:none;" href="#">'.$BKref.'</a></td>
                      <br><br><br>                <br><br>
                    </tr>
    
                    <td style="font-size:14px; line-height:28px; text-align:center;  ">Thank you for booking an appointment to see a doctor with us at BlueCross Hospital. however,'.$MESSAGE.' We will notify you by E-mail here on the progress status of your appointment. do check back here Later.</td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
    
            <br><br><br>
    
            <tr>
              <td><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#555555; font-family:Arial, Helvetica, sans-serif;">
                  <tbody>
                    <tr>
                      <td class="tablepadding" align="center" style="font-size:14px; line-height:32px; padding:34px 20px; border-top:1px solid #e9e9e9;"> Any Questions? Get in touch with our 24x7 Customer Care team.<br />
                        <a href="https://bluecrosshospital.com.ng/contact.php" style="background-color:#0071cc; color:#ffffff; padding:8px 25px; border-radius:4px; font-size:14px; text-decoration:none; display:inline-block; text-transform:uppercase; margin-top:10px;">Contact Customer Care</a></td>
                    </tr>
                    <tr> </tr>
                  </tbody>
                </table></td>
            </tr>
          </table></td>
      </tr>
    
    </table>
    </body>
    
    </html>';
  
      try {
        $mail->isSMTP();
        $mail->Host = 'bluecrosshospital.com.ng';
        $mail->SMTPAuth = true;
        // Gmail ID which you want to use as SMTP server
        $mail->Username = 'bookings@bluecrosshospital.com.ng';
        // Gmail Password
        $mail->Password = 'bookings123#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 26;
  
        // Email ID from which you want to send the email
        $mail->setFrom('bookings@bluecrosshospital.com.ng');
        // Recipient Email ID where you want to receive emails
        $mail->addAddress($email);
  
        $mail->isHTML(true);
        $mail->Subject = 'Oops Sorry! Booking Declined';
        $mail->FromName = "BlueCross Hospital Bookings";
        $mail->Body = $message;
  
        $mail->send();
        $output = '<div class="alert alert-success">
                    <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                  </div>';
      } catch (Exception $e) {
        $output = '<div class="alert alert-danger">
                    <h5>' . $e->getMessage() . '</h5>
                  </div>';
      }
    
    
    } 
  ?>