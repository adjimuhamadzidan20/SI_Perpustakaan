<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Halaman_utama::index', ['filter' => 'visitUser']);
$routes->get('/halaman_utama', 'Halaman_utama::index', ['filter' => 'visitUser']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'adminUser']);
$routes->get('/login', 'Login::index', ['filter' => 'visitUser']);
