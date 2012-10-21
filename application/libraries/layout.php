<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{

    private $CI;
    private $layout;
    
    function Layout($layout = "")
    {
        $this->CI =& get_instance();
        $this->layout = $layout;
    }

    function setLayout($layout)
    {
      $this->layout = $layout;
    }
    
    function view($view, $data=null, $return=false)
    {
        $data['content_for_layout'] = $this->CI->load->view($view,$data,true);
       
        if($return)
        {
            $output = $this->CI->load->view($this->layout,$data, true);
            return $output;
        }
        else
        {
            $this->CI->load->view($this->layout,$data, false);
        }
    }
}