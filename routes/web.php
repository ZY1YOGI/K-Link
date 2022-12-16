<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


Route::get('/', [Controllers\WelcomeController::class, "index"])->name("welcome");
Route::get('/home', [Controllers\HomeController::class, "index"])->name("home");
Route::get('/profile', [Controllers\HomeController::class, "profile"])->name("profile");



Route::get('/auth', [Controllers\Auth\AuthController::class, "index"])->name("auth");
Route::post('/auth/login', [Controllers\Auth\LoginController::class, "login"])->name("login");
Route::post('/auth/register', [Controllers\Auth\RegisterController::class, "register"])->name("register");
Route::post('/auth/logout', [Controllers\Auth\LoginController::class, "logout"])->name("logout");
