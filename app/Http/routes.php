<?php

Route::group(['prefix' => 'api'], function ()
{
	Route::resource('module', 'ModuleController');
});