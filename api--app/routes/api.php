<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\StudentAPI;
use App\Http\Controllers\TestResource;

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


Route::get('/data', [DummyAPI::class, 'getData']);



Route::get('/std', [StudentAPI::class, 'getSTD']);
Route::get('/std/{id?}', [StudentAPI::class, 'getSTDbyID']);
Route::post('/stdadd', [StudentAPI::class, 'setSTD']);
Route::put('/stdup', [StudentAPI::class, 'upSTD']);
Route::delete('/stdde/{id}', [StudentAPI::class, 'deSTD']);
Route::get('/searchSTD/{name}', [StudentAPI::class, 'seSTD']);


Route::apiResource('/test', TestResource::class);
