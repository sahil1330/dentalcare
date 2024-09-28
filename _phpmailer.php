<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require '.private/config.php';
//Load Composer's autoloader
require 'vendor/autoload.php';
function send_mail($name, $email, $subject, $message, $setFrom = "info@newagedentalclinic.com")
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.newagedentalclinic.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = "info@newagedentalclinic.com";                     //SMTP username
        $mail->Password = "OCdZi-t1#D3e";                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($setFrom, 'New Age Dental Clinic');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addReplyTo('newagede@newagedentalclinic.com');
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $showAlert = "Message Sent Successfully. <br> Thanks for your precious time.";
        return $showAlert;
    } catch (Exception $e) {
        $showError = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return $showError;
    }
}
?>