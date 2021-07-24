<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\StudentAPI;
use App\Http\Controllers\TestResource;
use App\Http\Controllers\FileController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::apiResource('/test', TestResource::class);
    Route::get('/searchSTD/{name}', [StudentAPI::class, 'seSTD']);
});


Route::get('/data', [DummyAPI::class, 'getData']);



Route::get('/std', [StudentAPI::class, 'getSTD']);
Route::get('/std/{id?}', [StudentAPI::class, 'getSTDbyID']);
Route::post('/stdadd', [StudentAPI::class, 'setSTD']);
Route::put('/stdup', [StudentAPI::class, 'upSTD']);
Route::delete('/stdde/{id}', [StudentAPI::class, 'deSTD']);
//Route::get('/searchSTD/{name}', [StudentAPI::class, 'seSTD']);


//Route::apiResource('/test', TestResource::class);


Route::post('/file',[FileController::class, 'upload']);


Route::post('/login', [UserController::class, 'index']);


