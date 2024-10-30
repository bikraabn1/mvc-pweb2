<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->post('/deleteBook', BukuController::class, 'deleteBook');

$router->get('/newBook', BukuController::class, 'addBook');
$router->post('/newBook', BukuController::class, 'addBook');

$router->get('/updateData', BukuController::class, 'updateBook');
$router->post('/updateData', BukuController::class, 'postBook');
$router->dispatch();