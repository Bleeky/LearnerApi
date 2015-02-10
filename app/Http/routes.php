<?php

Route::group(['prefix' => 'api'], function ()
{
	Route::resource('module', 'ModuleController');
	Route::resource('module/{id}/diapo', 'DiapoController');
});