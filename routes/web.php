<?php

use App\Http\Controllers\BookingController;
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

Route::get('/', [BookingController::class, 'index'])->name('home');
Route::get('/create', [BookingController::class, 'create'])->name('create');
Route::post('/store', [BookingController::class, 'store'])->name('store');
Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [BookingController::class, 'update'])->name('update');
