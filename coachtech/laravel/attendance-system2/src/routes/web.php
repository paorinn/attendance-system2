<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controller\AuthenticatedSessionController;
use App\Http\Controller\RegisteredUserController;
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
Route::get('/', [AttendanceController::class, 'index']);

Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login',[AuthenticatedSessionController::class, 'store']);
Route::post('/login',[AuthenticatedSessionController::class, 'destroy']);

