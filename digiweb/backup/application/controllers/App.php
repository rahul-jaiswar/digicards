<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

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
	public function panel(){
		$id = "rahul jaiswar";
		redirect(site_url($id));
	}
	public function customer($id){
		echo"template will be here";
	}
	public function contact(){
		try {
			
		} catch (Exception $e) {
			
		}
		$this->load->view('web/contact');
	}
	public function process(){
		try {
			
		} catch (Exception $e) {
			
		}
		$this->load->view('web/how-it-works');
	}
	function blog(){
		$this->load->view('blog/index');
	}
	function read(){
		$this->load->view('blog/read');
	}
	function faq(){
		$this->load->view('web/faq');
	}
	function privacy_policy(){
		$this->load->view('web/privacy-policy');
	}
	function terms_conditions(){
		$this->load->view('web/terms-conditions');
	}
	function campaign(){
		$this->load->view('santa/secret-santa-week');
	}
}
