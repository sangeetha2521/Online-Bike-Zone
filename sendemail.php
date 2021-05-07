<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $fromdate = $_POST['fromdate'];
  $todate = $_POST['todate'];
  $number=$_POST['number'];
  $problem = $_POST['problem'];
  $address = $_POST['address'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sangeethan18mss046@skasc.ac.in'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'student123'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('sangeethan18mss046@skasc.ac.in'); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = ' booking sucesfull !! ';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>from date:$fromdate <br> <br>To date:$todate <br><br>vehicle number:$number <br>problem description:$problem <br>Pickup&drop Address: $address</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for booking.!</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
