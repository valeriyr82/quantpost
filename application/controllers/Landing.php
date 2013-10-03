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
class Landing extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->login();
    }

    public function login() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules("name", "name", 'required||trim|xss_clean');
        $this->form_validation->set_rules("password", "password", 'required|trim|xss_clean|callback_valid_password');
        
        if ($this->form_validation->run() === FALSE) {
            $data['page_title'] = 'Login';        
            $data['page'] = 'landing';
            $this->load->view('templates/header', $data);
            $this->load->view('login', $data);
            $this->load->view('templates/footer');
        } else {
            $data['page_title'] = 'Landing Page';        
            $data['page'] = 'landing';
            $this->load->view('templates/header', $data);
            $this->load->view('landing', $data);
            $this->load->view('templates/footer');        
        }
    }   
    
    public function valid_password($password) {
        if ($password == 'quantpost')
            return true;
        $this->form_validation->set_message('valid_password', 'Please enter a valid password.');
        return false;
    }
}