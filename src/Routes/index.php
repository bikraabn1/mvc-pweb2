<?php namespace App\Routes;
use App\Controllers\PeminjamanController;
use App\Router;

$router = new Router();
$router->get('/',  PeminjamanController::class, 'index');
$router->get('/newPinjam', PeminjamanController::class, 'addPeminjaman');
$router->post('/newPinjam', PeminjamanController::class, 'addPeminjaman');
$router->dispatch();