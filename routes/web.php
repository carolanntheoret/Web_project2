<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Models\Reservation;
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
Route::get('/admin', [SiteController::class, 'showAdmin'] );
Route::get('/user-zone', [SiteController::class, 'showUser'] );
Route::get('/packages', [SiteController::class, 'showPackage']);
Route::get('/my-tickets', [SiteController::class, 'showTickets']);
Route::get('/contact', [SiteController::class, 'showContact']);
Route::get('/schedule', [SiteController::class, 'showSchedule']);

/* News Routes */
Route::get('/news', [NewsController::class, 'showNewsPage']);
Route::get('/news/{article}', [NewsController::class, 'show']);

/***** submit pages *****/
/* log in/out */
Route::post('/connect', [UserController::class, 'connect']);
Route::get('/disconnect', [UserController::class, 'disconnect']);

/* User */
Route::post('/create-user', [UserController::class, 'create']);
Route::post('/modify-user', [UserController::class, 'modify']);
Route::get('/delete-user/{id}', [UserController::class, 'delete']);

/* Reservation */
Route::post('/reservation', [ReservationController::class, 'reserve']);
Route::get('/delete-reservation', [ReservationController::class, 'cancel']);
Route::get('/modify-reservation', [ReservationController::class, 'modify']);

/* Activity */
Route::post('/create-activity', [ActivityController::class, 'create']);
Route::post('/modify-activity', [ActivityController::class, 'modify']);
Route::get('/delete-activity', [ActivityController::class, 'delete']);

/* API */
Route::get('/get-reservations/{user_id}', [ReservationController::class, 'getReservations']);
Route::get('/get-reservation/{pass_id}', [ReservationController::class, 'getReservation']);
