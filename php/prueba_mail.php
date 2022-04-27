<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../php/Exception.php';
require '../php/PHPMailer.php';
require '../php/SMTP.php';

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
   // $mail->SMTPDebug = 0; 
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'happypocket.com.co';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'juanp@happypocket.com.co';                     //SMTP username
    $mail->Password   = '3rachismevalemo3';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
   $mail->setFrom('juanp@happypocket.com.co', 'jp heroku mailtrap');
    $mail->addAddress('gomezjp@gmail.com','jp');     //Add a recipient
  //   $mail->addAddress('juancaolmosasesor@gmail.com','Juanca olmos Asesor'); 
   //   $mail->addAddress('juancaolmos@me.com');        
      //Name is optional
    $mail->addReplyTo('webmaster@happypocket.com.co', 'Information');
   // $mail->addCC('cc@example.com');
 //   $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<img src="www.happypocket.com.co/recursos/china_usa.png" > </img> This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>