<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/x', [OrderController::class, 'listAll']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/y', function () {
    return view('welcome');
});
