<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function index()
	{
		$this->load->view('panel/index');
	}
	//admin@gmail.com
	public function login(){
		try {
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				if($this->PanelModel->login($email, $password)){
					$this->session->set_flashdata('success', 'Welcome to Tap Savvy Card Management Dashboard.');
					redirect(site_url('Panel/index'));
				}else{
					$this->session->set_flashdata('error', 'Username or password do not match.');
	                redirect(site_url('Panel/login'));
				}
			}
		} catch (Exception $e) {
			
		}
		$this->load->view('panel/login');
	}
	public function register(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$this->form_validation->set_rules('name','First Name','trim|required');
				$this->form_validation->set_rules('email','Email','trim|required');
				$this->form_validation->set_rules('mobileno','Mobile No','trim|required');
				$this->form_validation->set_rules('password','Password','trim|required');
				if($this->form_validation->run() == FALSE){
		           	$this->session->set_flashdata('error', 'Input is Not Proper Please Review Data Once');
					redirect(site_url('Panel/register'));
		        }else{
		            //Create Data Array
		            $code = rand(0, 10000);
	                $customerData=array(
	                    'lead_channel' => 'Web User',
	                    'firstname' => $this->input->post('name'),
	                    'email' => $this->input->post('email'),
	                    'mobile_no' => $this->input->post('mobileno'),
	                    'password' => md5($this->input->post('password')),
	                    'email_otp' => $code,
	                    'enable' => 0
	                );
	                // echo"<pre>";
	                // print_r($customerData);
	                // exit();
	                //$subject = 'Email Verification';
					//$data = $this->sendemail($data[0]->firstname,$data[0]->email_id,$data[0]->username,$data[0]->password,$subject);
					//if($data >0){
						if($this->PanelModel->add($customerData)){
							$this->session->set_flashdata('success', 'Please Check Email for further process');
							redirect(site_url('Panel/login'));
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
		$this->load->view('panel/register');
	}
	public function add_santa(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				
		            //Create Data Array
		            $code = rand(0, 10000);
	                $customerData=array(
	                    'lead_channel' => 'Web User',
	                    'firstname' => $this->input->post('firstname'),
	                    'email' => $this->input->post('email'),
	                    'mobile_no' => $this->input->post('mobile_no'),
	                    'address' => $this->input->post('address'),
	                    'about_us' => $this->input->post('about_us'),
	                    'intro_video' => $this->input->post('intro_video'),
	                    'profile_image' => $this->input->post('profile_image'),
	                    'sup_contact_no' => $this->input->post('sup_contact_no'),
	                    'whatsapp_business' => $this->input->post('whatsapp_business'),
	                    'map_link' => $this->input->post('map_link'),
	                    'cprofile_pdf' => $this->input->post('cprofile_pdf'),
	                    'email_otp' => $code,
	                    'enable' => 0
	                );
	                // echo"<pre>";
	                // print_r($customerData);
	                // exit();
	                //$subject = 'Email Verification';
					//$data = $this->sendemail($data[0]->firstname,$data[0]->email_id,$data[0]->username,$data[0]->password,$subject);
					//if($data >0){
						if($this->PanelModel->add($customerData)){
							$this->session->set_flashdata('success', 'Will Call You Shortly');
							redirect(site_url('Panel/index'));
						}else{
							$this->session->set_flashdata('error', 'Please Contact Support');
							redirect(site_url('Panel/index'));
						}
					/*}else{

					}*/
			
			}else{
				$this->session->set_flashdata('index', '');
			}
			
		} catch (Exception $e) {
			
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Panel/login'));
	}
	public function forgot(){
		try {
			
		} catch (Exception $e) {
			
		}
		$this->load->view('panel/forgot');
	}
	public function card(){
		try {
			
		} catch (Exception $e) {
			
		}
		$this->load->view('panel/card');
	}
	public function update(){
		try {
			
		} catch (Exception $e) {
			
		}
		$this->load->view('panel/update');
	}
	
}
