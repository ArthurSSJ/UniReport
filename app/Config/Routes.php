<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index', ['as' => 'home']);
$routes->post('/', 'HomeController::index', ['as' => 'home.insert']);

$routes->get('/admin', 'AdminController::index', ['as' => 'admin']);
$routes->post('/admin/delete/(:num)', 'AdminController::delete/$1', ['as' => 'admin_delete']);

