<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LkController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

// Личный кабинет
Route::get('/lk', [LkController::class, 'show'])->middleware('auth');

// Управление предметом
Route::get('/lk/students/list', [SubjectController::class, 'show'])
->name('sudent.list')
->middleware(['auth']);

// Регистрация
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Аутентификация
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
