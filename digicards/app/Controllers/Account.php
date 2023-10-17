<?php namespace App\Controllers;
use App\Models\CustomerModel;

class Account extends BaseController
{
	private $customer = '' ;
	public function __construct(){
    	helper(['url','form']);
        $this->customer = new CustomerModel(); 

        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->uri = new \CodeIgniter\HTTP\URI();
    }
	public function index(){
		return view('account/index');
	}
	public function transaction(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->orderBy('cust_id', 'DESC')->findAll()
		];
		return view('account/transaction');
	}
}
