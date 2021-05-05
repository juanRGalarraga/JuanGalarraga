<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
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

Route::get('/', HomeController::class);

//Auto
Route::get('/autos', [AutoController::class, 'index']);
Route::get('/autos/create', [AutoController::class, 'create']);
Route::get('/autos/{nombre}', [AutoController::class, 'show']);






