<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\Http\Middleware\ModuleUpdateRequest;
use LearnerApi\Module;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ModuleAdminController extends AdminController {

	public function getIndex()
	{
		return view('modules.module')->with('modules', Module::all());
	}

	public function getEditModule($id)
	{
		return view('modules.edit')->with('module', Module::find($id));
	}

	public function postUpdateModule(ModuleUpdateRequest $request)
	{
		$update = $request->all();

		$module = Module::find($update['module-id']);
		$module->description = $update['module-description'];
		$module->title = $update['module-title'];
		if ($request->hasFile('module-picture'))
		{
			if ($module->img != null)
			{
				$filename = explode('/', $module->img);
				if (File::exists('resources/modules/' . end($filename)))
					File::delete('resources/modules/' . end($filename));
			}
			$filename = Str::random($lenght = 30) . '.' . $update['module-picture']->getClientOriginalExtension();
			$update['module-picture']->move('resources/modules', $filename);
			$module->img = asset('resources/modules/' . $filename);
		}
		$module->save();

		return view('modules.edit')->with('module', Module::find($request['module-id']))->withErrors(['success' => 'Module updated with success.']);
	}

	public function getDeleteModule($id)
	{
		Module::find($id)->delete();

		return view('modules.module')->with('modules', Module::all());
	}
}