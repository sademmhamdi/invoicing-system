<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'email'));
        $this->load->config('email');
    }

    public function index()
    {
        // Load the contact form view
        $this->load->view('header');
        $this->load->view('contact_form');
        $this->load->view('footer');
    }

    public function test()
    {
        echo "<h1>Contact Controller Test</h1>";
        echo "<p>✅ Contact controller is working!</p>";
        echo "<p>✅ CodeIgniter is loaded properly</p>";
        echo "<p>Base URL: " . base_url() . "</p>";
        echo "<p>Current URL: " . current_url() . "</p>";
        
        // Test if views folder exists
        if (file_exists(APPPATH . 'views/request_quote.php')) {
            echo "<p>✅ request_quote.php view file exists</p>";
        } else {
            echo "<p>❌ request_quote.php view file NOT found</p>";
        }
        
        // Test routes
        echo "<h3>Available Routes:</h3>";
        echo "<ul>";
        echo "<li><a href='" . base_url('test') . "'>Test Route</a> (current)</li>";
        echo "<li><a href='" . base_url('request-quote') . "'>Request Quote</a></li>";
        echo "<li><a href='" . base_url('contact') . "'>Contact</a></li>";
        echo "</ul>";
    }

    public function request_quote()
    {
        // Load the request quote form view
        $this->load->view('header');
        $this->load->view('request_quote');
        $this->load->view('footer');
    }

    public function submit_contact()
    {
        // Set form validation rules
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'trim');
        $this->form_validation->set_rules('comments', 'Message', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload form with errors
            $this->load->view('header');
            $this->load->view('contact_form');
            $this->load->view('footer');
        } else {
            // Validation passed, process the form
            $this->_send_contact_email();
        }
    }

    public function submit_quote()
    {
        // Set form validation rules for quote request
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|trim');
        $this->form_validation->set_rules('company_size', 'Company Size', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload form with errors
            $this->load->view('header');
            $this->load->view('request_quote');
            $this->load->view('footer');
        } else {
            // Validation passed, process the quote request
            $this->_send_quote_email();
        }
    }

    private function _send_contact_email()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('comments');

        // Try to send email, but don't fail if it doesn't work
        $email_sent = false;
        $error_message = '';
        
        try {
            // Initialize email library with configuration
            $email_config = $this->config->item('email');
            if ($email_config) {
                $this->email->initialize($email_config);
            }
            
            // Configure email
            $this->email->from('support@amaziverse.io', 'Invoice Landing Page');
            $this->email->to('support@amaziverse.io');
            $this->email->subject('New Contact Form Submission');
            
            $email_body = "<h3>New contact form submission:</h3>";
            $email_body .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
            $email_body .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            $email_body .= "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
            $email_body .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
            $email_body .= "<p><strong>Submitted on:</strong> " . date('Y-m-d H:i:s') . "</p>";
            
            $this->email->message($email_body);
            $email_sent = $this->email->send();
            
            if (!$email_sent) {
                $error_message = $this->email->print_debugger();
            }
        } catch (Exception $e) {
            $error_message = $e->getMessage();
        }

        // Log the submission regardless of email status
        $this->_log_submission('contact', array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'email_sent' => $email_sent ? 'yes' : 'no',
            'error' => $error_message
        ));

        // Always show success to user (email issues shouldn't break user experience)
        $data['success'] = true;
        $data['message'] = 'Thank you for contacting us! We will reply within maximum 48 hours.';
        
        // For debugging (remove in production)
        if (!$email_sent && ENVIRONMENT === 'development') {
            $data['debug_info'] = 'Email debug: ' . $error_message;
        }

        $this->load->view('header');
        $this->load->view('contact_thank_you', $data);
        $this->load->view('footer');
    }

    private function _send_quote_email()
    {
        $full_name = $this->input->post('full_name');
        $email = $this->input->post('email');
        $contact_number = $this->input->post('contact_number');
        $company_size = $this->input->post('company_size');
        $description = $this->input->post('description');

        // Try to send email, but don't fail if it doesn't work
        $email_sent = false;
        $error_message = '';
        
        try {
            // Initialize email library with configuration
            $email_config = $this->config->item('email');
            if ($email_config) {
                $this->email->initialize($email_config);
            }
            
            // Configure email
            $this->email->from('support@amaziverse.io', 'Invoice Landing Page');
            $this->email->to('support@amaziverse.io');
            $this->email->subject('New Quote Request');
            
            $email_body = "<h3>New quote request submission:</h3>";
            $email_body .= "<p><strong>Full Name:</strong> " . htmlspecialchars($full_name) . "</p>";
            $email_body .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            $email_body .= "<p><strong>Contact Number:</strong> " . htmlspecialchars($contact_number) . "</p>";
            $email_body .= "<p><strong>Company Size:</strong> " . htmlspecialchars($company_size) . "</p>";
            $email_body .= "<p><strong>Description:</strong><br>" . nl2br(htmlspecialchars($description)) . "</p>";
            $email_body .= "<p><strong>Submitted on:</strong> " . date('Y-m-d H:i:s') . "</p>";
            
            $this->email->message($email_body);
            $email_sent = $this->email->send();
            
            if (!$email_sent) {
                $error_message = $this->email->print_debugger();
            }
        } catch (Exception $e) {
            $error_message = $e->getMessage();
        }

        // Log the submission regardless of email status
        $this->_log_submission('quote', array(
            'full_name' => $full_name,
            'email' => $email,
            'contact_number' => $contact_number,
            'company_size' => $company_size,
            'description' => $description,
            'email_sent' => $email_sent ? 'yes' : 'no',
            'error' => $error_message
        ));

        // Always show success to user (email issues shouldn't break user experience)
        $data['success'] = true;
        $data['message'] = 'Thank you for requesting a quote! We will reply within maximum 48 hours with a detailed proposal.';
        
        // For debugging (remove in production)
        if (!$email_sent && ENVIRONMENT === 'development') {
            $data['debug_info'] = 'Email debug: ' . $error_message;
        }

        $this->load->view('header');
        $this->load->view('quote_thank_you', $data);
        $this->load->view('footer');
    }
    
    private function _log_submission($type, $data)
    {
        $log_file = APPPATH . 'logs/form_submissions.log';
        $log_entry = date('Y-m-d H:i:s') . " - " . strtoupper($type) . " SUBMISSION: " . json_encode($data) . PHP_EOL;
        file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
    }
}
