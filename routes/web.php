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
Route::post('add-warehouse', 'WarehouseController@add_warehouse');
Route::get('edit-warehouse/{id}', 'WarehouseController@edit_warehouse');
Route::post('update-warehouse/{id}', 'WarehouseController@update_warehouse');
Route::get('delete-warehouse/{id}', 'WarehouseController@delete_warehouse');

Route::resource('category', 'CategoriesController');
Route::post('update-category/{id}', 'CategoriesController@update_category');
Route::get('delete-category/{id}', 'CategoriesController@delete_category');

Route::get('create-sub-i', 'CategoriesController@create_sub_i');
Route::post('add-sub-i', 'CategoriesController@add_sub_i');
Route::get('edit-sub-i/{id}', 'CategoriesController@edit_sub_i');
Route::post('update-sub-i/{id}', 'CategoriesController@update_sub_i');
Route::get('delete-sub-i/{id}', 'CategoriesController@delete_sub_i');

Route::get('create-sub-ii', 'CategoriesController@create_sub_ii');
Route::post('add-sub-ii', 'CategoriesController@add_sub_ii');
Route::get('edit-sub-ii/{id}', 'CategoriesController@edit_sub_ii');
Route::post('update-sub-ii/{id}', 'CategoriesController@update_sub_ii');
Route::get('delete-sub-ii/{id}', 'CategoriesController@delete_sub_ii');

Route::resource('company', 'CompanyController');
Route::post('update-company/{id}', 'CompanyController@update_company');
Route::get('delete-company/{id}', 'CompanyController@delete_company');

Route::get('create-branch', 'CompanyController@create_branch');
Route::post('add-branch', 'CompanyController@add_branch');
Route::get('edit-branch/{id}', 'CompanyController@edit_branch');
Route::post('update-branch/{id}', 'CompanyController@update_branch');
Route::get('delete-branch/{id}', 'CompanyController@delete_branch');

Route::get('get-grouptables', 'GroupTableController@get_grouptables');
Route::get('create-grouptable', 'GroupTableController@create_grouptable');
Route::post('store-grouptable','GroupTableController@store_grouptable');
Route::get('edit-grouptable/{id}', 'GroupTableController@edit_grouptable');
Route::post('update-grouptable/{id}','GroupTableController@update_grouptable');
Route::get('delete-grouptable/{id}', 'GroupTableController@delete_grouptable');
Route::get('create-subtable', 'GroupTableController@create_subtable');
Route::post('store-subtable','GroupTableController@store_subtable');
Route::get('edit-subtable/{id}','GroupTableController@edit_subtable');
Route::post('update-subtable/{id}','GroupTableController@update_subtable');
Route::get('delete-subtable/{id}', 'GroupTableController@delete_subtable');

Route::get('get-exchange', 'ExchangeRateController@get_exchange');
Route::get('create-exchange', 'ExchangeRateController@create_exchange');
Route::post('store-exchange','ExchangeRateController@store_exchange');
Route::get('edit-exchange/{id}','ExchangeRateController@edit_exchange');
Route::post('update-exchange/{id}','ExchangeRateController@update_exchange');
Route::get('delect_exchange/{id}','ExchangeRateController@delect_exchange');

Route::get('get-receipts', 'ReceiptInfoController@get_receipt');
Route::get('create-receipt','ReceiptInfoController@create_receipt');
Route::post('store-receipt', 'ReceiptInfoController@store_receipt');
Route::get('edit-receipt/{id}', 'ReceiptInfoController@edit_receipt');
Route::post('update-receipt/{id}', 'ReceiptInfoController@update_receipt');
Route::get('delete-receipt/{id}','ReceiptInfoController@delete_receipt');

Route::resource('uom', 'UOMController');
Route::resource('/front', 'FrontEndController');
