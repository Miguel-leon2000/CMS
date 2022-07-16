<?php

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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/', 'Auth\LoginController@showLogin')->middleware('guest')->name('loginform');
Route::post('login', 'Auth/LoginController@login')->name('login');

Route::get('admin/plantillas', 'PlantillaController@index')->name('index.plantilla');
Route::get('admin/plantilla/crear', 'PlantillaController@create')->name('create.plantilla');
Route::post('admin/plantilla/crear', 'PlantillaController@store')->name('store.plantilla');
Route::get('admin/plantilla/actualizar/{id}', 'PlantillaController@edit')->name('edit.plantilla');
Route::patch('admin/plantilla/actualizar/{id}', 'PlantillaController@update')->name('update.plantilla');
Route::delete('admin/plantilla/{id}', 'PlantillaController@destroy')->name('destroy.plantilla');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
