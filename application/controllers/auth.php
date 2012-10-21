<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MX_Controller{

    function __construct(){
	
        parent::__construct();
    }


    public function index(){
	
        self::login(); // Login fonksiyonuna git
    }

    public function login(){
		
        if ( $this->hmvc_auth->get('logged_in') == TRUE ){ 
		
            redirect((site_url('dashboard')));
        }
        else{

            $data = array();
            $data = $this->input->post(); 
            $data['password'] = $this->hmvc_auth->secure_password($data['email'],$data['password']); 
            unset($data['login']); 

			$get_user = $this->hmvc_auth->is_user($data);
				
            if($get_user === FALSE){ 
			
				$this->session->set_flashdata('msg', 'Hatalı giriş!');
                redirect(site_url('welcome'));
					
			} else{

				$data = array_merge($data,$get_user);
                $data['logged_in'] = TRUE; 
                unset($data['password']); 

                $this->hmvc_auth->set($data); 
				
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Hoşgeldiniz!</div>');
                redirect(site_url('dashboard')); // modüle yönlendiriliyor.
					
            }
				
        }
    }
    
    public function logout(){
        
		$this->hmvc_auth->destroy();
        redirect(site_url('welcome'));
    }

}
