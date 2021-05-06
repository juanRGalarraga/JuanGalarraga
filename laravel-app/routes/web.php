<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
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

Route::get('/', HomeController::class);
Route::get('/items', [ItemController::class, 'index'])->name('item.index');
Route::get('/items/{id}', [ItemController::class, 'show'])->name('item.show');
Route::post('/items/create', [ItemController::class, 'create'])->name('item.create');
Route::put('/items/{id}/update', [ItemController::class, 'update'])->name('item.update');
Route::delete('/items/{id}/delete', [ItemController::class, 'delete'])->name('item.delete');





