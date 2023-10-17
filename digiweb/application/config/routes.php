<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'App';
$route['App/process'] = 'App/process';
$route['App/contact'] = 'App/contact';
$route['App/company'] = 'App/company';
$route['App/whyus'] = 'App/whyus';
$route['App/community'] = 'App/community';
$route['App/faq'] = 'App/faq';
$route['App'] = 'App/index';
$route['secret-santa'] = 'Santa/index';
$route['Shop'] = 'Shop/index';
$route['Panel'] = 'Panel/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['AtoZ-Services-Pvt-Ltd'] = 'App/A_to_Z_SERVICES_PVT_LTD';
$route['A_to_Z_SERVICES_PVT_LTD'] = 'App/A_to_Z_SERVICES_PVT_LTD';
$route['BRIJESH_RATHOD'] = 'App/BRIJESH_RATHOD';

$name = $this->uri->segment('1');
// echo"<pre>";
// print_r($name);
// exit();
if ($name !='' && $name != 'login' && $name != 'Manager'){
	$route['(:any)'] = 'Card/index';
	$route['(:any)/(:any)'] = 'Customer/page/$1';
}
if($name == 'login' || $name == 'Manager'){
	// echo"<pre>";
	// print_r("hello");
	// exit();
	//$route['login'] = 'Manager/login';
	$route['(:any)'] = 'Manager/index';
	$route['Manager/(:any)'] = 'Manager/page/$1';
}