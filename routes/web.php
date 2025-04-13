<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\dashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing.index');
})->name('Home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('Login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/register',[RegisterController::class, 'index'])->name('Register');
Route::post('/register', [RegisterController::class, 'register'])->name('RegisterPost');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
