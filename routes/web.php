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

//home
Route::get('/', 'Home\IndexController@index');
Route::get('/imageGallery','Home\IndexController@imageGallery');
Route::get('/articleArchive','Home\IndexController@articleArchive');
Route::get('/videoCenter','Home\IndexController@videoCenter');
//login
Route::get('/loginPage','Home\LoginController@index');