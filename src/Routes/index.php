<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->get('/newUser', BukuController::class, 'addUser');
$router->post('/newUser', BukuController::class, 'addUser');
$router->dispatch();