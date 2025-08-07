<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/students', 'StudentController@index');
    Route::get('/classes', 'KelasController@index');
    Route::get('/grades', 'NilaiController@index');
    Route::get('/reports', 'LaporanController@index');
});
