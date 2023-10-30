<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/arsip', function () {
//     return view('arsip');
// });

// Route::get('/tambaharsip', function () {
//     return view('tambaharsip');
// });

Route::resource('arsip', ArsipController::class);
// Route::get('/', [App\Http\Controllers\ArsipController::class, 'index'])->name('arsip');


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
