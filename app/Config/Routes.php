<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('siswa', 'SiswaController::index', ['filter' => 'auth']);
$routes->get('guru', 'GuruController::index', ['filter' => 'auth']);
