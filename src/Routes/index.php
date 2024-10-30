<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Controllers\PengembalianController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->get('/newBook', BukuController::class, 'addBook');
$router->post('/newBook', BukuController::class, 'addBook');

$router->get('/tampilPengembalian', PengembalianController::class, 'index');
$router->get('/pengembalian/new', PengembalianController::class, 'addPengembalian');
$router->post('/pengembalian/new', PengembalianController::class, 'addPengembalian');
$router->get('/pengembalian/edit/{id}', PengembalianController::class, 'editPengembalian');
$router->post('/pengembalian/edit/{id}', PengembalianController::class, 'editPengembalian');
$router->post('/pengembalian/delete/{id}', PengembalianController::class, 'deletePengembalian');
$router->dispatch();