<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Controllers\KategoriController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');
$router->get('/kategori', KategoriController::class, 'index');
$router->get('/newBook', BukuController::class, 'addBook');
$router->post('/newBook', BukuController::class, 'addBook');
$router->get('/newCategory', KategoriController::class, 'addCategory');
$router->post('/newCategory', KategoriController::class, 'addCategory');
$router->post('/kategori', KategoriController::class, 'deleteCategory');

$router->get('/updatekategori', KategoriController::class, 'updateCategory');
$router->post('/updatekategori', KategoriController::class, 'postCategory');

$router->dispatch();