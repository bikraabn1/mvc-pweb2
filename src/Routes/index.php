<?php namespace App\Routes;

use App\Controllers\BukuController;
use App\Controllers\KategoriController;
use App\Controllers\PeminjamanController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->post('/', BukuController::class, 'deleteBook');

$router->get('/newBook', BukuController::class, 'addBook');
$router->post('/newBook', BukuController::class, 'addBook');

$router->get('/updateData', BukuController::class, 'updateBook');
$router->post('/updateData', BukuController::class, 'postBook');
$router->get('/kategori', KategoriController::class, 'index');

$router->get('/newCategory', KategoriController::class, 'addCategory');
$router->post('/newCategory', KategoriController::class, 'addCategory');
$router->post('/kategori', KategoriController::class, 'deleteCategory');

$router->get('/updatekategori', KategoriController::class, 'updateCategory');
$router->post('/updatekategori', KategoriController::class, 'postCategory');


$router = new Router();
$router->get('/peminjaman',  PeminjamanController::class, 'index');
$router->get('/newPinjam', PeminjamanController::class, 'addPeminjaman');
$router->post('/newPinjam', PeminjamanController::class, 'addPeminjaman');
$router->get('/updatePinjam', PeminjamanController::class, 'updatePeminjaman');
$router->post('/updatePinjam', PeminjamanController::class, 'postPeminjaman');
$router->dispatch();