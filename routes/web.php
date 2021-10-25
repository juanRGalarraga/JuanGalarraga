<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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
Route::get('/', HomeController::class)->name('home');

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');
Route::put('/items/{item}/update', [ItemController::class, 'update'])->name('items.update');
Route::delete('/items/{item}/delete', [ItemController::class, 'delete'])->name('items.delete');


