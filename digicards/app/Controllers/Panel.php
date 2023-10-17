<?php namespace App\Controllers;
use App\Models\UserModel;

class Panel extends BaseController
{	
	private $user = '' ;
    public function __construct(){
    	helper(['url','form']);
        $this->user = new UserModel(); 
        $session = \Config\Services::session();
    }
	public function index(){
		if (session()->get('emailid')!='') {
			$data = [
				'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
				'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
			];
            return view('index', $data);
        }else{
         	$data = [
		 		'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
		 		'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		 	];
		 	return redirect()->to('Panel/login')->withInput($data);
        }
	}
	public function login(){
		$session = session();
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				$data = array('email'=>$this->request->getVar('email'),'password'=>md5($this->request->getVar('password')));       
		        $user =  $this->user->where($data); 
		        $rows = $this->user->countAllResults();  
		        if($rows==1){
		        	$ses_data = [
						'emailid'    => $this->request->getVar('email'),
						'logged_in'     => TRUE
				 	];
				  	$session->set($ses_data);
				 	return redirect()->to('Panel/index');
		        }else{
		            $session->setFlashdata('msg', 'Wrong Password');
				 	return redirect()->to('Panel/login');
		        }

				
         		// $useremail = $this->request->getPost('email');
         		// $password = $this->request->getPost('password');
         		// $data = $usermodel->where('email', $useremail)->first();
         		// echo"<pre>";
         		// print_r($useremail);
         		// print_r($password);
         		// print_r($data);
         		// exit();
         		// if($data){
				// 	if(md5($password) == $data['password']){
				// 	 	$ses_data = [
				// 			'id'       => $data['users_id'],
				// 			'UID'     => $data['userUID'],
				// 			'firstname'     => $data['firstname'],
				// 			'lastname'     => $data['lastname'],
				// 			'emailid'    => $data['email'],
				// 			'logged_in'     => TRUE
				// 	 	];
				// 	  	$session->set($ses_data);
				// 	 	return redirect()->to('Panel/index');
				// 	}else{
				// 	 	$session->setFlashdata('msg', 'Wrong Password');
				// 	 	return redirect()->to('Panel/login');
				// 	}
	         	// }else{
	            //  	$session->setFlashdata('msg', 'You are Not Registered Yet!');
	            //  	return redirect()->to('Panel/login');
	         	// }
        	}	
	    }catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('auth-login',$data);
	}
	public function logout(){
		session()->destroy();
		return redirect()->to('Panel/login');
	}
	function forgot() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				
			}else{

			}
		} catch (Exception $e) {
			
		}
        $this->load->view('partner/forgot');
    }
    function reset(){
    	try {
    			
    	} catch (Exception $e) {
    		
    	}
    	$this->load->view('partner/reset');
    }
	public function dash(){
		try {
			
		} catch (Exception $e) {
			
		}
		$data = [
		'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
		'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('index', $data);
	}
}