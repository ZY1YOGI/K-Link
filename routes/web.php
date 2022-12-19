<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\WelcomeController::class, "index"])->name("welcome");
Route::get('/home', [App\Http\Controllers\HomeController::class, "index"])->name("home");
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, "index"])->name("admin");
Route::get('/profile', [App\Http\Controllers\HomeController::class, "profile"])->name("profile");



Route::get('/auth', [App\Http\Controllers\Auth\AuthController::class, "index"])->name("auth");
Route::post('/auth/login', [App\Http\Controllers\Auth\LoginController::class, "login"])->name("login");
Route::post('/auth/register', [App\Http\Controllers\Auth\RegisterController::class, "register"])->name("register");
Route::post('/auth/logout', [App\Http\Controllers\Auth\LoginController::class, "logout"])->name("logout");
