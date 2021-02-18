<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/purchase', [UserController::class, 'purchase']);

Route::post('/login', [UserController::class, 'login']); //vai retornar um token pra conversar com o front
