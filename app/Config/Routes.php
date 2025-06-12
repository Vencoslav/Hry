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
$routes->get('hry/(:num)', 'ControllerHra::loadHra/$1');
$routes->get('hry/edit/(:num)', 'ControllerHra::editHra/$1');
$routes->post('hry/update/(:num)', 'ControllerHra::updateHra/$1');
$routes->post('hry/delete/(:num)', 'ControllerHra::deleteHra/$1');
$routes->get('hry/new', 'ControllerHry::newHra');
$routes->post('hry/create', 'ControllerHry::createHra');
$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
	$routes->get('login', 'ControllerIonAuth::loadLogin');
    $routes->post('login', 'ControllerIonAuth::processLogin');
    $routes->get('register', 'ControllerIonAuth::loadRegister');
    $routes->post('register', 'ControllerIonAuth::processRegister');
	$routes->post('logout', 'ControllerIonAuth::logout');
	// $routes->add('forgot_password', 'Auth::forgot_password');
	// $routes->get('/', 'Auth::index');
	// $routes->add('create_user', 'Auth::create_user');
	// $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
	// $routes->add('create_group', 'Auth::create_group');
	// $routes->get('activate/(:num)', 'Auth::activate/$1');
	// $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
	// $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
	// $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
	// $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
	// ...
});