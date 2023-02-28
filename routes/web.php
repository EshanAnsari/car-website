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

Route::get('/', [App\Http\Controllers\CarController::class, 'index'])->name('view_car');

Auth::routes();

Route::get('/home', [App\Http\Controllers\CarController::class, 'index'])->name('home');
Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('view_car');
Route::get('/create', [App\Http\Controllers\CarController::class, 'create'])->name('add_car');
Route::POST('/store', [App\Http\Controllers\CarController::class, 'store'])->name('save_car');
