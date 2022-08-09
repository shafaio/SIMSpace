<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SOPController;

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

Route::get('/admin', [AdminController::class, 'Index']);
Route::get('/tambahData', [AdminController::class, 'TambahData']);

Route::get('/', [LoginController::class, 'Index']);
Route::post('/login', [LoginController::class, 'Login']);
Route::post('/logout', [LoginController::class, 'Logout']);

Route::post('/tambahData', [UserController::class, 'Store']);

Route::get('/sop', [SOPController::class, 'Index']);