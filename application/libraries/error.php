<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Error
 * Error flashing library
 * 
 *
 * Features:
 * + To flash of stored  in session
 * 
 * Requirements:
 * PHP 5.0+, CodeIgniter 1.7.0+
 *
 * Usage:
 *
 * In your controller:
 * $this->load->library('error'); 
 * 
 * Syntax
 * $this->error->error_view(); : to show session error codes
 *
 * @package CodeIgniter
 * @subpackage Libraries
 * @category Error flashing
 * @author  Fatih Bazman : fatihbazman at gmail.com
 * @version  1.0
 * @license  http://creativecommons.org/licenses/by-sa/3.0/us/
 */


class Error
{
    
    public $CI;
	public $text;
    
/*
	Version 0.2.2.
*/	
    function Error()
    {
        $this->CI =& get_instance();
		log_message('debug', "Error Class Initialized");
    }

/*
	Version 0.2.2.
*/	
	function error_view()
	{
		if(is_array($this->CI->session->flashdata('msg')))
		{
			foreach($this->CI->session->flashdata('msg') as $row):
				if($this->_check_html($row) === TRUE) $this->text .= $row;
				else $this->text .= '<div class="alert alert-error">'.$row.'</div>';
			endforeach;
			return $this->text;
		}
		else if($this->CI->session->flashdata('msg'))
		{

			if($this->_check_html($this->CI->session->flashdata('msg')) === TRUE) $this->text= $this->CI->session->flashdata('msg');
			else $this->text = '<div class="alert alert-error">'.$this->CI->session->flashdata('msg').'</div>';
			
			return $this->text;
		}else return FALSE;
	}


/*
	Version 0.2.2.
*/	
	private function _check_html($input)
	{
		preg_match_all("|<[^>]+>(.*)</[^>]+>|U",$input,$output, PREG_PATTERN_ORDER);
		if(empty($output[0])) return FALSE;
		else return TRUE;
	}
}

