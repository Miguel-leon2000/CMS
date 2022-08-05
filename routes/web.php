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
Route::post('admin/configuracion/menu', 'ConfigMenuController@store')->name('store.menu');
Route::get('admin/configuracion/menu/{id}', 'ConfigMenuController@edit_item')->name('edit_item');
Route::patch('admin/configuracion/menu/item/{id}', 'ConfigMenuController@update_item')->name('update_item');
Route::delete('admin/configuracion/menu/{id}','ConfigMenuController@destroy')->name('destroy.menu');

/*GENERAL*/
Route::get('admin/configuracion/general', 'ConfigGeneralController@index')->name('index.general');
Route::patch('admin/configuracion/general/{id}', 'ConfigGeneralController@update_general')->name('update.general');

/*FOOTER*/
Route::get('admin/configuracion/footer', 'ConfigFooterController@index')->name('index.footer');
Route::patch('admin/configuracion/footer/{id}', 'ConfigFooterController@update_footer')->name('update.footer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
