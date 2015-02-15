<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\Module;

class ModuleAdminController extends AdminController {

	public function getIndex()
	{
		return view('modules.module')->with('modules', Module::all());
	}

}