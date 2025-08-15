<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// Redirect home page to students list
Route::get('/', function () {
    return redirect('/students');
});

// Students CRUD routes
Route::resource('students', StudentController::class);

// Courses CRUD routes
Route::resource('courses', CourseController::class);
