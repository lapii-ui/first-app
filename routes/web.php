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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('localization/{locale}', 'LanguageController@SwitchLanguage');

Route::get('get-profile', 'UserController@get_user');
Route::get('create-profile', 'UserController@create');
Route::post('add-profile', 'UserController@add_user');
Route::get('edit-profile/{id}', 'UserController@edit_user');
Route::post('update-profile/{id}', 'UserController@update_user');
Route::get('delete-profile/{id}', 'UserController@delete_user');

Route::get('get-warehouse', 'WarehouseController@get_warehouse');
Route::get('create-warehouse', 'WarehouseController@create_warehouse');

Route::get('get-grouptable', 'TableController@get_grouptable');
Route::get('create-grouptable', 'TableController@create_grouptable');
Route::post('add-grouptable', 'TableController@add_grouptable');
Route::get('edit-grouptable/{id}', 'TableController@edit_grouptable');
Route::post('update-grouptable/{id}', 'TableController@update_grouptable');

Route::resource('/front', 'FrontEndController');
