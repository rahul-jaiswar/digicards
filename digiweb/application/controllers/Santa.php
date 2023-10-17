<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santa extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->output->set_header('HTTP/1.0 200 OK');
        $this->output->set_header('HTTP/1.1 200 OK');
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        
    }
    
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
				    $data['customer'] = $this->SantaModel->getcustomer($mobileno);
				   
					$this->load->view('santa/gift',$data);
				}else{
					$this->session->set_flashdata('error', 'There are no gift schedule for this number');
	                redirect(site_url('Santa/index'));
				}
			}
		} catch (Exception $e) {
			
		}
		
		
	}
	public function customerdata(){
        $data['customer']=$this->SantaModel->getcustomerlist();
        $this->load->view('santa/customerlist',$data);
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
