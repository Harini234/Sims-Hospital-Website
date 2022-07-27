<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if(isset($_POST['send']))
{

    print_r($_POST);
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'viswanathantm1970@gmail.com';                     //SMTP username
    $mail->Password   ='guzxtpiqyclnfkbb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harisakura67@gmail.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient

    if($_FILES['attachment']['name']!=null){
        if(move_uploaded_file($_FILES['attachment']['tmp_name'],"uploads/{$_FILES['attachment']['name']}")){
           //Add attachments
           $mail->addAttachment("uploads/{$_FILES['attachment']['name']}"); //Optional name
        }
    }
     

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject.time();
    $mail->Body    = $subject;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>window.location.href="forms.php?message_sent";</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

