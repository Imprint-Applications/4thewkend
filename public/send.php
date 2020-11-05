<?php
session_start();
include ('inc/var.php');
$secret = $varSecret;

$captcha = $_POST['g-recaptcha-response'];
$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}";
$verify = json_decode(file_get_contents($recaptchaUrl));
//Get Radio Buttons
$userRadio = $_POST['contactRadio'];

//Get User Info
$userName = $_POST['name'];
$userNumber = $_POST['number'];
$userEmail = $_POST['email'];
$userMessage = $_POST['message'];

    $headers = 'From: Imprint Applications - Website Contact Form <contact@imprintapplications.co.uk>' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $to = "rhowdle@imprintapplications.com";
    $subject = "New Imprint Email - " . $userRadio;
    $body .= "Hello There,\r\n A user has submitted a message on your website contact form. Please review the information and respond accordingly.\r\n
    Information Submitted:\r\n";
    
    $body .= "\r\n Name: " . $userName;
    $body .= "\r\n Contact Number: " . $userNumber;
    $body .= "\r\n Contact Email: " . $userEmail;
    $body .= "\r\n Message: " . $userMessage;

    mail($to, $subject, $body, $headers);

    if(empty($userName)){
        $_SESSION['status'] = "Please include your name.";
        $_SESSION['status_code'] = 'error';
        header('Location: contact.php');
    } else if(empty($userNumber)){
        $_SESSION['status'] = "Please include your contact number.";
        $_SESSION['status_code'] = "error";
        header('Location: contact.php');
    } else if(empty($userEmail)){
        $_SESSION['status'] = "Please include your email.";
        $_SESSION['status_code'] = 'error';
        header('Location: contact.php');
    } else if(empty($userNumber)){
        $_SESSION['status'] = "Please include a message.";
        $_SESSION['status_code'] = 'error';
        header('Location: contact.php');
    } else {
        $_SESSION['status'] = "Thank you for your message. We will respond as soon as possible.";
        $_SESSION['status_code'] = 'success';
        header('Location: contact.php');
    }
?>