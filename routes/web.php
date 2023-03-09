<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
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
// Show the hompage
Route::get('/', function () {return view('homepage');});


// Routes for connection and disconnection
Route::get('/connect', [SiteController::class, 'connect']);
Route::get('/disconnect', [SiteController::class, 'disconnect']);

// Route to show the pages
Route::get('/activities', [SiteController::class, 'list_activities']);
Route::get('/adminZone', [AdminController::class, 'showadmin'] );
Route::get('/userZone', [AdminController::class, 'showuser'] );



