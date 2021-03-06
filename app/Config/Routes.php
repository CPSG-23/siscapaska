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
$routes->setDefaultController('Home');
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
$routes->get('/admin', 'Admin/Dashboard::index', ['filter' => 'authGuard']);
$routes->get('/admin/dashboard', 'Admin/Dashboard::index', ['filter' => 'authGuard']);
$routes->get('/admin/peserta', 'Admin/Peserta::index', ['filter' => 'authGuard']);
$routes->get('/admin/dashboard', 'Admin/Dashboard::index', ['filter' => 'authGuard']);

$routes->get('/admin/users', 'Admin/Users::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/parade', 'Admin/Parade::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/pbb', 'Admin/Pbb::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/samapta', 'Admin/Samapta::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/wawancara', 'Admin/Wawancara::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/kesehatan', 'Admin/Kesehatan::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/kesenian', 'Admin/Kesenian::index', ['filter' => 'authGuard']);
$routes->get('/admin/nilai/psikotes', 'Admin/Psikotes::index', ['filter' => 'authGuard']);
$routes->get('/admin/datasekolah', 'Admin/Sekolah::index', ['filter' => 'authGuard']);

$routes->get('/myaccount', 'MyAccount::index',['filter' => 'authGuard']);

$routes->resource('rest/peserta');

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
