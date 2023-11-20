<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index', ['as' => 'home']);
$routes->post('/', 'HomeController::insert', ['as' => 'Home.insert']);
$routes->get('/admin', 'AdminController::index', ['as' => 'admin']);
// Rota para excluir um relatório (utilize POST para a exclusão)
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1', ['as' => 'admin_delete']);
