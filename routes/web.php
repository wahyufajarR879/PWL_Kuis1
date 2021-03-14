<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/welcome', [MainController::class, 'welcome']);

Route::get('/barang', [App\Http\Controllers\barangController::class, 'index']);
Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pegawai', [App\Http\Controllers\pegawaiController::class, 'index']);
Route::get('/supplier', [App\Http\Controllers\supplierController::class, 'index']);
