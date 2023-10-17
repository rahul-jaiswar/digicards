<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santa extends CI_Controller {

	public function index()
	{
		$this->load->view('santa/login');
	}
	function add(){
		$this->load->view('panel/santa/add');
	}
	function gift(){
		try {
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$mobileno = $this->input->post('mobile_no');
				if($this->SantaModel->login($mobileno)){
					redirect(site_url('Santa/gift'));
				}else{
					$this->session->set_flashdata('error', 'There are no gift schedule for this number');
	                redirect(site_url('Santa/index'));
				}
			}
		} catch (Exception $e) {
			
		}
		$this->load->view('santa/gift');
	}
	function open_gift(){
		$this->load->view('santa/gift-opened');
	}
	function message(){
		$this->load->view('santa/message');
	}
	function receiver(){
		$this->load->view('panel/santa/receiver');
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
	public function sswframe(){
		$this->load->view('santa/secret-santa-week');
	}
}
