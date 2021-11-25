<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::post('/brand', [BrandController::class, 'store']);
    Route::put('/brand/{brand}', [BrandController::class, 'update']);
    Route::delete('/brand/{brand}', [BrandController::class, 'destroy']);
    Route::post('/brand/restore/{brand}', [BrandController::class, 'restore']);
    Route::post('/brand/trash', [BrandController::class, 'getTrashed']);

    Route::post('/category', [CategoryController::class, 'store']);
    Route::put('/category/{category}', [CategoryController::class, 'update']);
    Route::delete('/category/{category}', [CategoryController::class, 'destroy']);
    Route::post('/category/restore/{category}', [CategoryController::class, 'restore']);
    Route::post('/category/trash', [CategoryController::class, 'getTrashed']);

    Route::post('/product', [ProductController::class, 'store']);
    Route::put('/product/{product}', [ProductController::class, 'update']);
    Route::delete('/product/{product}', [ProductController::class, 'destroy']);
    Route::post('/product/restore/{product}', [ProductController::class, 'restore']);
    Route::post('/product/trash', [ProductController::class, 'getTrashed']);

    Route::get('/address', [AdressController::class, 'index']);
    Route::get('/address/{address}', [AdressController::class, 'show']);
    Route::post('/address', [AdressController::class, 'store']);
    Route::put('/address/{address}', [AdressController::class, 'update']);
    Route::post('/address/pattern', [AdressController::class, 'getPatternAddress']);

    Route::post('/cart/add', [CartController::class, 'add']);
    Route::post('/cart/remove', [CartController::class, 'remove']);
    Route::post('/cart/remove/product', [CartController::class, 'removeProduct']);
    Route::get('/cart', [CartController::class, 'index']);

    Route::post('/order', [OrderController::class, 'store']);
    Route::get('/order', [OrderController::class, 'index']);
    Route::get('/order/list', [OrderController::class, 'listAll']);
    Route::put('/order/{order}', [OrderController::class, 'update']);
    Route::get('/order/{order}', [OrderController::class, 'show']);

    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/user/{user}', [UserController::class, 'show']);
    Route::put('/user/{user}', [UserController::class, 'update']);
});

Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/{brand}', [BrandController::class, 'show']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category}', [CategoryController::class, 'show']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::get('/product/category/{category}', [ProductController::class, 'getByCategory']);
Route::post('/product/search/category', [ProductController::class, 'searchByCategory']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/user', [UserController::class, 'store']);
