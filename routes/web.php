<?php

use App\Http\Controllers\FileController;
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

Route::get('/',[
    FileController::class, 'index'
]);

Route::get('/about', function () {
    return view('about');
});

Route::get('/file', [
    FileController::class, 'create'
]);

Route::post('/file', [
    FileController::class, 'store'
]);