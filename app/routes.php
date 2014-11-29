<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(array('before' => 'auth'), function(){
	Route::controller('admin/album', 'AlbumController');
	Route::get('admin/logout', 'LoginController@getLogout');
});
Route::get('admin', function(){
	return Redirect::to('admin/album/list');
});
Route::get('admin/login', 'LoginController@getLogin');
Route::post('admin/login', 'LoginController@postLogin');
Route::controller('/', 'HomeController');
Route::get('/admin', function(){
	return Redirect::to('admin/album/list');
});
