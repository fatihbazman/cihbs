<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Controller.php";

class MY_Controller extends MX_Controller {

	function render($view,$data=NULL){
	
		$this->layout->setLayout('/layout_view');	
	
		$data['header_view'] = $this->load->view('header_view',$data,TRUE);
		$data['footer_view'] = $this->load->view('footer_view',$data,TRUE);		
		$this->layout->view($view,$data);
	
	}		
}