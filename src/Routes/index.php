<?php namespace App\Routes;
use App\Controllers\PeminjamanController;
use App\Router;

$router = new Router();
$router->get('/peminjaman',  PeminjamanController::class, 'index');
$router->get('/newPinjam', PeminjamanController::class, 'addPeminjaman');
$router->post('/newPinjam', PeminjamanController::class, 'addPeminjaman');
$router->get('/updatePinjam', PeminjamanController::class, 'updatePeminjaman');
$router->post('/updatePinjam', PeminjamanController::class, 'postPeminjaman');
$router->dispatch();