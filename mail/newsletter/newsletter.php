<?php 

use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';

/*var_dump($_POST); */

if (array_key_exists('email', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    $subject = 'Newsletter Subscriber North Park Designs';
   
    $to = 'contact@northparkdesigns.com';
}
  
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Error: invalid email address provided";
        $err = true;
    } 

    if (!$err) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mail.northparkdesigns.com';
        $mail->Port = /*26*/ 465;
        $mail->CharSet = 'utf-8';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('contact@northparkdesigns.com'/*, (empty($name) ? 'Contact form' : $name)*/);
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = 'Newsletter North Park Designs';
        $mail->Body = 'Email: ' + $email;
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
            echo "Failed to Send\n" . $msg;
        } else {
            $msg .= "Message sent!";
            echo "Message Sent";
        }
    }