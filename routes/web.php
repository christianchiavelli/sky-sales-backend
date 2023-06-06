<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'handleRegister']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
	Route::get('/', function () {
		return view('home.index');
	})->name('home');
	Route::resource('planes', PlaneController::class);
	Route::view('/about', 'about')->name('about');
	Route::view('/customer', 'customer')->name('customer');
	Route::view('/contact', 'contact')->name('contact');
	Route::get('/planes/{plane}/purchase', [PlaneController::class, 'purchase'])->name('planes.purchase');
});