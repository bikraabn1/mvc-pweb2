<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->post('/', BukuController::class, 'deleteBook');
$router->get('/newBook', BukuController::class, 'addBook');
$router->get('/updateData', BukuController::class, 'updateBook');
$router->post('/newBook', BukuController::class, 'addBook');
$router->dispatch();