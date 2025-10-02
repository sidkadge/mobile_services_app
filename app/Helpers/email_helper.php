<?php
use CodeIgniter\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;;

require_once 'src/Exception.php';
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';

function sendConfirmationEmail(
    $name,
    $email,
    $ccEmails = [],
    $receiverSubject = null,
    $receiverMsg = null,
    $senderSubject = null,
    $senderMsg = null
) {
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'siddheshkadgemitech@gmail.com';   
        $mail->Password   = 'byfb lzcj dvuc kxln'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('siddheshkadgemitech@gmail.com', 'Siddhesh Kadge'); 
        $mail->addAddress($email, $name);
        if ($ccEmails) {
            foreach ($ccEmails as $cc) {
                if (filter_var($cc, FILTER_VALIDATE_EMAIL)) {
                    $mail->addCC($cc);
                }
            }
        }

        // Send receiver mail
        $mail->isHTML(true);
        $mail->Subject = $receiverSubject;
        $mail->Body    = $receiverMsg;
        $mail->send();

        // Clear addresses for sender email
        $mail->clearAddresses();
        $mail->addAddress($email, $name);
        $mail->Subject = $senderSubject;
        $mail->Body    = $senderMsg;
        $mail->send();

        return true;
    } catch (Exception $e) {
        log_message('error', "Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}");
        return false;
    }       
}
