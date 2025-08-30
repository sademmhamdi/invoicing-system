<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        // Load the view parts
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
}
