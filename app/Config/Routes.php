<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Dashboard::index');
