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
        $mail->isHTML(true);

        /* ------------------------------------------------------
            1. SEND MAIL TO YOU + CC TEAM (Receiver mail)
        ------------------------------------------------------ */
        $mail->setFrom('siddheshkadgemitech@gmail.com', 'Aarya Mobile Services');

        // Main receiver (your admin email)
        $mail->addAddress('siddheshkadge214@gmail.com', 'Admin');

        // CC team
        if ($ccEmails) {
            foreach ($ccEmails as $cc) {
                if (filter_var($cc, FILTER_VALIDATE_EMAIL)) {
                    $mail->addCC($cc);
                }
            }
        }

        $mail->Subject = $receiverSubject;
        $mail->Body    = $receiverMsg;
        $mail->send();


        /* ------------------------------------------------------
            2. SEND THANK YOU EMAIL TO CUSTOMER (Sender mail)
        ------------------------------------------------------ */
        $mail->clearAddresses();
        $mail->clearCCs();

        // Customer email
        $mail->addAddress($email, $name);

        $mail->Subject = $senderSubject;
        $mail->Body    = $senderMsg;
        $mail->send();

        return true;

    } catch (Exception $e) {
        log_message('error', "Email error: {$mail->ErrorInfo}");
        return $mail->ErrorInfo;
    }
}
