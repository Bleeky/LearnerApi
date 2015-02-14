<?php namespace LearnerApi\Http\Controllers;

use LearnerApi\Http\Requests;
use LearnerApi\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DiapoController extends Controller {

	public function next($diapoId)
	{
		$current = Diapo::find($diapoId);
		return Response::json(['status' => 200, 'module' => Diapo::find($current->next)
		]);
	}

	public function prev($diapoId)
	{
		$current = Diapo::find($diapoId);
		return Response::json(['status' => 200, 'module' => Diapo::find($current->prev)
		]);
	}

	public function first($moduleId)
	{
		return Response::json(['status' => 200, 'module' => Diapo::where('module_id', '=', $moduleId)->where('prev_id', '=', '0')
		]);
	}

}
