<?php namespace LearnerApi\Http\Controllers;

use LearnerApi\Http\Requests;
use Illuminate\Support\Facades\Response;

use LearnerApi\Diapo;

class DiapoController extends Controller {

	public function next($diapoId)
	{
		$current = Diapo::find($diapoId);
		return Response::json(['status' => 200, 'diapo' => Diapo::find($current->next_id)
		]);
	}

	public function prev($diapoId)
	{
		$current = Diapo::find($diapoId);
		return Response::json(['status' => 200, 'diapo' => Diapo::find($current->prev_id)
		]);
	}

	public function first($moduleId)
	{
		return Response::json(['status' => 200, 'diapo' => Diapo::where('module_id', '=', $moduleId)->where('prev_id', '=', null)->get()
		]);
	}

}
