<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'App';
$route['secret-santa'] = 'Santa/index';
$route['Shop'] = 'Shop/index';
$route['(:num)'] = 'App/panel';
//$route['(:any)'] = 'App/customer/$id';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
