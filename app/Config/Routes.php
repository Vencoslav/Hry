<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tvurci', 'ControllerTvurci::loadTvurci');
$routes->get('tvurci/(:num)', 'ControllerTvurci::loadTvurci/$1');
