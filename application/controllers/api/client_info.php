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

class Client_info extends REST_Controller
{
    function client_get()
    {
        $client_id = $this->get('id');
        if(!$client_id)
        {
            $this->response(NULL, 400);
        }
        
        $client = $this->Database_model->client_info_get($client_id);
        
        if ($client) {
            $this->response($client);
        } else {
            $this->response(array('result' => 'Could not be found'), 404);
        }
    }
    
    function client_post()
    {
        $id = $this->post('id');
        $data = array(
               'client_name' => $this->post('name'),
               'client_email' => $this->post('email'),
               'client_url' => $this->post('url'),
            );
        if(!$id)
        {
            $this->response(NULL, 400);
        }
        
        $unique = $this->Database_model->client_email_unique($data['client_email']);
        if ($unique == false) {
            $this->response(array('result' => 'Could not be set'), 404);
            return;
        }
        
        $result = $this->Database_model->client_info_set($id, $data);
        $this->response(array('result' => 'Success'), 200);
    }
}

?>
