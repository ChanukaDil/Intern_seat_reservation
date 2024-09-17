<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'res'])->name('res');

Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('Aboutus', [HomeController::class, 'Aboutus'])->name('About');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/crud', [CrudController::class, 'index'])->name('crud');

Route::prefix('/crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
});

Route::post('loginProcess', [AuthController::class, 'loginProcess'])->name('loginProcess');

Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
Route::post('/seats/book', [SeatController::class, 'bookSeat'])->name('seats.book');


