<?php 
namespace App\Controllers;
use App\Models\CustomerModel;
use App\Models\CardModel;
use App\Models\TeamModel;
use App\Models\SocialModel;
use App\Models\ServiceModel;
use App\Models\ProductModel;
use App\Models\CatalogueModel;
use App\Models\GalleryModel;
use App\Models\PaymentModel;

class Customer extends BaseController{

	private $customer = '' ;
	private $card = '' ;
	private $team = '' ;
	private $social = '' ;
	private $service = '' ;
	private $product = '' ;
	private $catalogue = '' ;
	private $gallery = '' ;
	private $payment = '' ;

	public function __construct(){
    	helper(['url','form']);
        $this->customer = new CustomerModel(); 
        $this->card = new CardModel(); 
        $this->team = new TeamModel(); 
        $this->social = new SocialModel(); 
        $this->service = new ServiceModel(); 
        $this->product = new ProductModel(); 
        $this->catalogue = new CatalogueModel(); 
        $this->gallery = new GalleryModel(); 
        $this->payment = new PaymentModel(); 

        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }
	public function list(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->orderBy('cust_id', 'DESC')->findAll()
		];
		return view('customer/list', $data);
	}
	function validateemail(){
		$emailid = $this->request->getPost('emailval');
		$results = $this->customer->where('email', $emailid)->countAllResults();
		if ($results > 0) {
			return $this->response->setJSON([
	            'error' => true,
	        ]);
		} else {
			return $this->response->setJSON([
	            'error' => false,
	        ]);
		}
	}
	function validatemobile(){
		$mobile = $this->request->getPost('mobileval');
		$results = $this->customer->where('mobile_no', $mobile)->countAllResults();
		if ($results > 0) {
			return $this->response->setJSON([
	            'error' => true,
	        ]);
		} else {
			return $this->response->setJSON([
	            'error' => false,
	        ]);
		}
	}
	public function add(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$emailotp = rand(0, 1000000);
				$UID = 'TSC'.rand(0, 10000); 
				$profile = null;
				if($this->request->getFile('profile_image')!=''){
			        $image = $this->request->getFile('profile_image');
		            $image->move(WRITEPATH . 'uploads/profile/');
		            $profile = $image->getName();
				}
				$customer=[
					'company_code'=> $UID,
					'lead_channel'=> $this->request->getPost('lead_channel'),
					'profile_image'=> $profile,
					'firstname'=> $this->request->getPost('firstname'),
					'lastname'=> $this->request->getPost('lastname'),
					'username'=> $this->request->getPost('username'),
					'company_cat'=> $this->request->getPost('company_cat'),
					'company_name'=> $this->request->getPost('company_name'),
					'company_url'=> $this->request->getPost('company_url'),
					'email'=> $this->request->getPost('email_address'),
					'email_otp'=> $emailotp,
					'mobile_no'=> $this->request->getPost('mobile_no'),
					'password'=> md5($this->request->getPost('password')),
					'enable'=> 1,
				];
				$template=[
					'company_code'=> $UID,
					'temp_name'=> 'Default',
					'temp_cat'=> 'business',
					'enable'=> 1
				];
				$info=[
					'company_code'=> $UID,
					'company_name'=> $this->request->getPost('company_name'),
					'card_category'=> $this->request->getPost('card_category')
				];
				if($this->customer->insert($customer)){
					$this->db->table('card_template_tb')->insert($template);
					$this->db->table('card_info_tb')->insert($info);
					$this->session->setFlashdata('msg', 'Customer Registered Successfully');
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
				}
				$data = [
					'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
					'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
					'customer' => $this->customer->orderBy('cust_id', 'DESC')->findAll()
				];
				return redirect()->to('Customer/list')->withInput($data);
            }
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('customer/add', $data);
	}
	public function update($id = null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = $this->request->getVar();
				$this->customer->set($data)->where('company_code',$id)->update();
				$this->session->setFlashdata('msg', 'Customer Updated Successfully');
				return redirect()->to('Customer/update/'.$id);
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'custdata' => $this->customer->where('company_code', $id)->first(),
		];
		// echo"<pre>";
		// print_r($data);
		// exit();
		return view('customer/update', $data);
	}
	public function delete($id = null){
		if($this->customer->where('company_code', $id)->delete()){
			$this->db->table('card_template_tb')->where('company_code', $id)->delete();
			$this->db->table('card_info_tb')->where('company_code', $id)->delete();
			$this->db->table('card_info_tb')->where('company_code', $id)->delete();
			$this->session->setFlashdata('msg', 'Customer Deleted Successfully');
		}
		else{
			$this->session->setFlashdata('msg', 'Something went wrong');
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->orderBy('cust_id', 'DESC')->findAll()
		];
		return redirect()->to('Customer/list')->withInput($data);
    }
    function card(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'cardlist' => $this->card->orderBy('card_id', 'DESC')->findAll()
		];
		// echo"<pre>";
		// print_r($data);
		// exit();
		return view('customer/card', $data);
	}
	// Team Manager
	function team(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customerlist' => $this->customer->orderBy('cust_id', 'DESC')->findAll(),
			'designationlist' => $this->db->table('team_designation_tb')->get()->getResult(),
			'teamnamelist' => $this->db->table('team_cat_tb')->get()->getResult(),
			'teamcount' => $this->team->orderBy('cteam_id')->findAll(),
		];
		return view('card/team', $data);
	}
	function insertCategory(){
		$data = $this->request->getVar();
		$this->db->table('team_cat_tb')->insert($data);
		$this->session->setFlashdata('msg', 'Team Category Added successfully');
		return redirect()->to('Customer/team');
	}
	function deleteCategory($cat=null){
		$this->db->table('team_cat_tb')->where('tcat_name', $cat)->delete();
		$this->session->setFlashdata('msg', 'Team Category Deleted successfully');
		return redirect()->to('Customer/team');
	}
	function insertDesignation(){
		$data = $this->request->getVar();
		$this->db->table('team_designation_tb')->insert($data);
		$this->session->setFlashdata('msg', 'Designation Category Added successfully');
		return redirect()->to('Customer/team');
	}
	function deleteDesignation($dest=null){
		$this->db->table('team_designation_tb')->where('tdesignation_name', $dest)->delete();
		$this->session->setFlashdata('msg', 'Designation Category Deleted successfully');
		return redirect()->to('Customer/team');
	}
	// Team Manager

	// Social Media 
	function social(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = $this->request->getVar();
				$this->db->table('social_channel_tb')->insert($data);
				$this->session->setFlashdata('msg', 'Channel Category Added successfully');
				return redirect()->to('Customer/social');
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'socialchannellist' => $this->db->table('social_channel_tb')->get()->getResult(),
		];
		return view('card/social', $data);
	}
	function deleteChannel($channel=null){
		$this->db->table('social_channel_tb')->where('channel_name', $channel)->delete();
		$this->session->setFlashdata('msg', 'Channel Category Deleted successfully');
		return redirect()->to('Customer/social');
	}
	// Social Media

	// Product
	function product(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = $this->request->getVar();
				$this->db->table('product_category_tb')->insert($data);
				$this->session->setFlashdata('msg', 'Product Category Added successfully');
				return redirect()->to('Customer/product');
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customerlist' => $this->customer->orderBy('cust_id', 'DESC')->findAll(),
			'productcategorylist' => $this->db->table('product_category_tb')->get()->getResult(),
		];
		return view('card/product', $data);
	}
	function productStatus($cat=null){
		$this->db->table('product_category_tb')->set('enable','0')->where('category_name',$cat)->update();
		$this->session->setFlashdata('msg', 'Category Status Updated Successfully');
		return redirect()->to('Customer/product');
	}
	function delProductCategory($category=null){
		$this->db->table('product_category_tb')->where('category_name', $category)->delete();
		$this->session->setFlashdata('msg', 'Product Category Deleted successfully');
		return redirect()->to('Customer/product');
	}
	function insertServiceCat(){
		
	}
	function service($id =null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = $this->request->getVar();
				$this->db->table('service_category_tb')->insert($data);
				$this->session->setFlashdata('msg', 'Service Category Added successfully');
				return redirect()->to('Customer/service');
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customerlist' => $this->customer->orderBy('cust_id', 'DESC')->findAll(),
			'servicecatlist' => $this->db->table('service_category_tb')->get()->getResult(),
		];
		return view('card/service', $data);
	}
	function deleteService($service=null){
		$this->db->table('service_category_tb')->where('scategory_name', $service)->delete();
		$this->session->setFlashdata('msg', 'Service Category Deleted successfully');
		return redirect()->to('Customer/service');
	}
	function catalogue(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = $this->request->getVar();
				$this->db->table('catalogue_category_tb')->insert($data);
				$this->session->setFlashdata('msg', 'Catalogue Category Added successfully');
				return redirect()->to('Customer/catalogue');
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customerlist' => $this->customer->orderBy('cust_id', 'DESC')->findAll(),
			'cataloguecatlist' => $this->db->table('catalogue_category_tb')->get()->getResult()
		];
		return view('card/catalogue', $data);
	}
	function deleteCatalogue($category=null){
		$this->db->table('catalogue_category_tb')->where('ccategory_name', $category)->delete();
		$this->session->setFlashdata('msg', 'Catalogue Category Deleted successfully');
		return redirect()->to('Customer/catalogue');
	}
	function gallery($id =null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'cardlist' => $this->card->orderBy('card_id', 'DESC')->findAll()
		];
		return view('card/gallery', $data);
	}
	function payments($id =null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = $this->request->getVar();
				$this->db->table('pay_channel_tb')->insert($data);
				$this->session->setFlashdata('msg', 'Payment Channel Category Added successfully');
				return redirect()->to('Customer/payments');
			}	
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customerlist' => $this->customer->orderBy('cust_id', 'DESC')->findAll(),
			'paymentcatlist' => $this->db->table('pay_channel_tb')->get()->getResult(),
			'bankpayment' => $this->db->table('card_payment_tb')->get()->getResult()
		];
		return view('card/payments', $data);
	}
	function deleteUPIChannel($category=null){
		$this->db->table('pay_channel_tb')->where('upichannel_name', $category)->delete();
		$this->session->setFlashdata('msg', 'Payment UPI Channel Deleted successfully');
		return redirect()->to('Customer/payments');
	}
	function bankPayments(){
		$data = $this->request->getVar();
		$this->db->table('card_payment_tb')->insert($data);
		$this->session->setFlashdata('msg', 'Bank Details Added successfully');
		return redirect()->to('Customer/payments');
	}
	function deleteBankDetails($details=null){
		$this->db->table('card_payment_tb')->where('bank_name', $details)->delete();
		$this->session->setFlashdata('msg', 'Bank Details Deleted successfully');
		return redirect()->to('Customer/payments');

	}
	
}