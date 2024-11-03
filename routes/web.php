<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/lk', [LkController::class, 'lk']);
