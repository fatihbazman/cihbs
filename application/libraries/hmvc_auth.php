<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** application/libraries/hmvc_auth **/ 
class Hmvc_auth 
{
    function __construct(){

		$this->CI =& get_instance();
    }
	
	function destroy(){
		$this->CI->session->sess_destroy();
	}
	
	function set($array){
	
		$this->CI->session->set_userdata($array);
	}
	
	function get($key){
	
		if($this->CI->session->userdata($key)) return $this->CI->session->userdata($key);
		else return FALSE;
	}		
	
	function secure_password($email, $password)	{
	
		$salt = sha1($password.$this->CI->config->item('encryption_key'));
		return sha1($salt.$email);
	}	
	
    function is_user($data){
	
        $sql = "SELECT id, role, username FROM users WHERE email=? AND password=?";
        $query = $this->CI->db->query($sql, $data);
        if($query->num_rows() == 1) return $query->row_array();
        else return FALSE;
    }
	
	function is_admin(){
	
		if($this->get('role') == 'a') return TRUE;
		else return FALSE;
	}
	
}