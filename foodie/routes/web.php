<?php

use Illuminate\Support\Facades\Route;
use App\Restaurants;
use App\User;
use App\Policies\RestaurantsPolicy;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'RestoController@list')->middleware('auth');
Route::view('/add', 'add')->middleware('auth');
Route::post('/add', 'RestoController@add');
Route::get('/edit/{restaurants}', 'RestoController@edit')->middleware('can:view,restaurants');
Route::post('/edit/{restaurants}', 'RestoController@update')->middleware('auth');
Route::get('/restaurant/{restaurants}', 'RestoController@restaurant')->middleware('auth');
Route::post('/restaurant/{restaurants}', 'RestoController@order');
Route::view('/orderdetails', 'orderdetails')->middleware('auth');
Route::get('/profile', 'RestoController@profile')->middleware('auth');
Route::get('/orderhistory', 'RestoController@orderhistory')->middleware('auth');
