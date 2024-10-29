<?php namespace App\Routes;
use App\Controllers\BukuController;
use App\Router;

$router = new Router();
$router->get('/',  BukuController::class, 'index');

$router->dispatch();