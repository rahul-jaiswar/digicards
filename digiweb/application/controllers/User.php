<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if($this->uri->segment('3')!=''){
			// echo"<pre>";
			// print_r($this->uri->segment('3'));
			// exit();
		}else{
			$this->load->view('index');
		}
	}
	public function login(){
		// try {
		// 	if ($this->input->server('REQUEST_METHOD') == 'POST') {
		// 		$username = $this->input->post('username');
		// 		$password = md5($this->input->post('password'));
		// 		if($this->UserModel->login($username, $password)){
		// 			$this->session->set_flashdata('success', 'Welcome to Tap Savvy Card Management Dashboard.');
		// 			redirect(site_url('User/index'));
		// 		}else{
		// 			$this->session->set_flashdata('error', 'Username or password do not match.');
	    //             redirect(site_url('User/login'));
		// 		}
		// 	}
		// } catch (Exception $e) {
			
		// }
		$this->load->view('panel/index');
	}
	public function register(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$this->form_validation->set_rules('fname','First Name','trim|required');
				$this->form_validation->set_rules('lname','Last Name','trim|required');
				$this->form_validation->set_rules('emailid','Email','trim|required');
				$this->form_validation->set_rules('pass','Password','trim|required');
				if($this->form_validation->run() == FALSE){
		           	$this->session->set_flashdata('error', 'Input is Not Proper Please Review Data Once');
					redirect(site_url('Partner/register'));
		        }else{
		            //Create Data Array
		            $PUID = 'PID'.rand(0, 1000000);
		            $username = 'UID'.rand(0, 10000); 
		            $code = rand(0, 10000);
	                $partnerData=array(
	                    'partnerUID' => $PUID,
	                    'firstname' => $this->input->post('fname'),
	                    'lastname' => $this->input->post('lname'),
	                    'personal_emailId' => $this->input->post('emailid'),
	                    'username' => $username,
	                    'password' => md5($this->input->post('pass')),
	                    'email_otp' => $code,
	                    'enable' => 0
	                );
	                /*echo"<pre>";
	                print_r($partnerData);
	                exit();*/
	                //$subject = 'Email Verification';
					//$data = $this->sendemail($data[0]->firstname,$data[0]->email_id,$data[0]->username,$data[0]->password,$subject);
					//if($data >0){
						if($this->Partner_md->add($partnerData)){
							$this->session->set_flashdata('success', 'Please Check Email for further process');
							redirect(site_url('Partner/login'));
						}else{
							$this->session->set_flashdata('error', 'Please Contact Admin');
							redirect(site_url('Partner/register'));
						}
					/*}else{

					}*/
				  
		        }
			}else{
				$this->session->set_flashdata('index', '');
			}
			
		} catch (Exception $e) {
			
		}
		$this->load->view('users/register');
	}
}
