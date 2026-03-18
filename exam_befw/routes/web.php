<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/courses', [CourseController::class, 'index']);

Route::post('/courses', [CourseController::class, 'store']);

Route::get('/courses/create', [CourseController::class, 'create']);

Route::post('/courses/{course}/toggle', [CourseController::class, 'toggle']);
