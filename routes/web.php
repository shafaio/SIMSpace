<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeSopController;
use App\Http\Controllers\HomeDocumentController;

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

Route::middleware(['auth'])->group(function() {
    route::resource('/home/sop', HomeSopController::class);
    route::resource('/home/document', HomeDocumentController::class);
    route::get('/tambah-sop', [SopController::class, 'Store']);
    route::post('/logout', [LoginController::class, 'Logout']);
});
Route::middleware([])->group(function() {
    route::get('/admin', [AdminController::class, 'Index'])->name('admin');
    route::post('/tambahData', [UserController::class, 'Store']);
    route::get('/tambahData', [AdminController::class, 'TambahData']);
});

Route::middleware(['guest'])->group(function() {
    route::get('/', [LoginController::class, 'Index'])->name('login');
    route::post('/login', [LoginController::class, 'Login']);
});