<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::login');
$routes->post('/login', 'Home::authenticate');
$routes->get('/logout', 'Home::logout');

$routes->get('/dashboard', 'Home::dashboard', ['filter' => 'auth']);

// ------------------------------------------- About Customers ----------------------------------------------------------

$routes->get('/customer', 'Home::viewcustomer', ['filter' => 'auth']);
$routes->get('/addcustomers', 'Home::add', ['filter' => 'auth']);
$routes->post('/savecustomer', 'Home::save', ['filter' => 'auth']);
$routes->post('/deleteCustomer/(:num)', 'Home::delete/$1', ['filter' => 'auth']);
$routes->get('/editcustomer/(:num)', 'Home::edit/$1', ['filter' => 'auth']);
$routes->post('/updatecustomer/(:num)', 'Home::update/$1', ['filter' => 'auth']);

// ------------------------------------------- About Leads ----------------------------------------------------------

$routes->get('/lead', 'Home::viewlead', ['filter' => 'auth']);
$routes->get('/addleads', 'LeadController::add', ['filter' => 'auth']);
$routes->post('/savelead', 'LeadController::save', ['filter' => 'auth']);
$routes->post('deletelead/(:num)', 'LeadController::delete/$1', ['filter' => 'auth']);
$routes->get('/editlead/(:num)', 'LeadController::edit/$1', ['filter' => 'auth']);
$routes->post('/updatelead/(:num)', 'LeadController::update/$1', ['filter' => 'auth']);

// ------------------------------------------- About Salespersons ----------------------------------------------------------

$routes->get('/salesperson', 'Home::viewsalesperson', ['filter' => 'auth']);
$routes->get('/addsalespersons', 'SalespersonController::add', ['filter' => 'auth']);
$routes->post('savesalesperson', 'SalespersonController::save', ['filter' => 'auth']);
$routes->post('deleteSalesperson/(:num)', 'SalespersonController::delete/$1', ['filter' => 'auth']);
$routes->get('/editsalesperson/(:num)', 'SalespersonController::edit/$1', ['filter' => 'auth']);
$routes->post('/updatesalesperson/(:num)', 'SalespersonController::update/$1', ['filter' => 'auth']);

// ------------------------------------------- About Interactions ----------------------------------------------------------

$routes->get('/interaction', 'Home::viewinteraction', ['filter' => 'auth']);
$routes->get('/addinteraction', 'InteractionController::add', ['filter' => 'auth']);
$routes->post('saveinteraction', 'InteractionController::save', ['filter' => 'auth']);
$routes->post('deleteinteraction/(:num)', 'InteractionController::delete/$1', ['filter' => 'auth']);
$routes->get('/editinteraction/(:num)', 'InteractionController::edit/$1', ['filter' => 'auth']);
$routes->post('/updateinteraction/(:num)', 'InteractionController::update/$1', ['filter' => 'auth']);

// ------------------------------------------- About Transactions ----------------------------------------------------------

$routes->get('/transaction', 'Home::viewtransaction', ['filter' => 'auth']);
$routes->get('/addtransaction', 'TransactionController::add', ['filter' => 'auth']);
$routes->post('/savetransaction', 'TransactionController::save', ['filter' => 'auth']);
$routes->post('/deletetransaction/(:num)', 'TransactionController::delete/$1', ['filter' => 'auth']);
$routes->get('/edittransaction/(:num)', 'TransactionController::edit/$1', ['filter' => 'auth']);
$routes->post('/updatetransaction/(:num)', 'TransactionController::update/$1', ['filter' => 'auth']);