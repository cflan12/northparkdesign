<?php 

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

var_dump($_POST);
echo '\n err = ' . $err.'\n';


if (array_key_exists('name', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    /*if (array_key_exists('subject', $_POST)) {
        $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject = 'No subject given';
    }*/
    $subject = 'North Park Design Contact';
    echo "step 1 \n";
    //Apply some basic validation and filtering to the query
    if (array_key_exists('message', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['message']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No message provided!';
        $err = true;
    }
     echo "step 2 \n";
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
     echo "step 3\n";
    //Validate to address
    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
    /*if (array_key_exists('to', $_POST) and in_array($_POST['to'], ['sales', 'support', 'accounts'])) {
        $to = $_POST['to'] . '@example.com';
    } else {
        $to = 'support@example.com';*/
        $to = 'contact@northparkdesign.co';
    }
     echo "step 4\n";
    //Make sure the address they provided is valid before trying to use it
    /*if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Error: invalid email address provided";
        $err = true;
    }  echo "step 5"; */

    if (!$err) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mail.northparkdesign.co';
        $mail->Port = 26;
        $mail->CharSet = 'utf-8';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('contact@northparkdesign.co'/*, (empty($name) ? 'Contact form' : $name)*/);
        $mail->addAddress($to);
        /*$mail->addReplyTo($email); */
        $mail->Subject = 'Contact form: ';
        $mail->Body = 'Contact form submission\n\n';
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
            echo "Failed to Send\n" . $msg;
        } else {
            $msg .= "Message sent!";
            echo "Message Sent";
        }
    }