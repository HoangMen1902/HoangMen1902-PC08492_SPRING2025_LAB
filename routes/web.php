<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SinhVienController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/txn', [PostController::class, 'index']);
Route::get('/sinhvien', [SinhVienController::class, 'index']);
