<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('Login');
Route::post('/login', [LoginController::class, 'login'])->name('LoginPost');

Route::get('/register',function(){
    return view('auth.Register');
})->name('Register');




Route::get('/dashboard',function(){
    return view('Dashboard.Dashboard');
})->name('Dashboard');