<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('login', 'LoginController::index');

// Routing for users
$routes->get('users', 'UsersController::index');
$routes->get('users/create', 'UsersController::create');
$routes->post('users/store', 'UsersController::store');
$routes->get('users/edit/(:alphanum)', 'UsersController::edit/$1');
$routes->post('users/update/(:num)', 'UsersController::update/$1');
$routes->get('users/delete/(:alphanum)', 'UsersController::delete/$1');


$routes->get('tracking', 'TrackingStudyController::index');
$routes->get('tracking/create', 'TrackingStudyController::create');
$routes->post('tracking/store', 'TrackingStudyController::store');
$routes->get('tracking/edit/(:alphanum)', 'TrackingStudyController::edit/$1');
$routes->post('tracking/update/(:num)', 'TrackingStudyController::update/$1');
$routes->get('tracking/delete/(:alphanum)', 'TrackingStudyController::delete/$1');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
