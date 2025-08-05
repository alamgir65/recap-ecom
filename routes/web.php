<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;

//Route::get('/test_admin', function () {
//    return view('admin.test_admin');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/dashboard',[UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin middleware
Route::middleware('admin')->group(function () {
    Route::get('/test_admin',[AdminController::class,'test_admin'])->name('test_admin');
});

require __DIR__.'/auth.php';
