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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mgma', 'Mgma\MgmaController@index');
Route::get('/mgma/alluser', 'Mgma\MgmaController@userList')->name('alluser');
Route::get('/mgma/create', 'Mgma\MgmaController@create')->name('create');
Route::post('/mgma/store', 'Mgma\MgmaController@store')->name('store');
Route::get('/mgma/user/edit/{id}', 'Mgma\MgmaController@edit');
Route::get('/mgma/user/edit/{id}', 'Mgma\MgmaController@update');

Route::get('/factory', 'Factory\FactoryController@index');

// Route::get('/login', 'Auth\LoginController@login');

// Auth::routes(['register' => false]);

// Route::group(['middleware' => ['Auth']], function () {
//     Route::get('/login', 'LoginController@login');
// });
