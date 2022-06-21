<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('/', 'auth::index');

// $routes->get('/home', 'Home::index', ['filter' => 'role:admin']);
// $routes->get('/home/index', 'Home::index', ['filter' => 'role:admin']);



$routes->delete('/kelas/(:num)', 'Kelas::delete/$1');
$routes->get('/kelas/edit/(:any)', 'Kelas::v_edit/$1');

$routes->delete('/materi/(:num)', 'Materi::delete/$1');
$routes->get('/materi/edit/(:any)', 'Materi::v_edit/$1');


$routes->delete('/diskusi/(:num)', 'Diskusi::delete/$1');
$routes->get('/diskusi/edit/(:any)', 'Diskusi::v_edit/$1');

$routes->delete('/guru/(:num)', 'Guru::delete/$1');
$routes->get('/guru/edit/(:any)', 'Guru::v_edit/$1');

$routes->get('/home/edit/(:segment)', 'Home::edit_sampul/$1');
$routes->delete('/home/(:num)', 'Home::delete/$1');




$routes->delete('/kelas/(:num)', 'kelas::delete_a/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
