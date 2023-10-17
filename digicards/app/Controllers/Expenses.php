<?php namespace App\Controllers;
use App\Models\CustomerModel;

class Expenses extends BaseController
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
		
	}
	function add(){

	}
	function list(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->orderBy('cust_id', 'DESC')->findAll()
		];
		return view('account/expense/list', $data);
	}
	function voucher(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->orderBy('cust_id', 'DESC')->findAll()
		];
		return view('account/expense/voucher', $data);
	}
}
