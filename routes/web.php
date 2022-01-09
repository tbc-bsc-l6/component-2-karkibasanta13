<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use config\newsletter;

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


Route::post('products/inputProduct', [ProductController::class, 'input'])->name('inputProduct');
Route::get('products/book', [ProductController::class, 'showBookproduct'])->name('showBookproduct');
Route::get('products/cd', [ProductController::class, 'showCDproduct'])->name('showCDproduct');
Route::get('products/game', [ProductController::class, 'showGameproduct'])->name('showGameproduct');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
