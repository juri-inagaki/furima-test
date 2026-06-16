<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| 商品一覧
|--------------------------------------------------------------------------
*/

Route::get('/', [ItemController::class, 'index']);

Route::get('/items', [ItemController::class, 'index']);

Route::get('/mylist', [ItemController::class, 'mylist']);

Route::get('/item/{id}', [ItemController::class, 'show']);

Route::get('/purchase/{id}', [ItemController::class, 'purchase']);

/*
|--------------------------------------------------------------------------
| ログイン・ログアウト
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/checkout/{id}', [ItemController::class, 'checkout']);

Route::get('/sell', [ItemController::class, 'sell']);

Route::get('/mypage', [ItemController::class, 'mypage']);

Route::get('/mypage/profile', [ProfileController::class, 'edit']);

Route::post('/mypage/profile', [ProfileController::class, 'update']);

Route::get('/purchase/address/{id}', [ProfileController::class, 'addressEdit']);
Route::post('/purchase/address/{id}', [ProfileController::class, 'addressUpdate']);


Route::get('/mypage', [ItemController::class, 'mypage'])
    ->name('mypage');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::post('/like/{id}', [ItemController::class, 'like']);
Route::get('/mylist', [ItemController::class, 'mylist']);    
Route::post('/sell', [ItemController::class, 'store']);
Route::get('/sell', [ItemController::class, 'sell'])->name('sell');
Route::post('/comment/{id}', [ItemController::class, 'comment']);
