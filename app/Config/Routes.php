<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tvurci', 'ControllerTvurci::loadTvurci');
$routes->get('zanry', 'ControllerZanry::loadZanry');
$routes->get('platformy', 'ControllerPlatformy::loadPlatformy');
$routes->get('hry', 'ControllerHry::loadHry');
$routes->get('hry/(:num)', 'ControllerHry::loadHra/$1');
$routes->get('hry/edit/(:num)', 'ControllerHry::editHra/$1');
$routes->post('hry/update/(:num)', 'ControllerHry::updateHra/$1');
$routes->post('hry/delete/(:num)', 'ControllerHry::deleteHra/$1');
$routes->get('hry/new', 'ControllerHry::newHra');
$routes->post('hry/create', 'ControllerHry::createHra');
