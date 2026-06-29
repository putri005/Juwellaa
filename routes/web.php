<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Main\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/main', [BerandaController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});