<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\LaporanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterPage'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/students', [StudentController::class, 'index']);
Route::get('/classes', [KelasController::class, 'index']);
Route::get('/grades', [NilaiController::class, 'index']);
Route::get('/reports', [LaporanController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
