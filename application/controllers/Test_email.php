<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_email extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    public function index()
    {
        echo "<h2>Email Configuration Test</h2>";
        
        try {
            // Load email configuration
            $email_config = $this->config->item('email');
            if (!$email_config) {
                echo "<p style='color: red;'>❌ Email configuration not found!</p>";
                return;
            }
            
            echo "<p style='color: green;'>✅ Email configuration loaded</p>";
            echo "<pre>";
            print_r($email_config);
            echo "</pre>";
            
            // Initialize email library
            $this->email->initialize($email_config);
            echo "<p style='color: green;'>✅ Email library initialized</p>";
            
            // Try to send a test email
            $this->email->from('support@amaziverse.io', 'Test Email');
            $this->email->to('support@amaziverse.io');
            $this->email->subject('Test Email from Invoice Landing Page');
            $this->email->message('This is a test email to verify the email configuration is working.');
            
            if ($this->email->send()) {
                echo "<p style='color: green;'>✅ Test email sent successfully!</p>";
            } else {
                echo "<p style='color: red;'>❌ Failed to send test email</p>";
                echo "<h3>Debug Information:</h3>";
                echo "<pre>" . $this->email->print_debugger() . "</pre>";
            }
            
        } catch (Exception $e) {
            echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
        }
    }
}
