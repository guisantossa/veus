<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->middleware('auth');

Route::get('/produtos', [ProductController::class, 'index'])->middleware('auth');
Route::get('/produtos/create', [ProductController::class, 'create'])->middleware('auth');
Route::get('/produtos/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::get('/produtos/{id}', [ProductController::class, 'show'])->middleware('auth');
Route::post('/produtos', [ProductController::class, 'store'])->middleware('auth');
Route::put('produtos/update/{id}',[ProductController::class, 'update'])->middleware('auth');
Route::get('/produtos/addQuantity/{id}', [ProductController::class, 'addQuantity'])->middleware('auth');
Route::put('/produtos/updateQuantity/{id}', [ProductController::class, 'updateQuantity'])->middleware('auth');
Route::get('/produtos/delete/{id}', [ProductController::class, 'destroy'])->middleware('auth');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');
