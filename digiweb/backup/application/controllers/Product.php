<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function  __construct(){
        parent::__construct();

    }
	public function details($id){
		$data = $this->product_md->getdataby($id);
		$this->load->view('product/info',$data);
	}
	public function register(){
		$this->load->view('users/register');
	}
}
