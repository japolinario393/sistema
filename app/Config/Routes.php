<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ConteudoController::contato');
$routes->get('/produtotech','ConteudoController::produtotech');
$routes->get('/quemsou','ConteudoController::quemsou');