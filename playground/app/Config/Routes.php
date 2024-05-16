<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);


$routes->get('login', 'AuthController::login', ['filter'=> 'alradyLogIn']);
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/product', 'Product::index', ['filter' => 'auth']);
$routes->get('/basket', 'Basket::index', ['filter' => 'auth']);
$routes->get('/contact', 'Contact::index', ['filter' => 'auth']);

