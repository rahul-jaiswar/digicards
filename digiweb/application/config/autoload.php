<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'email', 'session','form_validation','cart');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'file','form','string');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array(
	'PanelModel',
	'ProductModel',
	'SantaModel',
	'ManagerModel',
	'CustomerModel',
	'CardModel',
	'TemplateModel'
);
