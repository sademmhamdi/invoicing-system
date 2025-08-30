<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        // Load the Arabic view parts
        $this->load->view('header_ar');
        $this->load->view('home_ar');
        $this->load->view('footer_ar');
    }
}