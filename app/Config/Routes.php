<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index', ['filter' => 'role:user']);
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail_user/$1', ['filter' => 'role:admin']);
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/user', 'User::index', ['filter' => 'role:user']);
$routes->get('/user/rencana', 'User::rencana', ['filter' => 'role:user']);
