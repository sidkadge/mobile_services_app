<?php

namespace App\Controllers;

helper('email_helper');

require_once FCPATH . 'vendor/autoload.php';

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

    public function optionsMethod()
    {
        return $this->response->setStatusCode(200)
            ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
            ->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With, Accept')
            ->setHeader('Access-Control-Max-Age', '86400');
    }

    public function index()
    {
        return view('Home');
    }

    public function contact_form()
    {
        $input = $this->request->getJSON(true);

        if (!$input) {
            $input = $this->request->getPost();
        }
        if (!isset($input['name'], $input['email'], $input['phone'], $input['subject'], $input['message'])) {
            return $this->respond([
                'status'  => 'error',
                'message' => 'All fields (name, email, phone, subject, message) are required.'
            ], 400);
        }
        $name    = $input['name'];
        $email   = $input['email'];
        $phone   = $input['phone'];
        $subject = $input['subject'];
        $message = $input['message'];
        $receiverSubject = "New Contact Form Submission";
        $receiverMsg = "<h2>Contact Form Submission Details</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Subject:</strong> {$subject}</p> 
        <p><strong>Message:</strong> {$message}</p>";
        $senderSubject = "Thank you for contacting us";
        $senderMsg = "<h2>Thank you for contacting us</h2>
        <p>Dear {$name},</p>
        <p>Thank you for reaching out to us. We have received your message and will
        get back to you as soon as possible.</p>
        <p>Best regards,<br>Siddhesh kadge</p>";
        $ccEmails = [
            'siddheshkadge214@gmail.com',
            'rushikeshmanchekar08@gmail.com'
        ];
      $isEmailSent = sendConfirmationEmail(
    $name,
    $email,
    $ccEmails,
    $receiverSubject,
    $receiverMsg,
    $senderSubject,
    $senderMsg
);

if ($isEmailSent === true) {
    return $this->respond([
        'status'  => 'success',
        'message' => 'Your message has been sent successfully.'
    ]);
} else {
    return $this->respond([
        'status'  => 'error',
        'message' => $isEmailSent 
    ], 500);
}
    }
}
