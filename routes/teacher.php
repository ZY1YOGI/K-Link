<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [App\Http\Controllers\Teacher\TeacherController::class, "dashboard"])->name("teacher.dashboard");
