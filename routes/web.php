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

//get all users with groups
Route::get('/','HomeController@index')->name('home');
//filter users
Route::get('/filter','HomeController@filter')->name('filter');
//bulk delete  
Route::delete('/bulk-delete','HomeController@bulkDelete')->name('bulk-delete');
//group routes
Route::resource('group','GroupController',['except'=>['create','show']]);
//user routes
Route::resource('user','UserController');
