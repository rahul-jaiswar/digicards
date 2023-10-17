<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller {
    
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
		$this->load->view('institute/index');
	}
	function notice(){
		$this->load->view('institute/student/notice');
	}
	function attendence(){
		$this->load->view('institute/student/attendance');
	}
	function library(){
		$this->load->view('institute/student/library');
	}
	function community(){
		$this->load->view('institute/student/community');
	}
	function study(){
		$this->load->view('institute/student/material');
	}
	function vault(){
		$this->load->view('institute/student/vault');
	}
	function info(){
		$this->load->view('');
	}
}
