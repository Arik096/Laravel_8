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


// Route::view('/t1', 'test1');
// Route::view('/t2', 'test2');
Route::group(['middleware'=>['protectedPages']],function(){
    Route::view('/t1', 'test1');
    Route::view('/t2', 'test2');
});

Route::view('/t3', 'test3')->middleware('protectedPageRoute');
Route::view('/t4', 'test4')->middleware('protectedPageRoute');;
Route::view('/t5', 'test5')->middleware('protectedPageRoute');;
