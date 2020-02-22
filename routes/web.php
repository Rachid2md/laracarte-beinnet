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

Route::get('/', [
	'as'=>'root_path',
	'uses'=>'PagesController@home'
]);

//Route::name('root_path')->get('/', 'PagesController@home'); Equivaut à ce qui est de la ligne 14 à la ligne 17 mais très simpliste donc moins joli

Route::get('/about', [
	'as'=>'about_path',
	'uses'=>'PagesController@about'
]);

Route::get('/contact', [
	'as'=>'contact_path',
	'uses'=>'ContactController@create'
]);

Route::post('/contact', [
	'as'=>'contact_path',
	'uses'=>'ContactController@store'
]);