<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	
	public function index(){
		$this->load->view('index');
	}
	public function panel(){
		$id = "rahul jaiswar";
		redirect(site_url($id));
	}
	public function customer($id){
		echo"template will be here";
	}
	public function contact(){
		$this->load->view('web/contact');
	}
	public function process(){
		$this->load->view('web/how-it-works');
	}
	public function company(){
		$this->load->view('web/company');
	}
	public function whyus(){
		$this->load->view('web/whyus');
	}
	public function community(){
		$this->load->view('web/community');
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
	
	function secretsanta(){
		$this->load->view('santa/login');
	}
	
	function campaign(){
		$this->load->view('santa/secret-santa-week');
	}
	function A_to_Z_SERVICES_PVT_LTD(){
	    redirect('https://oneclickdigicards.com/AtoZ-Services-Pvt-Ltd');
	}
	function BRIJESH_RATHOD(){
	    redirect('https://oneclickdigicards.com/BRIJESH-RATHOD');
	}
}
