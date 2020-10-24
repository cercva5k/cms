<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TestController::class, 'index']);
Route::get('/create', [TestController::class, 'create']);
Route::post('/index', [TestController::class, 'store']);
Route::get('/show/{id}', [TestController::class, 'show']);
Route::post('/show/{id}', [TestController::class, 'destroy']);

Auth::routes();

Route::get('/admin/home', [HomeController::class, 'index'])->name('home');
