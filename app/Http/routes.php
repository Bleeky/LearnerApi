<?php

Route::group(['prefix' => 'api'], function () {
    Route::resource('modules', 'ModuleController', ['only' => ['index', 'show']]);
    Route::get('diapos/{diapoId}/next', 'DiapoController@next');
    Route::get('diapos/{diapoId}/prev', 'DiapoController@prev');
    Route::get('diapos/{moduleId}', 'DiapoController@first');
});

Route::controllers([
	'/login' => 'AuthenticationController',
	'/admin/diapos' => 'DiapoAdminController',
	'/admin/diapos/edit' => 'DiapoEditAdminController',
	'/admin/modules' => 'ModuleAdminController',
	'/admin/users' => 'UserAdminController',
	'/admin' => 'AdminController'
]);