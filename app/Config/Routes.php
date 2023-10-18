<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Login::index');
$routes->add('/dashboard', 'Dashboard::index');

$routes->post('api/login', 'Api::login');
