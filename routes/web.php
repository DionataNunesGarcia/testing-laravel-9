<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\BusinessesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{user}', [UserController::class, 'show']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/businesses', [BusinessesController::class, 'index'])
    ->name('businesses.index');

Route::post('/businesses/store', [BusinessesController::class, 'store'])
    ->name('businesses.store');

