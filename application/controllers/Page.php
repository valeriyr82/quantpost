<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registration
 *
 * @author lwdye
 */
class Page extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->register();
    }
    
    public function privacy_policy() {
        $data['page_title'] = 'Privacy Policy';        
        $data['page'] = 'privacy_policy';
        $this->load->view('templates/header', $data);
        $this->load->view('privacy_policy', $data);
        $this->load->view('templates/footer');
    }
    
    public function terms_of_use() {
        $data['page_title'] = 'Terms Of Use';        
        $data['page'] = 'terms_of_use';
        $this->load->view('templates/header', $data);
        $this->load->view('terms_of_use', $data);
        $this->load->view('templates/footer');
    }
}