<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller{

    function __construct() {
	
        parent::__construct();

		if(! $this->hmvc_auth->get('logged_in')) exit('Yetkili değilsiniz');
        
//		$this->output->enable_profiler(TRUE);
		
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

	private function render($view,$data=NULL){
	
		$this->layout->setLayout('/layout_view');	
	
		$data['header_view'] = $this->load->view('header_view',$data,TRUE);
		$data['footer_view'] = $this->load->view('footer_view',$data,TRUE);		
		$this->layout->view($view,$data);
	
	}	
	
    public function index(){
        $data['username'] = $this->hmvc_auth->get('username')." ".$this->hmvc_auth->get('role');
		
		$this->render('dashboard_view', $data);
    }
	
	public function get(){
		$data['id'] = $this->uri->segment(3);
		
		$this->render('dashboard_view', $data);
	}
	
}

