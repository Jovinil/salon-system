<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginLogoutController;
use App\Http\Controllers\BookingsController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () { return view('auth.login'); })->name('login');

Route::get('/signup', function () { return view('auth.signup'); })->name('signup');

// CREATE USER
Route::post('/customer/create', [UserController::class, 'createUser'])->name('customer.signup');

//LOGIN AND LOGOUT ROUTES
Route::post('/authenticate', [LoginLogoutController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginLogoutController::class, 'logout'])->name('logout');

// Route::get('/customer{id}', [UserController::class, 'index'])->name('customer.index');
// //ADMIN ROUTES
Route::middleware('is.admin')->group(function()
{
    Route::get('/admin{id}', [UserController::class, 'index'])->name('admin.index');
});

Route::middleware('is.customer')->group(function()
{



    Route::get('/customer{id}', [UserController::class, 'index'])->name('customer.index');

    Route::get('/customer/set-appointment', function () {
        return view('customer.create');
    })->name('get.booking');

    Route::post('/customer/create-booking/{id}', [BookingsController::class, 'createBooking'])->name('create.booking');

    Route::get('/customer/see-appointments', [BookingsController::class, 'editBooking'])->name('view.booking');
});

