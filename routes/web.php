<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'test']);
Route::post('/create-user', [UserController::class, 'createUser']);
Route::get('/delete-user', [UserController::class, 'deleteUser']);
Route::post('/connect', [SiteController::class, 'connect']);
Route::get('/disconnect', [SiteController::class, 'disconnect']);
