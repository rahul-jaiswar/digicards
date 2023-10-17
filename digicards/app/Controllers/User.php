<?php 
namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
	private $user = '' ;
    public function __construct(){
    	helper(['url','form']);
    	$this->session = \Config\Services::session();
        $this->user = new UserModel(); 
    }
	public function list(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('admin/users/list', $data);	
	}
	public function details($id = null){
		$model = new UserAuthModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'users' => $model->where('users_id', $id)->delete()
		];
		return view('admin/users/details', $data);
	}
	public function permission(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'User Permission Manager', 'pagetitle' => 'Permission'])
		];
		return view('admin/users/permission', $data);
	}
	public function role(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$data = $this->request->getVar();
				if($this->user->insertrole($data)){
					$this->session->setFlashdata('msg', 'Role Added successfully');
					return redirect()->to('User/role');
				}else{
	    			$this->session->setFlashdata('msg', 'Something went wrong');
	    			return redirect()->to('User/role');
				}
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'role' => $this->user->getallrole()
		];
		return view('admin/users/role', $data);
	}
	public function log(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('admin/users/log', $data);
	}
	public function add(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$data = $this->request->getVar();
				$id = $this->request->getVar('id');
				$userid = $this->request->getVar('userUID');

				$data = [
	                'name'     => $this->request->getVar(),
	                'email'    => $this->request->getVar('email'),
	                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
	            ];
				$data=[
					'userType'=> $this->request->getPost('userType'),
					'userRole'=> $this->request->getPost('userRole'),
					'userUID'=> $this->request->getPost('userUID'),
					'firstname'=> $this->request->getPost('firstname'),
					'lastname'=> $this->request->getPost('lastname'),
					'user_dob'=> date(
					'Y-m-d', strtotime($this->request->getPost('user_dob'))),
					'gender'=> $this->request->getPost('gender'),
					'username'=> $this->request->getPost('username'),
					'email'=> $this->request->getPost('email'),
					'password'=> md5($this->request->getPost('password')),
					'mobile_no'=> $this->request->getPost('mobile_no'),
					'address'=> $this->request->getPost('address'),
					'pincode'=> $this->request->getPost('pincode'),
					'state'=> $this->request->getPost('state'),
					'city'=> $this->request->getPost('city'),
					'enable'=> 1,
				];
				$validation =  \Config\Services::validation();
				$validation->setRules([
					'username' => 'required|string',
					'email' => 'required|valid_email',
					'mobile_no' => 'required|integer|greater_than[0]',
					'password' => 'required|string'
				]);
				$res = $validation->withRequest($this->request)
					->run();
				if(!$res){
				
					$data = [
						'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
						'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
					];
					echo view('users/add',$data, [
							'validation' => $validation
					]);
				}
				else{
					$userdata = new UserAuthModel();
					$session = \Config\Services::session();

					try{
						$userdata->insert($data);
						$session->setFlashdata('msg', 'Record Inserted successfully');
					}
					catch(\Exception $e){
						$session->setFlashdata('msg', 'Something went wrong');
					}
					$data = [
						'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
						'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
					];
					return redirect()->to('Users/add')->withInput($data);
				}
            }
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add User'])
		];
		return view('admin/users/add', $data);
	}
    public function update($id = null){
    	$model = new UserAuthModel();
    	$session = \Config\Services::session();

    	try {
    		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    			$data = $this->request->getVar();
				$id = $this->request->getVar('id');
				$userid = $this->request->getVar('userUID');

				if($model->update($id,$data)){
					$session->setFlashdata('msg', 'Record Updated successfully');
					return redirect()->to('Users/update/'.$userid);
				}else{
	    			$session->setFlashdata('msg', 'Something went wrong');
	    			$data['userdata'] = $model->where('userUID', $id)->first();
					echo view('users/update', $data);
				}
    		}
    	} catch (Exception $e) {
    		
    	}
		$data['userdata'] = $model->where('userUID', $id)->first();
		echo view('admin/users/update', $data);
	}
	public function delete($id)
	{
		$db = \Config\Database::connect();  
		$db->table('customer')->set('is_delete',date('Y-m-d h:i:s'))->where('id',$id)->update();
		$this->session->setFlashdata('danger', 'Customer deleted successfully');
		$data['contact_person'] = $db->table('customer_contact_person')->where('cp_contact_id',$id)->get()->getResult();
		return redirect()->to('customer'); 
	}
	public function remove($id = null){
		$model = new UserAuthModel();
		$data['users'] = $model->where('users_id', $id)->delete();
		return redirect()->to( base_url('Users/list'));
    }
}