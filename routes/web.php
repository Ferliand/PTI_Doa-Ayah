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
//     return view('admin.arsip.create');
// });

Route::resource('arsip', ArsipController::class);
// Route::get('/tambaharsip', [ArsipController::class, 'create'])->name('arsip');
// Route::put('/arsip/{id}', [ArsipController::class, 'edit'])->name('edit');



// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
