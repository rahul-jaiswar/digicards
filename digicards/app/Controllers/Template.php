<?php namespace App\Controllers;
use App\Models\TemplateModel;
use App\Models\NavigationModel;

class Template extends BaseController
{
    public function __construct(){
    	helper(['url','form']);
    	$db = \Config\Database::connect();
    	$this->session = \Config\Services::session();
    	$this->template = new TemplateModel(); 
    	$this->navigation = new NavigationModel(); 
	    $this->temp_category = $db->table('tempcategory_tb');
	    $this->nav_category = $db->table('navcategory_tb');
    }
	public function index(){
		
	}
	public function list(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'category' => $this->template->gettempcategory(),
			'template' => $this->template->get()->getResult()
		];
		return view('template/list', $data);
	}
	public function add(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$preview = null;
				if($this->request->getFile('temp_preview')!=''){
				    $image = $this->request->getFile('temp_preview');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/template/', $newName);
				    $preview = $image->getName();
				}
				$data=[
					'temp_name' => $this->request->getPost('temp_name'),
			        'temp_cat' => $this->request->getPost('temp_cat'),
			        'temp_preview' => $preview,
			        'enable' => 1
				];
			    if($this->template->insert($data)){
					$this->session->setFlashdata('msg', 'Template Added Successfully');
					return redirect()->to('Template/add');
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					return redirect()->to('Template/add');
				}
			}
		} catch (Exception $e) {
			$this->session->setFlashdata('msg', $e);
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'category' => $this->template->gettempcategory(),
			'template' => $this->template->get()->getResult()
		];
		return view('template/add', $data);
	}
	public function category(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data = $this->request->getVar();
		    if($this->temp_category->insert($data)){
				$this->session->setFlashdata('msg', 'Category Added Successfully');
				return redirect()->to('Template/add');
			}
			else{
				$this->session->setFlashdata('msg', 'Something went wrong');
				return redirect()->to('Template/add');
			}
		}
	}
	public function deleteCat($id = null){

		if($this->temp_category->where(['tempcat_id' => $id])->delete()){
			$this->session->setFlashdata('msg', 'Category Deleted Successfully');
			return redirect()->to('Template/add');
		}
		else{
			$this->session->setFlashdata('msg', 'Something went wrong');
			return redirect()->to('Template/add');
		}
    }
    public function deleteTemp($id = null){

		if($this->template->where(['template_id' => $id])->delete()){
			$this->session->setFlashdata('msg', 'Template Deleted Successfully');
			return redirect()->to('Template/add');
		}
		else{
			$this->session->setFlashdata('msg', 'Something went wrong');
			return redirect()->to('Template/add');
		}
    }
	public function update($id=null){
		// $data = [
		// 	'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
		// 	'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
		// 	'template' => $this->template->where('template_id',$id)->get()->getRow()
		// ];
		// return view('template/card/index',$data);

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'card_url' => 'http://localhost/digiweb/Card/sample',
			'category' => $this->template->gettempcategory(),
			'template' => $this->template->where('template_id',$id)->first()
		];
		return view('template/update',$data);
	}
	public function navcategory(){
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data = $this->request->getVar();
		    if($this->nav_category->insert($data)){
				$this->session->setFlashdata('msg', 'Nav Category Added Successfully');
				return redirect()->to('Template/navigation');
			}
			else{
				$this->session->setFlashdata('msg', 'Something went wrong');
				return redirect()->to('Template/navigation');
			}
		}

	}
	public function navigation(){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$pagelist = $this->request->getPost('pages_name');
				foreach($pagelist as $page){
				    $data= [
				        'nav_cat' => $this->request->getPost('nav_cat'),
				        'pages_name' => $page,
				        'enable'=>1
				    ];
			    	$this->navigation->insert($data);
			    }
				$this->session->setFlashdata('msg', 'Navigation Added Successfully');
				return redirect()->to('Template/navigation');
			}
		} catch (Exception $e) {
			$this->session->setFlashdata('msg', $e);
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'category' => $this->template->gettempcategory(),
			'navcat' => $this->nav_category->get()->getResult(),
			'navlist' => $this->navigation->get()->getResult(),
		];
		// echo"<pre>";
		// print_r($data);
		// exit();
		return view('template/nav', $data);
	}
	public function delNavCat($id = null){

		if($this->nav_category->where(['navcat_id' => $id])->delete()){
			$this->session->setFlashdata('msg', 'Category Deleted Successfully');
			return redirect()->to('Template/navigation');
		}
		else{
			$this->session->setFlashdata('msg', 'Something went wrong');
			return redirect()->to('Template/navigation');
		}
    }
    function socialpack(){
    	$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'category' => $this->template->gettempcategory(),
			'template' => $this->template->get()->getResult()
		];
		return view('template/social/list', $data);
    }
	public function preview($name=null){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'template' => $this->template->where('temp_name',$name)->first(),
			'page' => view('template/card/'.$name)
		];
		return view('template/index',$data);
	}
	public function home($id=null){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			//'template' => $this->template->where('temp_name',$name)->first()
		];
		return view('template/index',$data);
	}
	public function about($id=null){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
		];
		return view('template/pages/about',$data);
	}
	public function product($id=null){

	}
	public function service($id=null){

	}
	public function catalogue($id=null){

	}
	public function gallery($id=null){

	}
	public function payments($id=null){

	}
}
