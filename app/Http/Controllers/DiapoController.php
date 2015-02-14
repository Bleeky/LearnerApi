<?php namespace LearnerApi\Http\Controllers;

use LearnerApi\Http\Requests;
use LearnerApi\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DiapoController extends Controller {

	public function next($diapoId)
	{
		return Response::json(['status' => 200, 'module' => Module::find($id)
		]);
	}

	public function prev($diapoId)
	{

	}

	public function first($moduleId)
	{
		return 'YEAH !';
	}

}
