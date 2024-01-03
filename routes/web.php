<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/LaravelTest', [ProductController::class, 'index'])->name('products.MainPage');
Route::get('/LaravelTest/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/LaravelTest', [ProductController::class, 'store'])->name('products.store');
Route::get('/LaravelTest/{product}/view', [ProductController::class, 'view'])->name('products.view');
Route::get('/LaravelTest/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/LaravelTest/{product}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/LaravelTest/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/LaravelTest/search', [ProductController::class, 'search'])->name('products.search');
