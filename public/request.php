<?php
session_start();

//Captcha Verification
$errors = [];
$errorMessage = '';

$secret = '6Le0eMwZAAAAAACLs7QtuNWauf7WEW6B2pdojEIa';

if(!empty($_POST)){
    $requestName = $_POST['requestName'];
    $requestNumber = $_POST['requestNumber'];
    $captcha = $_POST['g-recaptcha-response'];

    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}";
    $verify = json_decode(file_get_contents($recaptchaUrl));

    if(!empty($errors)) {
        $allErrors = join('<br>', $errors);
        $errorMessage = "<p style='color:red;'>{$allErrors}</p>";
    } else {
        //Get User Info
        $requestName = $_POST['requestName'];
        $requestNumber = $_POST['requestNumber'];

            $headers = 'From: Imprint Applications - Callback Request <contact@imprintapplications.co.uk>' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
            $to = "rhowdle@imprintapplications.com";
            $subject = "New Callback Request";
            $body = "Hello There,\r\n A user has requested a callback. Please review the information and respond accordingly.\n
            Information Submitted:\r\n";
            
            $body .= "\r\n Name: " . $requestName;
            $body .= "\r\n Contact Number: " . $requestNumber;

            mail($to, $subject, $body, $headers);

            if(empty($requestName)){
                $_SESSION['status'] = "Please include your name.";
                $_SESSION['status_code'] = 'error';
                header('Location: index.php#contact');
            } else if(empty($requestNumber))
                {
                    $_SESSION['status'] = "Please include your contact number.";
                    $_SESSION['status_code'] = 'error';
                    header('Location: index.php#contact');
                } else {
                    $_SESSION['status'] = "You're callback request has been sent successfully. We will be in touch shortly.";
                    $_SESSION['status_code'] = 'success';
                    header('Location: index.php#contact');
                }

    }
}

?>