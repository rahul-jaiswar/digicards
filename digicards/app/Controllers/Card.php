<?php namespace App\Controllers;
use App\Models\CustomerModel;
use App\Models\CardModel;
use App\Models\TeamModel;
use App\Models\SocialModel;
use App\Models\ServiceModel;
use App\Models\ProductModel;
use App\Models\CatalogueModel;
use App\Models\GalleryModel;
use App\Models\PaymentModel;
use App\Models\TemplateModel;

class Card extends BaseController
{
	private $customer = '' ;
	private $template = '' ;
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
        $this->template = new TemplateModel(); 
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
        $this->uri = new \CodeIgniter\HTTP\URI();
    }
    public function index($page='index'){

    	if($page=='index'){
	    	$data = [
				'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
				'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
				'page' => view('template/index')
			];
			return view('template/index', $data);
		}else{	
			$data = [
				'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
				'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
				'page' => view('template/pages/'.$page)
			];
			return view('template/index', $data);
		}
		if($page==''){
			$this->page_data['pagename']   = 'index';
		}else{
			$this->page_data['pagename']   = c;
		}
		// echo 'page '.$this->page_data['pagename'];
        $this->page_data['breadcrumb'] = ' AMS Courier Services';

		return view('template/index', $this->page_data);
	}
	public function view($id=null){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'card_url' => 'http://localhost/digiweb/',
			'customer' => $this->customer->where('company_code', $id)->first(),
			'tempcat' => $this->template->gettempcategory(),
			'cardtemp' => $this->db->table('card_template_tb')->where('company_code', $id)->get()->getRow(),
			'template' => $this->template->get()->getResult(),
			'card' => $this->card->where('company_code', $id)->first(),
			'team' => $this->team->where('company_code', $id)->findAll(),
			'social' => $this->social->where('company_code', $id)->findAll(),
			'service' => $this->service->where('company_code', $id)->findAll(),
			'servicecat' => $this->db->table('service_category_tb')->where('company_code', $id)->get()->getResult(),
			'product' => $this->product->where('company_code', $id)->findAll(),
			'productcat' => $this->db->table('product_category_tb')->where('company_code', $id)->get()->getResult(),
			'catalogue' => $this->catalogue->where('company_code', $id)->findAll(),
			'cataloguecat' => $this->db->table('product_category_tb')->where('company_code', $id)->get()->getResult(),
			'gallery' => $this->gallery->where('company_code', $id)->findAll(),
			'bankdetail' => $this->db->table('card_payment_tb')->where('company_code', $id)->get()->getRow(),
			'upicategory' => $this->db->table('pay_channel_tb')->where('company_code', $id)->get()->getResult(),
			'payment' => $this->payment->where('company_code', $id)->findAll(),
			'catalogue' => $this->catalogue->where('company_code', $id)->findAll(),
		];
		// echo"<pre>";
		// print_r($data);
		// exit();
		return view('card/add', $data);
	}
	function template($id=null){
		$data=[
			'temp_name' => $this->request->getPost('temp_name'),
	        'enable' => 1
		];
		// echo"<pre>";
		// print_r($data);
		// exit();
		if($this->db->table('card_template_tb')->set($data)->where('company_code', $id)->update()){
			$this->session->setFlashdata('msg', 'Template Applied Successfully');
			return redirect()->to('Card/view/'.$id);
		}
		else{
			$this->session->setFlashdata('msg', 'Something went wrong');
		}
		return redirect()->to('Card/view/'.$id);
	}
	function info($id =null){
		try { 
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$logo =null;
				$portfolio = null;
				$catalogue = null;
				if($this->request->getFile('company_logo')!=''){
			        $company_logo = $this->request->getFile('company_logo');
		            $company_logo->move(WRITEPATH . 'uploads/company_logo/');
		            $logo = $company_logo->getName();
				}
				if($this->request->getFile('portfolio_pdf')!=''){
			        $portfolio_pdf = $this->request->getFile('portfolio_pdf');
		            $portfolio_pdf->move(WRITEPATH . 'uploads/portfolio/');
		            $portfolio = $portfolio_pdf->getName();
				}
				if($this->request->getFile('catalogue_pdf')!=''){
					$catalogue_pdf = $this->request->getFile('catalogue_pdf');
		            $catalogue_pdf->move(WRITEPATH . 'uploads/catalogue/');
		            $catalogue = $catalogue_pdf->getName();
				}
				$data=[
					'company_code'=> $this->request->getPost('company_code'),
					'company_name'=> $this->request->getPost('company_name'),
					'company_cat'=> $this->request->getPost('company_cat'),
					'est_date'=> date(
                    'Y-m-d', strtotime($this->request->getPost('est_date'))),
					'PAN_no'=> $this->request->getPost('PAN_no'),
					'STN_no'=> $this->request->getPost('STN_no'),
					'GST_no'=> $this->request->getPost('GST_no'),
					'cust_copyright'=> $this->request->getPost('cust_copyright'),
					'company_logo'=> $logo,
					'company_email'=> $this->request->getPost('company_email'),
					'support_email'=> $this->request->getPost('support_email'),
					'sup_contact_no'=> $this->request->getPost('sup_contact_no'),
					'whatsapp_business'=> $this->request->getPost('whatsapp_business'),
					'website_url'=> $this->request->getPost('website_url'),
					'company_map_link'=> $this->request->getPost('company_map_link'),
					'intro_video'=> $this->request->getPost('intro_video'),
					'portfolio_pdf'=> $portfolio,
					'catalogue_pdf'=> $catalogue,
					'about_us'=> $this->request->getPost('about_us'),
					'country'=> $this->request->getPost('country'),
					'state'=> $this->request->getPost('state'),
					'city'=> $this->request->getPost('city'),
					'pincode'=> $this->request->getPost('pincode'),
					'address'=> $this->request->getPost('address'),
					'office_longitutde'=> $this->request->getPost('office_longitutde'),
					'office_latitutde'=> $this->request->getPost('office_latitutde'),
					'enable'=> 1,
				];
				if($this->card->set($data)->where('company_code', $id)->update()){
					$this->session->setFlashdata('msg', 'Card Info Added Successfully');
					$this->session->set('activetab', 'info');
					return redirect()->to('Card/view/'.$id);
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
				}
				return redirect()->to('Card/info/'.$id);
			}	
		} catch (Exception $e) {
			
		}
	}
	function team($id =null){
		$code = $this->team->select('company_code')->where('userUID', $id)->first();
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				if($id!=''){
					if($this->request->getFile('profile_image')!=''){
						$profile = $this->request->getFile('profile_image');
			        	$profile->move(WRITEPATH . 'uploads/profile/');
					}
					$data = $this->request->getVar();
					if($this->db->table('card_team_tb')->insert($data)){
						$this->session->setFlashdata('msg', 'Team Info Added successfully');
						$this->session->set('activetab', 'team');
						return redirect()->to('Card/view/'.$id);
					}else{
						$this->session->setFlashdata('msg', 'Team Info Added successfully');
						$this->session->set('activetab', 'team');
						return redirect()->to('Card/view/'.$id);
					}
				}else{
					if($this->request->getFile('profile_image')!=''){
						$profile = $this->request->getFile('profile_image');
			        	$profile->move(WRITEPATH . 'uploads/profile/');
					}
					$data = $this->request->getVar();
					if($this->db->table('card_team_tb')->insert($data)){
						$this->session->setFlashdata('msg', 'Team Info Added successfully');
						$this->session->set('activetab', 'team');
						return redirect()->to('Card/view/'.$id);
					}else{
						$this->session->setFlashdata('msg', 'Team Info Added successfully');
						$this->session->set('activetab', 'team');
						return redirect()->to('Card/view/'.$id);
					}
				}
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'card_url' => 'http://localhost/digiweb/',
			'customer' => $this->customer->where('company_code', $code['company_code'])->first(),
			'card' => $this->card->where('company_code', $code['company_code'])->first(),
			'team' => $this->team->where('company_code', $code['company_code'])->findAll(),
			'social' => $this->social->where('company_code', $code['company_code'])->findAll(),
			'service' => $this->service->where('company_code', $code['company_code'])->findAll(),
			'product' => $this->product->where('company_code', $code['company_code'])->findAll(),
			'catalogue' => $this->catalogue->where('company_code', $code['company_code'])->findAll(),
			'gallery' => $this->gallery->where('company_code', $code['company_code'])->findAll(),
			'payment' => $this->payment->where('company_code', $code['company_code'])->findAll(),
			'catalogue' => $this->catalogue->where('company_code', $code['company_code'])->findAll(),
			'tmember' => $this->team->where('userUID', $id)->first()
		];
		$this->session->set('activetab', 'team');
		return view('card/add',$data);
	}
	function social($id =null){
		$code = $this->social->select('company_code')->where('social_id', $id)->first();
		try { 
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$icon = null;
				if($this->request->getFile('icon_img')!=''){
				    $image = $this->request->getFile('icon_img');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/social_icon/', $newName);
				    $icon = $image->getName();
				}
				$data=[
					'company_code' => $this->request->getPost('company_code'),
					'company_name' => $this->request->getPost('company_name'),
					'icon_img' =>  $icon,
					'channel_name' => $this->request->getPost('channel_name'),
					'channel_url' =>  $this->request->getPost('channel_url'),
					'icon_visibility' =>  $this->request->getPost('icon_visibility'),
			        'enable' => 1
				];
			    if($this->social->insert($data)){
					$this->session->setFlashdata('msg', 'Social Info Added Successfully');
					$this->session->set('activetab', 'social');
					return redirect()->to('Card/view/'.$id);
				}else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					$this->session->set('activetab', 'social');
					return redirect()->to('Card/view/'.$id);
				}

				// $socialdata = $this->request->getVar();
				// $datainsert = $socialdata['group-a'];
				// foreach($datainsert as $value){
				//     $data= [
				//         'company_code' => $this->request->getPost('company_code'),
				//         'company_name' => $this->request->getPost('company_name'),
				//         'icon_pack' => $this->request->getPost('icon_pack'),
				//         'channel_name' => $value['channel_name'],
				//         'channel_url' => $value['channel_url'],
				//         'icon_visibility' => $value['icon_visibility'],
				//         'enable'=>1
				//     ];
			    // 	$this->db->table('card_social_link_tb')->insert($data);
			    // }
				// $this->session->setFlashdata('msg', 'Social Info Added Successfully');
				// $this->session->set('activetab', 'social');
				// return redirect()->to('Card/view/'.$id);
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'card_url' => 'http://localhost/digiweb/',
			'customer' => $this->customer->where('company_code', $code['company_code'])->first(),
			'card' => $this->card->where('company_code', $code['company_code'])->first(),
			'team' => $this->team->where('company_code', $code['company_code'])->findAll(),
			'social' => $this->social->where('company_code', $code['company_code'])->findAll(),
			'service' => $this->service->where('company_code', $code['company_code'])->findAll(),
			'product' => $this->product->where('company_code', $code['company_code'])->findAll(),
			'catalogue' => $this->catalogue->where('company_code', $code['company_code'])->findAll(),
			'gallery' => $this->gallery->where('company_code', $code['company_code'])->findAll(),
			'payment' => $this->payment->where('company_code', $code['company_code'])->findAll(),
			'catalogue' => $this->catalogue->where('company_code', $code['company_code'])->findAll(),
			'csocial' => $this->social->where('social_id', $id)->first()
		];
		$this->session->set('activetab', 'social');
		return view('card/add',$data);
	}
	function product($id =null){
		try {
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$pdImg = null;
				if($this->request->getFile('productImg')!=''){
				    $image = $this->request->getFile('productImg');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/product_image/', $newName);
				    $pdImg = $image->getName();
				}
				$data=[
					'company_code' => $this->request->getPost('company_code'),
					'company_name' => $this->request->getPost('company_name'),
					'list_view' => $this->request->getPost('list_view'),
					'category_name' => $this->request->getPost('category_name'),
					'position' => $this->request->getPost('position'),
					'pname' => $this->request->getPost('pname'),
					'pdetails' => $this->request->getPost('pdetails'),
					'pprice' => $this->request->getPost('pprice'),
					'product_img' =>  $pdImg,
					'description' =>  $this->request->getPost('description'),
			        'enable' => 1
				];
			    if($this->product->insert($data)){
					$this->session->setFlashdata('msg', 'Product Info Added Successfully');
					$this->session->set('activetab', 'product');
					return redirect()->to('Card/view/'.$id);
				}else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					$this->session->set('activetab', 'product');
					return redirect()->to('Card/view/'.$id);
				}
			}

		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->where('company_code', $id)->first()
		];
		return view('card/product/add', $data);
	}
	function service($id =null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$service = null;
				if($this->request->getFile('service_img')!=''){
				    $image = $this->request->getFile('service_img');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/service_img/', $newName);
				    $service = $image->getName(); 
				}
				$data=[
					'company_code' => $this->request->getPost('company_code'),
					'company_name' => $this->request->getPost('company_name'),
					'list_view' => $this->request->getPost('list_view'),
					'scategory_name' =>  $this->request->getPost('scategory_name'),
					'availablity' =>  $this->request->getPost('availablity'),
					'position' =>  $this->request->getPost('position'),
					'sname' =>  $this->request->getPost('sname'),
					'sdetails' =>  $this->request->getPost('sdetails'),
					'sprice' =>  $this->request->getPost('sprice'),
					'service_img' => $service,
					'about_service' =>  $this->request->getPost('about_service'),
			        'enable' => 1
				];
			    if($this->service->insert($data)){
					$this->session->setFlashdata('msg', 'Service Details Added Successfully');
					$this->session->set('activetab', 'service');
					return redirect()->to('Card/view/'.$id);
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					$this->session->set('activetab', 'service');
					return redirect()->to('Card/view/'.$id);
				}
			}

		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->where('company_code', $id)->first()
		];
		return view('card/service/add', $data);
	}
	function catalogue($id =null){
		try {
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$catalogue = null;
				if($this->request->getFile('catalogue_img')!=''){
				    $image = $this->request->getFile('catalogue_img');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/catalogue/', $newName);
				    $catalogue = $image->getName();
				}
				$data=[
					'company_code' => $this->request->getPost('company_code'),
					'company_name' => $this->request->getPost('company_name'),
					'ccategory_name' =>  $this->request->getPost('ccategory_name'),
					'clist_view' => $this->request->getPost('clist_view'),
					'position' => $this->request->getPost('position'),
					'cname' =>  $this->request->getPost('cname'),
					'cdetails' =>  $this->request->getPost('cdetails'),
					'cprice' =>  $this->request->getPost('cprice'),
					'characteristcs' =>  $this->request->getPost('characteristcs'),
					'catalogue_img' =>  $catalogue,
			        'enable' => 1
				];
			    if($this->catalogue->insert($data)){
					$this->session->setFlashdata('msg', 'Catalogue Details Added Successfully');
					$this->session->set('activetab', 'catalogue');
					return redirect()->to('Card/view/'.$id);
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					$this->session->set('activetab', 'catalogue');
					return redirect()->to('Card/view/'.$id);
				}
			}

		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->where('company_code', $id)->first()
		];
		return view('card/catalogue/add', $data);
	}
	function catalogue_details($id =null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$product = null;
				if($this->request->getFile('product_img')!=''){
				    $image = $this->request->getFile('product_img');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/catalogue/', $newName);
				    $product = $image->getName();
				}
				$data=[
					'company_code' => $this->request->getPost('company_code'),
					'company_name' => $this->request->getPost('company_name'),
					'list_view' => $this->request->getPost('list_view'),
					'category_name' =>  $this->request->getPost('category_name'),
					'position' =>  $this->request->getPost('position'),
					'pname' =>  $this->request->getPost('pname'),
					'pdetails' =>  $this->request->getPost('pdetails'),
					'pprice' =>  $this->request->getPost('pprice'),
					'product_img' =>  $product,
			        'enable' => 1
				];
			    if($this->catalogue->insert($data)){
					$this->session->setFlashdata('msg', 'Catalogue Details Added Successfully');
					$this->session->set('activetab', 'catalogue');
					return redirect()->to('Card/view/'.$id);
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					$this->session->set('activetab', 'catalogue');
					return redirect()->to('Card/view/'.$id);
				}
			}
		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->where('company_code', $id)->first()
		];
		return view('card/info', $data);
	}
	function gallery($id =null){
		try {
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$filesUploaded = 0;
				if($this->request->getFileMultiple('image_name')){
					$files = $this->request->getFileMultiple('image_name');
					foreach ($files as $file) {
 
		                if ($file->isValid() && ! $file->hasMoved())
		                {
		                    $newName = $file->getRandomName();
		                    $file->move(ROOTPATH .'public/gallery/', $newName);
		                    $data = [
		                    	'company_code' => $this->request->getPost('company_code'),
								'company_name' => $this->request->getPost('company_name'),
								'image_name' => $file->getClientName(),
		                    ];
		                    $fileUploadModel = new FileUploadModel();
		                    $fileUploadModel->save($data);
		                    $filesUploaded++;
		                }
		                $save = $gallery->insert($data);
		                $this->session->setFlashdata('msg', 'Image Gallery Uploaded Successfully');
						$this->session->set('activetab', 'gallery');
						return redirect()->to('Card/view/'.$id);
		                 
		            }
				}else{
					echo"<pre>";
					print_r("Hello");
					exit();
				}
			}

		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->where('company_code', $id)->first()
		];
		return view('card/gallery/add', $data);
	}
	function payments($id =null){
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$qr = null;
				if($this->request->getFile('channel_QR')!=''){
				    $image = $this->request->getFile('channel_QR');
				    $newName = $image->getRandomName();
				    $image->move(ROOTPATH .'public/payment_qr/', $newName);
				    $qr = $image->getName();
				}
				$data=[
					'company_code' => $this->request->getPost('company_code'),
					'company_name' => $this->request->getPost('company_name'),
					'upichannel_name' => $this->request->getPost('upichannel_name'),
					'registered_no' =>  $this->request->getPost('registered_no'),
					'channel_link' =>  $this->request->getPost('channel_link'),
					'channel_QR' =>  $qr,
			        'enable' => 1
				];
			    if($this->payment->insert($data)){
					$this->session->setFlashdata('msg', 'Payment Details Added Successfully');
					$this->session->set('activetab', 'payment');
					return redirect()->to('Card/view/'.$id);
				}
				else{
					$this->session->setFlashdata('msg', 'Something went wrong');
					$this->session->set('activetab', 'payment');
					return redirect()->to('Card/view/'.$id);
				}
			}

		} catch (Exception $e) {
			
		}
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible']),
			'customer' => $this->customer->where('company_code', $id)->first()
		];
		return view('card/payments/add', $data);
	}
	function frame(){
		return view('template/business-card/index');
	}
	function upgrade($id =null){
		try {
			
		} catch (Exception $e) {
			
		}
		$data['customer'] = $this->CustomerModel->getlist();
		$this->load->view('manager/customer/card/upgrade',$data);
	}
}
