<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing.index');
});

Route::get('/login',function(){
   return view('auth.Login'); 
})->name('Login');

Route::get('/register',function(){
    return view('auth.Register');
})->name('Register');