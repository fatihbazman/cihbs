<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }
	
	private function render($view,$data=NULL){
	
		$this->layout->setLayout('/layout_view');

		$data['header_view'] = $this->load->view('header_view',$data,TRUE);
		$data['footer_view'] = $this->load->view('footer_view',$data,TRUE);	
		$this->layout->view($view,$data);

	}

	public function index()
	{
		$this->render('main_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */