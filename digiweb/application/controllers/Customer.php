<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index(){
		$name = $this->uri->segment('2');
		$this->load->view('card/category/business-card');
		// $data = $this->CustomerModel->getdataby($name);
		// if (!$data) {
		// 	$this->load->view('admin/customer/index');
		// }else{
		// 	$this->load->view('admin/customer/index');
		// }
	}
	public function page($page='index'){
    	if($this->uri->segment('2')=='index'){
			redirect(site_url('/'.$this->uri->segment('1')));
		}else{
			$data="hello";
			$this->load->view('card/pages/'.$this->uri->segment('2').'',$data);
		}
	}
	function list(){
		try {
			
		} catch (Exception $e) {
			
		}
		$data['customer'] = $this->CustomerModel->getlist();
		$this->load->view('manager/customer/list',$data);
	}
	function card(){
		$id = $this->uri->segment('3');
		try {
			
		} catch (Exception $e) {
			
		}
		if($id !=''){
			$data['url']=$this->CustomerModel->geturlname($id);
			$this->load->view('manager/customer/card/add',$data);
		}else{
			$data['customer'] = $this->CustomerModel->getlist();
			$this->load->view('manager/customer/card/list',$data);	
		}
	}
	function add(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$CUID = 'TAPC'.rand(0, 1000000);
	            $code = rand(0, 10000);
				$customerData=array(
					'lead_channel' => $this->input->post('leadchannel'),
                    'customerUID' => $CUID,
                    'card_category' => $this->input->post('cardCategory'),
                    'card_material' => $this->input->post('cardMaterial'),
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'email_otp' => $code,
                    'company_cat' => $this->input->post('company_cat'),
                    'company_name' => $this->input->post('company_name'),
                    'company_url' => $this->input->post('company_url'),
                    'mobile_no' => $this->input->post('mobile_no'),
                    'password' => md5($this->input->post('password')),
                    'enable' => 0
                );
				if($this->CustomerModel->add($customerData)){
					$this->session->set_flashdata('success', 'Please Check Email for further process');
					redirect(site_url('Customer/list'));
				}else{
					$this->session->set_flashdata('error', 'Please Contact Admin');
					redirect(site_url('Customer/list'));
				}
			}
		} catch (Exception $e) {
			
		}
		$this->load->view('manager/customer/add');
	}
	function info(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$infoData=array(
					'lead_channel' => $this->input->post('leadchannel'),
                    'customerUID' => $CUID,
                    'card_category' => $this->input->post('cardCategory'),
                    'card_material' => $this->input->post('cardMaterial'),
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'email_otp' => $code,
                    'company_cat' => $this->input->post('company_cat'),
                    'company_name' => $this->input->post('company_name'),
                    'company_url' => $this->input->post('company_url'),
                    'mobile_no' => $this->input->post('mobile_no'),
                    'password' => md5($this->input->post('password')),
                    'enable' => 0
                );

			}
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$data['team'] = $this->CustomerModel->getteamby($this->uri->segment('3'));
			$this->load->view('manager/customer/info/add',$data);	
		}else{
			$this->load->view('manager/customer/info/list');	
		}
	}
	function team(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	            $code = rand(0, 10000);
				$customerData=array(
                    'lead_channel' => $this->input->post('leadchannel'),
                    'customerUID' => $CUID,
                    'card_category' => $this->input->post('cardCategory'),
                    'card_material' => $this->input->post('cardMaterial'),
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'email_otp' => $code,
                    'company_cat' => $this->input->post('company_cat'),
                    'company_name' => $this->input->post('company_name'),
                    'company_url' => $this->input->post('company_url'),
                    'mobile_no' => $this->input->post('mobile_no'),
                    'password' => md5($this->input->post('password')),
                    'enable' => 0
                );
                $TeamData=array(
                    'company_code' => $this->uri->segment('3'),
                    'company_name' => $this->input->post('company_name'),
                    'team_name' => $this->input->post('team_name'),
                    'designation' => $this->input->post('designation'),
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'email_otp' => $code,
                    'mobile_no' => $this->input->post('mobile_no'),
                    'whatsapp_business' => $this->input->post('WB'),
                    'about' => $this->input->post('aboutPerson'),
                    'profile_image' => $this->input->post('profileImage'),
                    'enable' => 0
                );
				if($this->CustomerModel->add($customerData)){
					$this->session->set_flashdata('success', 'Please Check Email for further process');
					redirect(site_url('Customer/list'));
				}else{
					$this->session->set_flashdata('error', 'Please Contact Admin');
					redirect(site_url('Customer/list'));
				}
			}
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$data['team'] = $this->CustomerModel->getteamby($this->uri->segment('3'));
			$this->load->view('manager/customer/team/add',$data);
		}else{
			$this->load->view('manager/customer/team/list');	
		}	
	}
	function social(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	            $code = rand(0, 10000);
				$customerData=array(
                    'company_name' => $this->input->post('companyName'),
                    'company_code' => $this->input->post('customerUID'),
                    'card_material' => $this->input->post('iconpack'),
                    'channel_name' => json_encode($this->input->post('social_channel_name')),
                    'channel_url' => json_encode($this->input->post('social_url')),
                    'username' => json_encode($this->input->post('social_visible'))
                );
                echo"<pre>";
                print_r($customerData);
                exit();
                $TeamData=array(
                    'company_code' => $this->uri->segment('3'),
                    'company_name' => $this->input->post('company_name'),
                    'team_name' => $this->input->post('team_name'),
                    'designation' => $this->input->post('designation'),
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'email_otp' => $code,
                    'mobile_no' => $this->input->post('mobile_no'),
                    'whatsapp_business' => $this->input->post('WB'),
                    'about' => $this->input->post('aboutPerson'),
                    'profile_image' => $this->input->post('profileImage'),
                    'enable' => 0
                );
				if($this->CustomerModel->add($customerData)){
					$this->session->set_flashdata('success', 'Please Check Email for further process');
					redirect(site_url('Customer/list'));
				}else{
					$this->session->set_flashdata('error', 'Please Contact Admin');
					redirect(site_url('Customer/list'));
				}
			}
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$this->load->view('manager/customer/social/add');
		}else{
			$this->load->view('manager/customer/social/list');	
		}
	}
	function product(){
		try {
			
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$data['team'] = $this->CustomerModel->getteamby($this->uri->segment('3'));
			$this->load->view('manager/customer/product/add',$data);
		}else{
			$this->load->view('manager/customer/product/list');	
		}
	}
	function service(){
		try {
			
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$this->load->view('manager/customer/service/add');
		}else{
			$this->load->view('manager/customer/service/list');	
		}
	}
	function catalogue(){
		try {
			
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$data['customer'] = $this->CustomerModel->getlist();
			$this->load->view('manager/customer/catalogue/add',$data);
		}else{
			$this->load->view('manager/customer/catalogue/list');	
		}
	}
	function catalogue_details(){
		try {
			
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$data['customer'] = $this->CustomerModel->getlist();
			$this->load->view('manager/customer/catalogue/details',$data);
		}else{
			$this->load->view('manager/customer/catalogue/list');	
		}
	}
	function gallery(){
		try {
			
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$this->load->view('manager/customer/gallery/add');
		}else{
			$this->load->view('manager/customer/gallery/list');	
		}
	}
	function payments(){
		try {
			
		} catch (Exception $e) {
			
		}
		if($this->uri->segment('3')!=''){
			$this->load->view('manager/customer/payments/add');
		}else{
			$this->load->view('manager/customer/payments/list');	
		}
	}
	function upgrade(){
		try {
			
		} catch (Exception $e) {
			
		}
		$data['customer'] = $this->CustomerModel->getlist();
		$this->load->view('manager/customer/card/upgrade',$data);
	}
}
