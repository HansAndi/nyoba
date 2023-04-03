<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('/', 'menuController@index')->name('beranda');
// route::get('/tambah-data', 'menuController@create')->name('tambah-data');
// route::get('/edit-data/{id}', 'menuController@edit')->name('edit-data');
// route::post('/simpan-data', 'menuController@store')->name('simpan-data');

Route::resource('menu', menuController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
