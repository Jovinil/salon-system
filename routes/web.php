<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginLogoutController;

Route::get('/', function () {
    return view('index');
});

//LOGIN AND LOGOUT ROUTES
Route::post('/login', [LoginLogoutController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginLogoutController::class, 'logout'])->name('logout');

Route::post('/customer/create', [UserController::class, 'createUser'])->name('customer.signup');

Route::get('/admin{id}', [UserController::class, 'index'])->name('admin.index');

// Route::get('/customer{id}', [UserController::class, 'index'])->name('customer.index');
// //ADMIN ROUTES
Route::middleware('is.admin')->group(function()
{

});

Route::middleware('is.customer')->group(function()
{
    Route::get('/customer{id}', [UserController::class, 'index'])->name('customer.index');
});

