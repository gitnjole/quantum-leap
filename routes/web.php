<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

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

// Navigation related routes
Route::get('/',[
    FileController::class, 'index'
]);

Route::get('about', function () {
    return view('about');
});

// File uploading related routes
Route::get('file', [
    FileController::class, 'create'
]);

Route::post('file', [
    FileController::class, 'store'
]);

// User related routes
Route::get('login', [
    UserController::class, 'login'
]);

Route::post('user/authenticate', [
    UserController::class,'authenticate'
]);