<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'language']);
    }

    /**
     * Terms of Service page (شروط الاستخدام) - Arabic
     */
    public function terms() {
        $data['page_title'] = 'شروط الاستخدام - Terms of Service';
        $data['meta_description'] = 'شروط الاستخدام لخدمات الفوترة الإلكترونية في الإمارات - برنامج أمازيفيرس للفواتير';
        
        $this->load->view('header_ar', $data);
        $this->load->view('terms_of_service');
        $this->load->view('footer_ar');
    }

    /**
     * Privacy Policy page (سياسة الخصوصية) - Arabic
     */
    public function privacy() {
        $data['page_title'] = 'سياسة الخصوصية - Privacy Policy';
        $data['meta_description'] = 'سياسة الخصوصية لحماية بيانات العملاء في برنامج الفوترة الإلكترونية أمازيفيرس الإمارات';
        
        $this->load->view('header_ar', $data);
        $this->load->view('privacy_policy');
        $this->load->view('footer_ar');
    }

    /**
     * Terms of Service page - English
     */
    public function terms_en() {
        $data['page_title'] = 'Terms of Service - UAE Invoicing Software';
        $data['meta_description'] = 'Terms and conditions for using Amaziverse electronic invoicing services in the UAE - FTA compliant billing software';
        
        $this->load->view('header', $data);
        $this->load->view('terms_of_service_en');
        $this->load->view('footer');
    }

    /**
     * Privacy Policy page - English
     */
    public function privacy_en() {
        $data['page_title'] = 'Privacy Policy - UAE Invoicing Software';
        $data['meta_description'] = 'Privacy policy for protecting customer data in Amaziverse electronic invoicing software UAE';
        
        $this->load->view('header', $data);
        $this->load->view('privacy_policy_en');
        $this->load->view('footer');
    }
}
