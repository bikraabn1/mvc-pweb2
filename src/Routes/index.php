<?php namespace App\Routes;
use App\Controllers\LoginController;
use App\Router;

$router = new Router();
$router->get('/',  LoginController::class, 'index');
$router->dispatch();