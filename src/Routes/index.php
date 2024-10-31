<?php namespace App\Routes;

use App\Controllers\BukuController;
use App\Controllers\PengembalianController;
use App\Router;

$router = new Router();
$router->get('/pengembalian', PengembalianController::class, 'index');
$router->get('/newPengembalian', PengembalianController::class, 'addPengembalian');
$router->post('/newPengembalian', PengembalianController::class, 'addDatas');

$router->dispatch();
