<?php

declare(strict_types=1);
error_reporting(E_ALL);
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// // Create Router instance
$router = new Bramus\Router\Router();


$router->get('/', 'App\Controllers\Main@index');
$router->post('/search', 'App\Controllers\Main@search');
$router->set404('App\Controllers\Error@notFound');
$router->run();
