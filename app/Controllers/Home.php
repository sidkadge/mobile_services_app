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

    public function enquiry()
    {
        return view('enquiry');
    }
   public function contact_form()
{
    // Get POST data from regular HTML form
    $input = $this->request->getPost();

    // Validate required fields
    if (!isset($input['name'], $input['email'], $input['phone'], $input['subject'], $input['message'])) {
        // For HTML form, redirect back with flash message
        return redirect()->back()->with('error', 'All fields (name, email, phone, subject, message) are required.');
    }

    $name    = $input['name'];
    $email   = $input['email'];
    $phone   = $input['phone'];
    $subject = $input['subject'];
    $message = $input['message'];

    // Email content
    $receiverSubject = "New Enquiry Submission";
    $receiverMsg = "<h2>Contact Form Submission Details</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Subject:</strong> {$subject}</p> 
        <p><strong>Message:</strong> {$message}</p>";

    $senderSubject = "Thank you for contacting Aarya Mobile Services";
    $senderMsg = "<p>Dear {$name},</p>
        <p>Thank you for reaching out to Aarya Mobile Services. We have received your message and will
        get back to you as soon as possible.</p>
        <p>Best regards,<br>Aarya Mobile Services</p>";

    $ccEmails = [
        'siddheshkadge214@gmail.com',
        'rushikeshmanchekar08@gmail.com',
        'Kondesahil2@gmail.com'
    ];

    // Send email
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
        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    } else {
        return redirect()->back()->with('error', $isEmailSent);
    }
}

}
