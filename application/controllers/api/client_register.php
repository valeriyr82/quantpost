<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package        CodeIgniter
 * @subpackage    Rest Server
 * @category    Controller
 * @author        Phil Sturgeon
 * @link        http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Client_register extends REST_Controller
{
    function register_post()
    {
        $data = array(
               'client_name' => $this->post('name'),
               'client_email' => $this->post('email'),
               'client_url' => $this->post('url'),
            );
        
        $unique = $this->Database_model->client_email_unique($data['client_email']);
        if ($unique == false) {
            $this->response(array('result' => 'Could not be register'), 404);
            return;
        }
        
        $this->Database_model->register_client($data);
        $this->response(array('result' => 'Success'), 200);
    }
    
    function unregister_post()
    {
        $email = $this->post('email');
        
        $unique = $this->Database_model->client_email_unique($email);
        if ($unique) {
            $this->response(array('result' => 'Could not be unregister'), 404);
            return;
        }
        
        $this->Database_model->unregister_client($email);
        $this->response(array('result' => 'Success'), 200);
    }
}

?>
