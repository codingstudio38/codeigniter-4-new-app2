<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup 
 * --------------------------------------------------------------------
 */   
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
 
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

 


 

//------------------------USER ROUTES---------------------------------
$routes->get('/', 'Login::index');
$routes->get('/user_email_active/(:any)/(:any)', 'Login::user_email_active/$1/$2'); 

$routes->group("validation", function($routes){
$routes->post('user_emailCheck', 'Login::emailCheck');
$routes->post('user_phoneCheck', 'Login::phoneCheck'); 
});

$routes->group("user",['filter'=>'loggedout_user'], function($routes){
$routes->get('user_login', 'Login::viewlogin');  
$routes->get('user_register', 'Login::viewregister'); 
 
$routes->post('user_register', 'Login::user_register');
$routes->post('user_login', 'Login::login_verify');

});


$routes->group("user_panel",['filter'=>'loggedin_user'], function($routes){
$routes->get('/', 'UserController::index');
$routes->get('user_profile', 'UserController::user_profile');
$routes->get('user_logout', 'UserController::logout');
});
//------------------------USER ROUTES END-----------------------------












/*
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}