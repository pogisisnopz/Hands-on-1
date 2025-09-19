<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// Load the system's routing file first
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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// 👉 ito ang route papunta sa landing page mo
$routes->get('/', 'Users::index');

// sample routes kung gusto mo ng login at signup page (optional):
// $routes->get('/login', 'Auth::login');
// $routes->get('/signup', 'Auth::signup');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. Require them here to allow that to happen.
 *
 * You will have to create the file as app/Config/{ENVIRONMENT}/Routes.php
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
