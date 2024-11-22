<?php

use App\Http\Controllers\HomeworkController;
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
// Route::get('/lk/student/list', [StudentController::class, 'show'])
// ->name('student.list');
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subjects/{subject}', [SubjectController::class, 'show']);

//Домашка для учеников

Route::get('/subjects/{subject}/homework', [HomeworkController::class, 'index']);
Route::get('/subjects/{subject}/homework/create', [HomeworkController::class, 'create']);
Route::post('/subjects/{subject}/homework', [HomeworkController::class, 'store'])->middleware('auth');
Route::get('/subjects/{subject}/homework/{homework}', [HomeworkController::class, 'show']);

Route::get('/subjects/{subject}/homework/{homework}/edit', [HomeworkController::class, 'edit'])
->middleware('auth');
//->can('edit', 'homework');

Route::patch('/subjects/{subject}/homework/{homework}', [HomeworkController::class, 'update']);
Route::delete('/subjects/{subject}/homework/{homework}', [HomeworkController::class, 'destroy']);

// Регистрация
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Аутентификация
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
