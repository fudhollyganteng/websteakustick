<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

if (isset($_POST['sendMail'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['body'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->SMTPDebug = 2;  // Untuk mode debug
            $mail->Host       = 'smtp.gmail.com';                 //Set the SMTP server to send through
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                  // Enable TLS encryption, `ssl` also accepted
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dawai@stickusteak.com';     //SMTP username
            $mail->Password   = 'Steak2302!';                     //SMTP password
            $mail->Port = '465';                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom('muhammadfudhollidholli@gmail.com', 'Web pak nata');
            $mail->addAddress('muhammadfudhollidholli@gmail.com', 'Web Pak Nata');      //Add a recipient
    
            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = 'New enquery - Web pak nata';
            $mail->Body = '<h3>Hallo, you got a new message</h3><br>
            <h4>Name    : '.$name.'</h4>
            <h4>Email   : '.$email.'</h4>
            <h4>Subject : '.$subject.'</h4>
            <h4>Body    : '.$message.'</h4>
            ';
    
    
            
            if ($mail->send()) {
                echo "
                <script>
                alert('email berhasil dikirim!');
                document.location.href='index.php';
                </script>
                ";
            } else {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";    
            }

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    
    } else {
        header('location: contact.php ');
        exit(0);
    }


?>