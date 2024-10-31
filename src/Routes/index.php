<?php namespace App\Routes;

use App\Controllers\KategoriController;
use App\Router;

$router = new Router();
$router->get('/kategori', KategoriController::class, 'index');

$router->get('/newCategory', KategoriController::class, 'addCategory');
$router->post('/newCategory', KategoriController::class, 'addCategory');
$router->post('/kategori', KategoriController::class, 'deleteCategory');

$router->get('/updatekategori', KategoriController::class, 'updateCategory');
$router->post('/updatekategori', KategoriController::class, 'postCategory');

$router->dispatch();