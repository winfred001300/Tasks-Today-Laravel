<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [TaskController::class, 'welcome']);

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/about', function () {
    return view('about');
});
