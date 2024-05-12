<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\KelasController as KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gretings', function () {
return "hello world";
});

Route::resource('/users', UserController::class);
Route::resource('/kelas', KelasController::class);
