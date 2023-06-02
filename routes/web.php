<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;

Route::get('/', function () {
	return view('home.index');
})->name('home');

Route::resource('planes', PlaneController::class);

Route::view('/about', 'about')->name('about');

Route::view('/customer', 'customer')->name('customer');

Route::view('/contact', 'contact')->name('contact');