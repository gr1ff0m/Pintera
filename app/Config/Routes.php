<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('books', 'BooksListController::index');
//$routes->get('book/(:segment)', 'BooksDetailController::detail/$1');