<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/', [ItemController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);
Route::get('/mylist', [ItemController::class, 'mylist']);
// Route::view('/test-login', 'auth.login');
Route::get('/items', [ItemController::class, 'index']);
Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
 });
Route::get('/item/{id}', [ItemController::class, 'show']);
Route::get('/purchase/{id}', [ItemController::class, 'purchase']);