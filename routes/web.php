<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'res'])->name('res');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('/crud', [CrudController::class, 'index'])->name('crud');

Route::prefix('/crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
});

Route::post('loginProcess', [AuthController::class, 'loginProcess'])->name('loginProcess');

