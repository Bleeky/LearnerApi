<?php

Route::group(['prefix' => 'api'], function ()
{
	Route::resource('modules', 'ModuleController', ['only' => ['index', 'show']]);
//	Route::resource('admin-modules', 'ModuleAdminController');
//	Route::resource('modules/{id}/diapo', 'DiapoController');
	Route::get('diapos/{diapoId}/next', 'DiapoController@next');
	Route::get('diapos/{diapoId}/prev', 'DiapoController@prev');
	Route::get('diapos/{moduleId}', 'DiapoController@first');
});

Route::controllers([
	'/login' => 'AuthenticationController',
	'/admin' => 'AdminController'
]);