<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/purchase', [UserController::class, 'purchase']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register-user', [UserController::class, 'register']);

//Todo rota para listar e excluir produtos
