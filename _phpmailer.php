<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require '.private/config.php';
//Load Composer's autoloader
require 'vendor/autoload.php';
function send_mail($name, $email, $subject, $message, $setFrom = "newagedentalclinicpanvel@gmail.com")
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = "newagedentalclinicpanvel@gmail.com";                     //SMTP username
        $mail->Password = "jlki ioyt zmbu zscc";                               //SMTP password
        $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom("newagedentalclinicpanvel@gmail.com", 'New Age Dental Clinic');
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
    } catch (Exception $e) {
        $showError = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        error_log("Mailer Error: {$mail->ErrorInfo}", 3, "my-errors.log");
    }
}
?>