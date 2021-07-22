<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\StudentAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/data',[DummyAPI::class, 'getData']);



Route::get('/std',[StudentAPI::class, 'getSTD']);
Route::get('/std/{id?}',[StudentAPI::class, 'getSTDbyID']);
Route::post('/stdadd',[StudentAPI::class, 'setSTD']);
