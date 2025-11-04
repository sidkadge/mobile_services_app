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
    $db = \Config\Database::connect();
    $builder = $db->table('contact_form_submissions');
    $query = $builder->orderBy('id', 'DESC')->get();
    $results = $query->getResultArray();

    $data = [
        'status' => true,
        'count'  => count($results),
        'records' => $results
    ];

    return view('enquiry', $data);
}

    public function contact_form()
    {
        $input = $this->request->getJSON(true);
        if (empty($input)) {
            $input = $this->request->getPost();
        }
        if (!isset($input['name'], $input['email'], $input['phone'], $input['message'])) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'All fields (name, email, phone, subject, message) are required.'
            ]);
        }
        $name    = $input['name'];
        $email   = $input['email'];
        $phone   = $input['phone'];
        $subject = "New enquiry from aarya mobile services";
        $message = $input['message'];
        $services = isset($input['services'])
            ? (is_array($input['services']) ? implode(', ', $input['services']) : $input['services'])
            : 'Not specified';
        $mobile_model = isset($input['mobile_model']) ? $input['mobile_model'] : 'Not specified';
        $mobile_company = isset($input['mobile_company']) ? $input['mobile_company'] : 'Not specified';

        $db = \Config\Database::connect();
        $builder = $db->table('contact_form_submissions');
        $data = [
            'name'          => $name,
            'email'         => $email,
            'phone'         => $phone,
            'subject'       => $subject,
            'message'       => $message,
            'services'      => $services,
            'mobile_model'  => $mobile_model,
            'mobile_company' => $mobile_company,
            'created_at'  => (new \DateTime('now', new \DateTimeZone('Asia/Kolkata')))->format('Y-m-d H:i:s'),
        ];
        $builder->insert($data);
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
            return redirect()->back()->with('success', 'Your message has been sent successfully.');
        } else {
            return redirect()->back()->with('error', $isEmailSent);
        }
    }

    public function getallcontactsubmissions()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('contact_form_submissions');
        $query = $builder->get();
        $results = $query->getResultArray();
        return $this->response->setJSON($results);
    }
}
