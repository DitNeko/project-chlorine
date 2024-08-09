<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\User;
use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', User::class);
Route::get('/', [SessionController::class,'index']);
Route::post('/sessions/login', [SessionController::class,'login']);
Route::get('/sessions/logout', [SessionController::class,'logout']);
Route::get('/register', [SessionController::class,'register']);
Route::post('/sessions/create', [SessionController::class,'create']);
Route::resource('/category', CategoryController::class);
Route::get('/create', [SessionController::class,'create']);

