<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SopController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\VisiMisiController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::resource('table-pegawai', DataPegawaiController::class);
	Route::resource('table-sop', SopController::class);
	Route::resource('table-news', BreakingNewsController::class);
	Route::resource('table-logo', LogoController::class);
	Route::resource('table-slider', SliderController::class);
	Route::resource('table-profil', ProfilController::class);
	Route::resource('table-visi', VisiMisiController::class);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

// Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FrontendController::class, 'show']);




