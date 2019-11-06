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

Route::get('/admin', 'AdminController@index')->name('displayDashboard');

// Categories

Route::get('/admin/createCategory', 'AdminController@createCategory')->name('createCategory');
Route::post('/admin/storeCategory', 'AdminController@storeCategory')->name('storeCategory');
Route::get('/admin/editCategory/{id?}', 'AdminController@editCategory')->name('editCategory');
Route::put('/admin/updateCategory/{id}', 'AdminController@updateCategory')->name('updateCategory');
Route::delete('/admin/destroyCategory/{id}', 'AdminController@deleteCategory')->name('deleteCategory');

// Subcategories

Route::get('/admin/createSubcategory', 'AdminController@createSubcategory')->name('createSubcategory');
Route::post('/admin/storeCategory', 'AdminController@storeSubcategory')->name('storeSubcategory');
Route::get('/admin/editSubcategory/{id?}', 'AdminController@editSubcategory')->name('editSubcategory');
Route::put('/admin/updateSubcategory/{id}', 'AdminController@updateSubcategory')->name('updateSubcategory');
Route::delete('/admin/destroySubcategory/{id}', 'AdminController@deleteSubcategory')->name('deleteSubcategory');

// Handling users

Route::get('/admin/displayUsers', 'UsersController@displayUsers')->name('displayUsers');
Route::get('/admin/createUser', 'UsersController@createUser')->name('createUser');
Route::get('/admin/editUsersRole', 'UsersController@editUsersRole')->name('editUsersRole');
Route::delete('/admin/deleteUser', 'UsersController@deleteUser')->name('deleteUser');

// Roles

Route::get('/admin/displayRoles', 'RolesController@displayRoles')->name('displayRoles');
Route::get('/admin/createRole', 'RolesController@createRole')->name('createRole');
Route::post('/admin/storeRole', 'RolesController@storeRole')->name('storeRole');
Route::get('/admin/editRole{id?}', 'RolesController@editRole')->name('editRole');
Route::put('/admin/updateRole/{id}', 'RolesController@updateRole')->name('updateRole');

// ----- Admin pages ------->


// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

