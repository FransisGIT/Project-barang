<?php

use App\Http\Controllers\Test;
use App\Http\Controllers\Databarang;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


// LOGIN
Route::post('/fungsiRegister', [Test::class, 'fungsiRegister']);
Route::post('/fungsiLogin', [Test::class, 'fungsiLogin']);

//LOGOUT
Route::post('/logout', [Test::class, 'logout'])->middleware('auth');

// ADMIN
Route::resource('admin', Databarang::class)->middleware('auth');

Route::get('/table', [Databarang::class, 'halamanTable']);
Route::get('/editdelete', [Databarang::class, 'edit']);
Route::get('/fungsi_Delete', [Databarang::class, 'fungsi_Delete']);




// route single login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Auth::routes();