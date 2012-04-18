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
				
                redirect(site_url('welcome'));
					
			} else{

				$data = array_merge($data,$get_user);
                $data['logged_in'] = TRUE; 
                unset($data['password']); 

                $this->hmvc_auth->set($data); 
                redirect(site_url('dashboard')); // modüle yönlendiriliyor.
					
            }
				
        }
    }
    
    public function logout(){
        
		$this->hmvc_auth->destroy();
        redirect(site_url('welcome'));
    }

    /*
     * Yeni kullanıcı ekle
     * Lütfen kullanıcı oluşturduktan sonra silin güvenlik açığı oluşturur!

    public function new_user($email='', $password=''){
		$email = 'fatih@kolikler.com';
		$password = 'asdasd';
	
	
        $password = self::secure_password($email,$password);
        $this->db->insert('users', array('email' => $email, 'password' => $password));

        redirect(site_url('login'));
    }
	*/

}
