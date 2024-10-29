<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->get('/newBook', BukuController::class, 'addBook');
$router->post('/newBook', BukuController::class, 'addBook');
$router->dispatch();