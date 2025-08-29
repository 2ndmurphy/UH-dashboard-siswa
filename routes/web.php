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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'IsAdmin'])->group(function () {
    Route::get('/admin', function() {
        return view('admin.index');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'IsGuru'])->group(function () {
    // Route::get('/guru', function() {
    //     return view('guru.index');
    // })->name('guru.dashboard');
    Route::get('/students', [AuthController::class, 'studentPage'])->name('students');
    Route::get('/classes', [AuthController::class, 'classPage'])->name('classes');
    Route::get('/grades', [AuthController::class, 'gradePage'])->name('grades');
    Route::get('/reports', [AuthController::class, 'reportPage'])->name('reports');
});
