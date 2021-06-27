<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorRequestController;

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


Route::post('/user',[UserController::class, 'userData']);
Route::view('/login', 'user');


Route::view('/visitor', 'visitor');
Route::post('/visitorReq', [VisitorRequestController::class, 'visitorData']);


Route::view('/home', 'home');
Route::view('/na', 'noaccess');
