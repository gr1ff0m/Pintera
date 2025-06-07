<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
// $routes->get('/admin', 'Admin::index', ['filter' => 'auth:admin']);
