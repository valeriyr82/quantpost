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

class Client_model_use extends REST_Controller
{
    function model_get()
    {
        $client_id = $this->get('id');
        if(!$client_id)
        {
            $this->response(NULL, 400);
        }
        
        $client = $this->Database_model->client_model_use_get($client_id);
        
        if ($client) {
            $this->response($client);
        } else {
            $this->response(array('result' => 'Could not be found'), 404);
        }
    }
    
    function model_post()
    {
        $id = $this->post('id');
        $data = array(
               'email' => $this->post('email'),
               'symbol' => $this->post('symbol'),
               'model' => $this->post('model'),
               'capital' => $this->post('capital'),
               'summary' => $this->post('summary'),
            );
        if(!$id)
        {
            $this->response(NULL, 400);
        }
        
        $this->Database_model->client_model_use_set($id, $data);
        $this->response(array('result' => 'Success'), 200);
    }
}

?>
