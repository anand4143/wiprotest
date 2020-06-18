<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Model
        $this->load->model('users');
       
        // Session
        $this->load->library('session');
    }

	public function index()
	{
		$this->load->view('admin/login/admin_login');
    }

    public function login(){
        //echo "<pre>";print_r($this->input->post());die("i m here");
       
            $this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE){
                echo "anand";
               // redirect('admin/login');
               $this->load->view('admin/login/admin_login');
			}else{
                echo "shukla";
                echo "<li>".$username = $this->input->post('username');
                echo "<li>".$password = base64_encode($this->input->post('password'));
                
                echo "<li>".$isValid = $this->users->isValidate($username,$password, 1);
                //echo "<pre>";print_r($isValid);die("i m her22222e");
                if($isValid){
                    $userData = array(
                        'email'     => $isValid['email'],
                        'firstName' => $isValid['firstName'],
                        'lastName'  => $isValid['lastName'],
                        'userType'  => $isValid['userType'],
                        'logged_in' => TRUE
                    );        
                    $this->setSessionData($userData);                
                    redirect('dashboard/landing');
                }else{
                    echo "neeraj";die('hello');
                        $this->session->set_flashdata('error',"Invalid username or password!");
                        //redirect('admin/login');
                }
            }
    
}
      
    

    public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('userSession');
        $this->session->sess_destroy();
        redirect('login');
    }

    

    
}
