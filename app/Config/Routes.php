<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('tvurci', 'ControllerTvurci::loadTvurci');

$routes->get('zanry', 'ControllerZanry::loadZanry');

$routes->get('platformy', 'ControllerPlatformy::loadPlatformy');

$routes->get('hry', 'ControllerHra::loadHry');
$routes->get('hry/(:num)', 'ControllerHra::loadHra/$1');
$routes->get('hry/edit/(:num)', 'ControllerHra::editHra/$1');
$routes->post('hry/update/(:num)', 'ControllerHra::updateHra/$1');
$routes->post('hry/delete/(:num)', 'ControllerHra::deleteHra/$1');
$routes->get('hry/new', 'ControllerHry::newHra');
$routes->post('hry/create', 'ControllerHry::createHra');
