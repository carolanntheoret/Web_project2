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

/***** simple views *****/
Route::get('/', [SiteController::class, 'homepage']);
Route::get('/activities', [SiteController::class, 'listActivities']);
Route::get('/admin', [SiteController::class, 'showAdmin'] );
Route::get('/user-zone', [SiteController::class, 'showUser'] );

/***** form views *****/

/***** submit pages *****/
Route::post('/connect', [UserController::class, 'connect']);
Route::get('/disconnect', [UserController::class, 'disconnect']);



