<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'res'])->name('res');

Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('Aboutus', [HomeController::class, 'Aboutus'])->name('About');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');
Route::get('Admin', [HomeController::class, 'Admin'])->name('Admin');
Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::get('Adminhome', [HomeController::class, 'Adminhome'])->name('Adminhome');
Route::get('Addseat', [HomeController::class, 'Addseat'])->name('Addseat');
Route::get('ViewRes', [HomeController::class, 'ViewRes'])->name('ViewRes');

Route::prefix('/crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
});

Route::post('loginProcess', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::post('AdminloginProcess', [AuthController::class, 'AdminloginProcess'])->name('AdminloginProcess');

Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
Route::post('/seats/book', [SeatController::class, 'bookSeat'])->name('seats.book');
Route::post('/seats', [SeatController::class, 'store'])->name('seats.store');
Route::get('viewuser', [SeatController::class, 'viewuser'])->name('viewuser');
Route::get('/booked-seats', [SeatController::class, 'viewBookedSeats'])->name('booked.seats');

Route::post('/store', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('Viewattendance', [HomeController::class, 'Viewattendance'])->name('Viewattendance');
Route::post('/attendance/search', [AttendanceController::class, 'search'])->name('search');
Route::get('Adminhome', [HomeController::class, 'Adminhome'])->name('Adminhome');

