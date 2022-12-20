<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', [App\Http\Controllers\Student\StudentController::class, "index"])->name("student.home");
Route::get('/profile', [App\Http\Controllers\Student\StudentController::class, "profile"])->name("student.profile");
