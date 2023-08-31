<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('dashboard');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/apropos',[HomeController::class,'apropos'])->name('apropos');

Route::get('/login',[AuthController::class,'loginForm']);
Route::post('/login',[AuthController::class,'login']);
