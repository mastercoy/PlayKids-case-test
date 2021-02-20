<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products-create', [ProductController::class, 'createProduct']);
Route::get('/purchase', [UserController::class, 'purchase']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register-user', [UserController::class, 'register']);

