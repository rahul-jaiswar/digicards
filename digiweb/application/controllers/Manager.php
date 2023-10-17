<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function index(){
		if($this->ManagerModel->is_logged_in()){
            $this->load->view('manager/index');
        }else{
        	$this->load->view('manager/login');
        }
	}
	public function page($page='index'){
		// echo"<pre>";
		// print_r($page);
		// exit();
    	if($this->uri->segment('3')=='home'){
			$this->load->view('manager/pages/home');
		}else{
			$data="hello";
			$this->load->view('manager/pages/'.$this->uri->segment('2').'',$data);
		}
	}
	public function login(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				$username = $this->input->post('username');
				$password = md5($this->input->post('userpassword'));
				if($this->ManagerModel->login($username, $password)){

					$this->session->set_flashdata('success', 'Welcome to Tap Savvy Manager Dashboard.');
					redirect(site_url('Manager/index'));
				}else{
					$this->session->set_flashdata('error', 'Username or password do not match.');
	                redirect(site_url('Manager/login'));
				}
			}
		} catch (Exception $e) {
			
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Manager/login'));
	}
	public function contact(){
		try {
			
		} catch (Exception $e) {
			
		}
		$this->load->view('web/contact');
	}
	public function register(){
		$this->load->view('users/register');
	}
	public function sendemail($fname = FALSE, $email = FALSE, $code = FALSE , $subject = FALSE){
    	
    	$sender_email = $this->config->item('sender_email');
        $sender_name = $this->config->item('sender_name');
        $html = "<p>Hi," . $fname . "</p>" .
                "<p>Please click the following link to verify your email<br/>" .
                "<a href='" . site_url('Partner/verify_email/' . $code) . "'>Verification Code</a></p>" .
                "<p>Best Regards,<br/>" . $sender_name . "</p>";
        
        $config['mailtype'] = 'html'; 
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);
        $this->email->from($sender_email, $sender_name);
        $this->email->to($email,$fname);
        $this->email->subject($subject);
        $this->email->message($html);
        if (!$this->email->send() && $subject == 'Email Verification') {

	      show_error($this->email->print_debugger()); 
	      redirect(site_url('Partner/register'));
	  	}elseif(!$this->email->send() && $subject == 'Reset Password'){
	  	  
	  	  show_error($this->email->print_debugger()); 
	  	  redirect(site_url('Partner/forgot'));
	  	}
	    else{
	    	if($subject == 'Email Verification'){
	    		return true;
	    		redirect(site_url('Partner/register'));
	    	}else{
	    		return true;
	    		redirect(site_url('Partner/forgot'));
	    	}
	 }
    }
}
