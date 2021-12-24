<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('product/book', function () {
    return view('product/book');
});

Route::get('product/cd', function () {
    return view('product/cd');
});

Route::get('product/game', function () {
    return view('product/game');
});

