<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/students/all', [UniversityController::class, 'showStudents']);
Route::get('/show/students/{id}', [UniversityController::class, 'showStudent']);
Route::get('/show/colleges', [UniversityController::class, 'showColleges']);
Route::get('/show/college/{id}', [UniversityController::class, 'showCollege']);
Route::get('/show/departments', [UniversityController::class, 'showDepartment']);