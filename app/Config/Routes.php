<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index', ['as' => 'home']);
$routes->post('/', 'HomeController::insert', ['as' => 'Home.insert']);
$routes->get('/admin', 'AdminController::index', ['as' => 'admin']);
