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

Route::get('/', 'HomeController@showDashboard');

Route::get('/campus', 'HomeController@showCampus');

Route::get('/college', 'HomeController@showCollege');

Route::get('/college/cmc', 'HomeController@showSpecificCollege');

Route::get('/program', 'HomeController@showProgram');

Route::get('/program/broadcomm', 'HomeController@showSpecificProgram');

Route::group(array('prefix' => 'elements'), function () {
	Route::get('ui-elements', 'HomeController@showElUiElements');
	Route::get('chart', 'HomeController@showElChart');
	Route::get('tab-panel', 'HomeController@showElTabPanel');
	Route::get('table', 'HomeController@showElTable');
	Route::get('form', 'HomeController@showElForm');
	Route::get('empty', 'HomeController@showElEmpty');
});
