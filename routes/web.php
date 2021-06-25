<?php

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

Route::get('/', 'MainController@show')->name('user-dashbord');
Route::get('/user/create','MainController@create')->name('user-create');
Route::post('/user/store','MainController@store')->name('user-store');
Route::get('/user/edit/{id}','MainController@edit')->name('user-edit');
Route::post('/user/update{id}', 'MainController@update')->name('user-update');
