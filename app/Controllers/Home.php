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
        if (!session()->has('user_id')) {
            return redirect()->to('login')->with('error', 'Please login first.');
        }

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
// print_r($input); exit;
    if (!isset($input['full_name'], $input['email'], $input['mobile_number'])) {
        return $this->response->setJSON([
            'status' => false,
            'message' => 'All fields (name, email, phone, message) are required.'
        ]);
    }

    $name    = $input['full_name'];
    $email   = $input['email'];
    $phone   = $input['mobile_number'];
    $subject = "New enquiry from aarya mobile services";
    $message = $input['issue'];

    $services = isset($input['services'])
        ? (is_array($input['services']) ? implode(', ', $input['services']) : $input['services'])
        : 'Not specified';

    $mobile_model   = $input['mobile_model']   ?? 'Not specified';
    $mobile_company = $input['mobile_company'] ?? 'Not specified';

    $db = \Config\Database::connect();
    $builder = $db->table('contact_form_submissions');

    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'services' => $services,
        'mobile_model' => $mobile_model,
        'mobile_company' => $mobile_company,
        'created_at' => (new \DateTime('now', new \DateTimeZone('Asia/Kolkata')))
            ->format('Y-m-d H:i:s'),
    ];

    $builder->insert($data);

    // Emails
    $receiverSubject = "New Enquiry Submission";
    $receiverMsg = "
        <h2>Contact Form Submission Details</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong> {$message}</p>
    ";

    $senderSubject = "Thank you for contacting Aarya Mobile Services";
    $senderMsg = "
        <p>Dear {$name},</p>
        <p>Thank you for contacting Aarya Mobile Services. We will get back to you soon.</p>
        <p>Regards,<br>Aarya Mobile Services</p>
    ";

    $ccEmails = [
        'siddheshkadge214@gmail.com',
        'rushikeshmanchekar08@gmail.com',
        'Kondesahil2@gmail.com'
    ];

    $isEmailSent = sendConfirmationEmail(
        $name, $email, $ccEmails,
        $receiverSubject, $receiverMsg,
        $senderSubject, $senderMsg
    );

    if ($isEmailSent === true) {
        return $this->response->setJSON([
            'status' => true,
            'message' => 'Form submitted successfully.'
        ]);
    } else {
        return $this->response->setJSON([
            'status' => false,
            'message' => $isEmailSent
        ]);
    }
}


    public function getallcontactsubmissions()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('login');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('contact_form_submissions');
        $query = $builder->get();
        $results = $query->getResultArray();

        return $this->response->setJSON($results);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }


    public function register()
    {
        return view('register');
    }

    public function storeUser()
    {
        $userModel = new \App\Models\UserModel();

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'mobile_no'  => $this->request->getPost('mobile_no'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->save($data);

        return redirect()->to('login')->with('success', 'Registration successful! Please login.');
    }


    public function login()
    {
        return view('login');
    }

    public function loginCheck()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login OK
            session()->set('user_id', $user['id']);
            session()->set('user_name', $user['first_name']);

            return redirect()->to('enquiry');
        }

        return redirect()->back()->with('error', 'Invalid email or password');
    }
}
