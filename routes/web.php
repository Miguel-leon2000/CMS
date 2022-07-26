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

Route::get('/registrar', 'RegistroController@index')->name('registro');
Route::post('/registrar', 'RegistroController@store')->name('store.registro');

/*PLANTILLAS*/
Route::get('admin/plantillas', 'PlantillaController@index')->name('index.plantilla');
Route::get('admin/plantilla/crear', 'PlantillaController@create')->name('create.plantilla');
Route::post('admin/plantilla/crear', 'PlantillaController@store')->name('store.plantilla');
Route::get('admin/plantilla/actualizar/{id}', 'PlantillaController@edit')->name('edit.plantilla');
Route::patch('admin/plantilla/actualizar/{id}', 'PlantillaController@update')->name('update.plantilla');
Route::delete('admin/plantilla/{id}', 'PlantillaController@destroy')->name('destroy.plantilla');

/*PAGINA*/
Route::get('admin/paginas', 'PaginaController@index')->name('index.pagina');
Route::get('admin/pagina/crear', 'PaginaController@create')->name('create.pagina');
Route::post('admin/pagina/crear', 'PaginaController@store')->name('store.pagina');
Route::patch('admin/pagina/{id}', 'PaginaController@update')->name('update.pagina');
Route::delete('admin/pagina/{id}', 'PaginaController@destroy')->name('destroy.pagina');

/*MENU*/
Route::get('admin/configuracion/menu', 'ConfigMenuController@index')->name('index.menu');
Route::patch('admin/configuracion/menu/{id}', 'ConfigMenuController@update')->name('update.menu');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
