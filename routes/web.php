<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::prefix('/crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
});


