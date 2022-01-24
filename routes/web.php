<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
//use Illuminate\Auth;
use Illuminate\Http\Request;



Route::get('/', function () {
  return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index']);

//the customers home pages
Route::get('/cars', [App\Http\Controllers\HomeController::class, 'index'])->name('cars');
Route::post ('/cars', [App\Http\Controllers\HomeController::class, 'index'])->name('cars');

Route::get('/carimage', [App\Http\Controllers\HomeController::class, 'index'])->name('carimage');
Route::post('/carimage', [App\Http\Controllers\HomeController::class, 'index'])->name('carimage');

Route::get('/carreview', [\App\Http\Controllers\HomeController::class, 'index'])->name('carreview');
Route::post('/carreview', [\App\Http\Controllers\HomeController::class, 'index'])->name('carreview');

Route::get('/customer', [App\Http\Controllers\HomeController::class, 'index'])->name('customer');
Route::post('/customer', [App\Http\Controllers\HomeController::class, 'index'])->name('customer');

Route::get('/customercredential', [App\Http\Controllers\HomeController::class, 'index'])->name('customercredential');
Route::post('/customercredential', [App\Http\Controllers\HomeController::class, 'index'])->name('customercredential');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'index'])->name('about');
Route::post('/about', [App\Http\Controllers\HomeController::class, 'index'])->name('about');
//admin controller aspect
Route::get('/about', [App\Http\Controllers\AdminController::class, 'about']);
Route::get('/home', [App\Http\Controllers\AdminController::class, 'home']);
Route::get('/cars', [App\Http\Controllers\AdminController::class, 'cars']);
Route::get('/carimage', [App\Http\Controllers\AdminController::class, 'carimage']);
Route::get('/carowner', [App\Http\Controllers\AdminController::class, 'carowner']);
Route::get('/carownercredential', [App\Http\Controllers\AdminController::class, 'carownercredential']);
Route::get('/carrental', [App\Http\Controllers\AdminController::class, 'carrental']);
Route::get('/carreview', [App\Http\Controllers\AdminController::class, 'carreview']);
Route::get('/customer', [App\Http\Controllers\AdminController::class, 'customer']);
Route::get('/customercredential', [App\Http\Controllers\AdminController::class, 'customercredential']);
Route::get('/payment', [App\Http\Controllers\AdminController::class, 'payment']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
