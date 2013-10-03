<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client_model
 *
 * @author lwdye
 */
class Database_model extends CI_Model{
    
    public function __construct()
	{
        
        //Query the data table for every record and row
     try{        
                parent::__construct();
                
 //               $x = 1/0;
      
        } catch(Exception $e){
            log_message('debug',$e->getMessage()); // use codeigniters built in logging library
            show_error($e->getMessage()); // or echo $e->getMessage()
        }   
    }

    public function register_client($data)
    {        
        // save for later
        // $sha1_password = sha1($data['password']);
        $query_str = "INSERT INTO client_registration (client_name,client_email,client_url) VALUES(?,?,?)";
                
       // show_error($query_str); // or echo $e->getMessage()
        $this->db->query($query_str, array($data['name'],$data['email'],$data['url']));
        
    //     show_error($data); // or echo $e->getMessage()
        
        //print_r($data);
        
    }
    
    public function unregister_client($email)
    {
        $this->db->delete('client_registration', array('client_email' => $email)); 
    }
    
    public function client_model_use($email,$symbol,$model,$capital,$summary)
    {        
        // save for later
        // $sha1_password = sha1($data['password']);
        
        $query_str = "INSERT INTO client_model_use(email,symbol,model,capital,summary) VALUES(?,?,?,?,?)";
                
        // show_error($query_str); // or echo $e->getMessage()
        $result = $this->db->query($query_str, array($email,$symbol,$model,$capital,$summary));
        
        // show_error($data); // or echo $e->getMessage       
        //print_r($result);        
    }
    
    public function client_model_use_get($id)
    {
        $query_str = "SELECT * from client_model_use WHERE id = ?";
        
        $result = $this->db->query($query_str, $id);        
        $result = $result->row_array();
        return $result;
    }
    
    public function client_model_use_set($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('client_model_use', $data);
    }
    
    public function client_email_unique($email)
    {
        $result = $this->client_data($email);
        
        if($result->num_rows() > 0)
        {
            return false;
        }  else {
            
            return true;   
        }        
    }
    
    public function client_data($email)
    {     
        // save for later
        // $sha1_password = sha1($data['password']);
        $query_str = "SELECT * from client_registration WHERE client_email = ?";
        
        $result = $this->db->query($query_str,$email);
        return $result;
    }
    
    public function client_info_get($id)
    {     
        $query_str = "SELECT * from client_registration WHERE id = ?";
        
        $result = $this->db->query($query_str, $id);        
        $result = $result->row_array();
        return $result;
    }
    
    public function client_info_set($id, $data)
    {     
        $this->db->where('id', $id);
        $this->db->update('client_registration', $data);
    }
     
}

?>
