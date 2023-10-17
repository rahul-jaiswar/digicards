<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {

	public function index()
	{
		$this->load->view('card/index');
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
