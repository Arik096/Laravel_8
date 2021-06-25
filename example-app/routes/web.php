<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ViewDemoController;

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
    //return view('welcome');
    return redirect('/h');
});

Route::get('u/{name}',[Users::class,'index']);

Route::view('/t','test');
Route::view('/c','contact');
Route::view('/h','hello');
Route::view('/a','about');
//Route::view('/us','users');

// Route::get('/users/{name}', function($name){
//     return view('users', ['user_name'=>$name]);
// });

Route::get('/users/{name}',[Users::class, 'LoadView']);

Route::get('/demo',[ViewDemoController::class, 'LoadView']);
