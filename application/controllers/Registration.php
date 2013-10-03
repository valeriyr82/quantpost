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
class Registration extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function register() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['page_title'] = 'Register';
        $data['stuff'] = 'this is stuff';
        $data['page'] = 'register';


        /*
         * 
         * USE This to capture IP
         * 
        <? $ip = $_SERVER['HTTP_CLIENT_IP']; ?> 

        */
        
        $this->form_validation->set_rules("name", "name", 'required|trim|xss_clean');
        $this->form_validation->set_rules("email", "email", 'required|trim|xss_clean|valid_email|callback_emailIsUnique');
        $this->form_validation->set_rules("url", "url", 'prep_url|required|xss_clean|callback_valid_url');

        //  $this->form_validation->set_rules('title', 'Title', 'required');
        //  $this->form_validation->set_rules('text', 'text', 'required');
        
        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('register', $data);
            $this->load->view('templates/footer');
        } else {

            // if nothing is wrong with the data that the user entered
            // send emails
            // enter data in database
            // welcome the user
            // is this mapping required?  Is there a better way?  FIXME

            $data['email'] = $this->input->post('email');
            $data['name'] = $this->input->post('name');
            $data['url'] = $this->input->post('url');

            //$this->Database_model->register_client($data);
            
            // SEND EMAIL
            $body['Email Address'] = $data['email'];
            $body['Full Name'] = $data['name'];
            $body['Web Site'] = $data['url'];
            $this->load->library('email');
            $this->email->initialize(array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.sendgrid.net',
                'smtp_user' => 'lwdye',
                'smtp_pass' => 'ginger',
                'smtp_port' => 587,
                'crlf' => "\r\n",
                'newline' => "\r\n"    
            ));
            $this->email->from($data['email'], $data['name']);
            
            // get email list
            $this->config->load('email_list', TRUE);
            $emails_to = $this->config->item('emails_to', 'email_list');
            $emails_cc = $this->config->item('emails_cc', 'email_list');
            $emails_bcc = $this->config->item('emails_bcc', 'email_list');
            $register_subject = $this->config->item('register_subject', 'email_list');
            $this->email->to($emails_to);
            $this->email->cc($emails_cc);
            $this->email->bcc($emails_bcc);
            
            $subject = $register_subject . $data['name'];
            $message = json_encode($body);
            
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();
            
            $this->load->view('templates/header', $data);
            $this->load->view('welcome', $data);
            $this->load->view('templates/footer');
        }
    }
    
    public function rest_service() {
        $data['page_title'] = 'Rest Service';
        $data['page'] = 'rest_service';
        
        $this->load->view('templates/header', $data);
        $this->load->view('rest_service', $data);
        $this->load->view('templates/footer');
    }

    public function emailIsUnique($email) {
        $unique = $this->Database_model->client_email_unique($email);


        if ($unique == true) {
            return true;
        } else {

            $this->form_validation->set_message('emailIsUnique', 'This email address has already been registered.');
            return false;
        }
    }
    
    public function clientDataJSON($email,$passKey) {
        
        $newEmail = str_replace('_','@',$email);
        $data = $this->Database_model->client_data($newEmail);
        $row = $data->row();
        
        if ($passKey != 'fourScoreAndSevenYearsAgo')
            $row = '{error:invalidKey}';
        
        echo json_encode( $row);
        return json_encode($row);
    }

     public function clientModelUse($email,$symbol,$model,$capital,$summary) {
        
        $newEmail = str_replace('_','@',$email);
        
        $data = $this->Database_model->client_model_use($newEmail,$symbol,$model,$capital,$summary);

        return json_encode($data);
    }

    public function index() {
        $this->register();
    }

    private function url_exist($url) {//se passar a URL existe
        $c = curl_init();

        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_HEADER, 1); //get the header
        curl_setopt($c, CURLOPT_NOBODY, 1); //and *only* get the header
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); //get the response as a string from curl_exec(), rather than echoing it
        curl_setopt($c, CURLOPT_FRESH_CONNECT, 1); //don't use a cached version of the url
        if (!curl_exec($c)) {
            //echo $url.' inexists';
            $this->form_validation->set_message('valid_url', 'The website does not appear to be valid. Use your corporate website or copy and paste your LinkedIn URL.');
            return false;
        } else {
            //echo $url.' exists';
            return true;
        }
        //$httpcode=curl_getinfo($c,CURLINFO_HTTP_CODE);
        //return ($httpcode<400);
    }

    // fixme we need a good and reliable url validation routine
    public function valid_url($link = ' ') {

        //     if(url_exist($link))
        //     {
        //         echo 'exist';
        //     }


        $test = FALSE != filter_var($link, FILTER_VALIDATE_URL);

        if ($test == false) {
            $this->form_validation->set_message('valid_url', 'Please enter a valid website. Use your corporate website or copy and paste your LinkedIn URL.');
            return false;
        }

        return true;

        /*       echo "in callback";
          if (preg_match("(^(http://)?([-a-zA-Z0-9]+\.)+[A-Za-z]{2,4}([?\/]+[-&=\/\.\w]*)?$)", $link)) {
          $url_parsed = @parse_url($link);
          if (empty($url_parsed['scheme']))
          $link = 'http://' . $link;
          if (empty($url_parsed['path']))
          $link = $link . "/";
          //    if (http_file_status($link) == "200") {
          //        return TRUE;
          //    }

          return TRUE;
          }

          $this->form_validation->set_message('valid_url', 'This must be a valid live website. Use your corporate website or copy and paste your LinkedIn URL. Example: http://www.stanford.edu');
          return FALSE;
          }

          public function http_file_status($url, $followRedirects = true) {
          $url_parsed = @parse_url($url);
          if (empty($url_parsed['scheme']))
          $url_parsed = @parse_url('http://' . $url);
          if (!is_array($url_parsed))
          die('Processing Error - unable to parse url');
          extract($url_parsed);
          if (empty($port))
          $port = 80;
          if (empty($path))
          $path = '/';
          if (!empty($query))
          $path .= '?' . $query;
          $out = "HEAD $path HTTP/1.0\r\n";
          $out .= "Host: $host\r\n";
          $out .= "Connection: Close\r\n\r\n";
          if (!$fp = @fsockopen($host, $port, $es, $en, 5))
          return false;
          fwrite($fp, $out);
          while (!feof($fp)) {
          $s = fgets($fp, 128);
          if (($followRedirects) && (preg_match('/^Location:(.*)/i', $s, $matches))) {
          fclose($fp);
          return http_file_status(trim($matches[1]));
          }
          if (preg_match('@HTTP[/]1[.][01x][\s]{1,}([1-5][01][0-9])[\s].*$@', $s, $matches))
          $status = $matches[1];
          }
          fclose($fp);
          if (!empty($status))
          return $status;
          return false;
         * 
         */
    }

}