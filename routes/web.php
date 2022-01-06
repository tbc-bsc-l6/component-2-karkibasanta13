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
    return view('welcome');
});

Route::get('products/book', function () {
    return view('products.book');
});
Route::get('products/cd', function () {
    return view('products.cd');
});
Route::get('products/game', function () {
    return view('products.game');
});

Route::post('/input', [App\Http\Controllers\ProductController::class, 'input'])->name('input');



//Route::post( 'products/book',function()  {
//    return view('products.book');
//    });
//
//    Route::post( 'products/cd', function()  {
//    return view('products.cd');
//    });
//
//    Route::post( 'products/game', function()  {
//    return view('products.game');
//    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
