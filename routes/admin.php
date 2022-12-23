<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, "dashboard"])->name("admin.dashboard");
Route::get('/teachers', [App\Http\Controllers\Admin\AdminController::class, "teachers"])->name("admin.teachers");
Route::get('/students', [App\Http\Controllers\Admin\AdminController::class, "students"])->name("admin.students");

