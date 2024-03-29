<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;



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

Route::post('subscribe',[HomeController::class,'subscriber'])->name('subscribe');

Route::post('products/inputProduct', [ProductController::class, 'input'])->name('inputProduct');
Route::get('products/book', [ProductController::class, 'showBookproduct'])->name('showBookproduct');
Route::get('products/cd', [ProductController::class, 'showCDproduct'])->name('showCDproduct');
Route::get('products/game', [ProductController::class, 'showGameproduct'])->name('showGameproduct');

Route::get('/products/updateProduct/{product}', [ProductController::class, 'updateProductform']);
Route::post('/products/update/{product}',[ProductController::class,'updateProduct'])->name('updateProduct');

Route::get('/products/deleteProduct/{product}', [ProductController::class, 'deleteProduct']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
