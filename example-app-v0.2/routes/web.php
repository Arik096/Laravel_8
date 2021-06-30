<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\addMemberController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\EmpController;

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


// Route::get('/user',[UserController::class, 'index']);
// Route::get('/user',[UserController::class, 'getData']);
// Route::get('/user',[UserController::class, 'apiData']);

// Route::view('/user', 'user');
// Route::post('/userloged', [UserController::class, 'testRequest']);
// Route::delete('/userloged', [UserController::class, 'testRequest']);
// Route::put('/userloged', [UserController::class, 'testRequest']);
// Route::get('/userloged', [UserController::class, 'testRequest']);


// Route::view('/login','login');
// Route::view('/profile','profile');
// Route::post('/logged', [loginController::class, 'index']);
// Route::get('/login', function () {
//     if (session()->has('username')) {
//         return redirect('/profile');
//     }
//     return view('login');
// });
// Route::get('/logout', function () {
//     if(session()->has('username')){
//         session()->pull('username');
//     }
//     return redirect('/login');
// });


// Route::view('/member', 'member');
// Route::post('/added', [addMemberController::class,'addMember']);


// Route::view('/upload','fileUploader');
// Route::post('/upload',[UploadController::class, 'index']);


Route::get('/local/{lang}', function ($lang) {
        App::setlocale($lang);
        return view('local');
});
Route::view('/local','local');


Route::get('/emplist',[EmpController::class, 'show']);
