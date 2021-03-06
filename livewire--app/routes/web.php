<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Home;
use App\Http\Livewire\Form;
use App\Http\Livewire\Students;
use App\Http\Livewire\StudentList;
use App\Http\Livewire\StudentCreate;
use App\Http\Livewire\StudentUpdate;
use App\Http\Livewire\Uplaods;

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


Route::get('/post',[Post::class, 'render']);
Route::get('/user',[User::class, 'render']);

Route::get('/home/{name?}',[Home::class, 'render']);

Route::get('/form',[Form::class, 'render']);


Route::get('/std',Students::class);



// CRUD Routes
Route::prefix('crud')->group(function () {
    Route::get('/list',StudentList::class)->name('stdlist');
    Route::get('/create',StudentCreate::class)->name('stdcreate');
    Route::get('/upadte/{id}',StudentUpdate::class)->name('stdupdate');
});


Route::get('/up',Uplaods::class)->name('up');
