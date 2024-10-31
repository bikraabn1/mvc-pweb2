<?php namespace App\Routes;

use App\Controllers\KategoriController;
use App\Router;

$router = new Router();
<<<<<<< HEAD
$router->get('/',  BukuController::class, 'index');
$router->post('/', BukuController::class, 'deleteBook');

$router->get('/newBook', BukuController::class, 'addBook');
$router->post('/newBook', BukuController::class, 'addBook');

$router->get('/updateData', BukuController::class, 'updateBook');
$router->post('/updateData', BukuController::class, 'postBook');
=======
$router->get('/kategori', KategoriController::class, 'index');

$router->get('/newCategory', KategoriController::class, 'addCategory');
$router->post('/newCategory', KategoriController::class, 'addCategory');
$router->post('/kategori', KategoriController::class, 'deleteCategory');

$router->get('/updatekategori', KategoriController::class, 'updateCategory');
$router->post('/updatekategori', KategoriController::class, 'postCategory');

>>>>>>> 5b8317a22cbdb5b2cb2506ff1ea3f3f6e62b0835
$router->dispatch();