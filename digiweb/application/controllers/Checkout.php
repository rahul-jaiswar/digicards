<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		if($this->uri->segment('3')!=''){
			// echo"<pre>";
			// print_r($this->uri->segment('3'));
			// exit();
		}else{
			$this->load->view('checkout/index');
		}

	}
	function add(){
		$this->load->view('cart/index');
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
}
