<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {

	public function index(){
		$name = $this->uri->segment('1');
		if ($name !=''){
			$company = $this->CustomerModel->getdataby($name);
            if($company!=''){
                $data['details'] = $this->CardModel->getdataby($company->company_code);
                $this->load->view('card/category/index',$data);
            }else{
                $this->load->view('card/no-card');
            }
		}else{
			redirect(site_url('Manager/login'));
		}
	}
    function sample($var =null){
        
        $data['template'] = $this->TemplateModel->gettempdataby($var);
        // echo"<pre>";
        // print_r($data);
        // exit();
        $this->load->view('card/sample/index',$data);
    }
	function preview(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

			}
		} catch (Exception $e) {
			
		}
        $data['company'] = $this->CustomerModel->getinfo($this->uri->segment('3'));
        $data['details'] = $this->CardModel->getinfoby($this->uri->segment('3'));
		$this->load->view('panel/card/view',$data);
	}
    function vcard(){
        return utf8_encode('BEGIN:VCARD
        VERSION:4.0
        N:;'.'Rahul'.';;;
        FN:'.'Rahul'.'
        EMAIL:'.'Rahul@gmail.com'.'
        ORG:'.'Rahul'.'
        TEL:'.'7738'.'
        TEL;type=FAX:'.'122'.'
        URL;type=PREF:'.'https://google.com'.'
        ADR:;'.'address'.';;;;;Spain
        END:VCARD');
    }
	function info(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

			}
		} catch (Exception $e) {
			
		}
        $data = $this->CardModel->getinfoby($this->session->userdata('UID'));
		$this->load->view('panel/card/info',$data);
	}
	function team($id=null){
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
		$this->load->view('panel/card/team',$id);	
	}
	function social($id=null){
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
		$this->load->view('panel/card/social',$id);	
	}
	function product($id=null){
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
		$this->load->view('panel/card/product',$id);	
	}
	function service($id=null){
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
		$this->load->view('panel/card/service',$id);
	}
	function catalogue($id=null){
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
		$this->load->view('panel/card/catalogue',$id);
	}
	function gallery($id=null){
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
		$this->load->view('panel/card/gallery',$id);	
	}
	function payments($id=null){
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
		$this->load->view('panel/card/payments',$id);	
	}
	function upgrade(){
		$this->load->view('panel/card/upgrade');	
	}
}