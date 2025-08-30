<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email Configuration
| -------------------------------------------------------------------------
| This file contains the email configuration for the application.
| You can modify these settings based on your email provider.
*/

$config['protocol'] = 'smtp'; // Use 'smtp' for SMTP, 'mail' for PHP mail() function
$config['smtp_host'] = 'mail.amaziverse.io'; // Your SMTP host
$config['smtp_port'] = 465; // SMTP port (587 for TLS, 465 for SSL)
$config['smtp_user'] = 'support@amaziverse.io'; // Your SMTP username
$config['smtp_pass'] = 'Sofia#2024#!?'; // Your SMTP password - replace with actual password
$config['smtp_crypto'] = 'ssl'; // 'tls' or 'ssl'
$config['mailtype'] = 'html'; // 'html' or 'text'
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";

// For Gmail SMTP (if you want to use Gmail)
/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = 'your-email@gmail.com';
$config['smtp_pass'] = 'your-app-password';
$config['smtp_crypto'] = 'tls';
*/
