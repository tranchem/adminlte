<?php
/*
 * Same configuration as Laravel 5.2 make auth:
 * See https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/routes.stub
 * but take into account we have to add 'web' middleware group here because Laravel by defaults add this middleware in
 * RouteServiceProvider
 */
Route::group(['middleware' => 'web'], function () {
	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::get('/tu', 'HomeController@tu');

	Route::get('/muahang', 'HomeController@muahang');

	Route::get('/banhang', ['as' => 'banhang', 'uses' => 'HomeController@banhang']);

	Route::post('/postForm', ['as' => 'postForm', 'uses' => 'HomeController@postForm']);

	Route::get('/update', ['as' => 'update', 'uses' => 'HomeController@update']);

	Route::post('/update_access', ['as' => 'update_access', 'uses' => 'HomeController@update_access']);

	Route::get('/delete', ['as' => 'delete', 'uses' => 'HomeController@delete']);
});
