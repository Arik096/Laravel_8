<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/userlist',[UserController::class, 'userList']);
Route::view('/usercreate','user.createuser');
Route::post('/usercreate',[UserController::class, 'userCreate']);
Route::post('/userlist',[UserController::class, 'saveUserData']);
Route::get('/userupdate/{id}',[UserController::class, 'userUpdate']);
// Route::get('/userdelete/{id}',[UserController::class, 'userDelete']);
