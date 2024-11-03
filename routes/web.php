<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LkController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/lk', [LkController::class, 'lk']);


// Аутентификация
// Регистрация
Route::get('/register', [RegisteredUserController::class, 'create']);
