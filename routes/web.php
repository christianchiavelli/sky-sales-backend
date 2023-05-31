<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;

Route::get('/', function () {
	return view('home.index');
})->name('home');

Route::resource('planes', PlaneController::class);