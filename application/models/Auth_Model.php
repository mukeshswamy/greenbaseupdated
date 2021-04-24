<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model 
{
    function can_login($email, $password)  
    {  
        $this->db->select('*');
        $this->db->from('users_auth');
        $this->db->where('email', $email);  
        $this->db->where('password', $password);
        return $this->db->get()->result_array(); 
    }
}
    
