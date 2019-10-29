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

//

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

// <------ Admin pages ----

Route::get('/admin', 'AdminController@index');

// Categories

Route::get('/admin/createCategory', 'AdminController@createCategory')->name('createCategory');
Route::post('/admin/storeCategory', 'AdminController@storeCategory')->name('storeCategory');
Route::get('/admin/editCategory/{id?}', 'AdminController@editCategory')->name('editCategory');
Route::put('/admin/updateCategory/{id}', 'AdminController@updateCategory')->name('updateCategory');
Route::delete('/admin/destroyCategory/{id}', 'AdminController@deleteCategory')->name('deleteCategory');

// Subcategories

// ----- Admin pages ------->

// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

