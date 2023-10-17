<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Panel');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Panel::index');
//$routes->get('/(:any)', 'Card::index');
$routes->get('Customer/add', 'Customer::add');
$routes->get('Customer/list', 'Customer::list');
$routes->get('Customer/card', 'Customer::card');
$routes->get('Customer/team', 'Customer::team');
$routes->get('Customer/social', 'Customer::social');
$routes->get('Customer/product', 'Customer::product');
$routes->get('Customer/service', 'Customer::service');
$routes->get('Customer/catalogue', 'Customer::catalogue');
$routes->get('Customer/gallery', 'Customer::gallery');
$routes->get('Customer/payments', 'Customer::payments');
//$routes->get('Card/view/(:num)', 'Card::view/$1');
//$routes->get('Card/(:any)', 'Card::index/$1');

// $routes->get('User/list', 'User::list', ['filter' => 'permission:manage-user']);
// $routes->get('User/list', 'User::list', ['filter' => 'role:admin,superadmin']); 

$routes->resource('card', ['controller' => 'RestAPI\Card']);
$routes->resource('team', ['controller' => 'RestAPI\Team']);
$routes->resource('social', ['controller' => 'RestAPI\Social']);
$routes->resource('product', ['controller' => 'RestAPI\Product']);
$routes->resource('service', ['controller' => 'RestAPI\Service']);
$routes->resource('catalogue', ['controller' => 'RestAPI\Catalogue']);
$routes->resource('gallery', ['controller' => 'RestAPI\Gallery']);
$routes->resource('payment', ['controller' => 'RestAPI\Payment']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}