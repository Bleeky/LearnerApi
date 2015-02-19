<?php
namespace LearnerApi\Http\Controllers;

use Illuminate\Support\Facades\Input;
use LearnerApi\Diapo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use LearnerApi\Http\Requests\Form1Request;
use LearnerApi\Http\Requests\Form2Request;

class DiapoEditAdminController extends AdminController {

	public function getEditToForm($id, $form)
	{
		$json = array();
		$json['id'] = $id;

		return view($form)->with('diapo', $json);
	}

	public function postUpdateForm1(Form1Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"  => '1',
			"title" => $update['diapo-title'],
			"data"  => $update['diapo-data'],
			"img"   => $current_content[0]->img,
		]];
		$new_json = json_encode($new_json);

		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		if ($current_content[0]->img != null)
		{
			$filename = explode('/', $current_content[0]->img);
			if (File::exists('resources/diapos/' . end($filename)))
				File::delete('resources/diapos/' . end($filename));
		}

		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;

		return view('diapos.edit')->with('diapo', $json)->withErrors(['success' => 'Module updated with success.']);
	}

	public function postUpdateForm2(Form2Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"  => '2',
			"img"   => $current_content[0]->img,
			"title" => $current_content[0]->title,
			"data"  => $current_content[0]->data,
		]];
		if (Input::hasFile('diapo-picture'))
		{
			if ($current_content[0]->img != null)
			{
				$filename = explode('/', $current_content[0]->img);
				if (File::exists('resources/diapos/' . end($filename)))
					File::delete('resources/diapos/' . end($filename));
			}
			$new_file = $update['diapo-picture'];
			$filename = Str::random($lenght = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;

		return view('diapos.edit')->with('diapo', $json);
	}

	public function postUpdateForm3()
	{
		$old_diapo = Diapo::find(Input::get('diapo-id'));
		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"  => '3',
			"img"   => $current_content[0]->img,
			"title" => $current_content[0]->title,
			"data"  => $current_content[0]->data,
		]];
		if (Input::hasFile('diapo-picture'))
		{
			if ($current_content[0]->img != null)
			{
				$filename = explode('/', $current_content[0]->img);
				if (File::exists('resources/diapos/' . end($filename)))
					File::delete('resources/diapos/' . end($filename));
			}
			$new_file = Input::file('diapo-picture');
			$filename = Str::random($lenght = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}
		$new_json[0]['title'] = Input::get('diapo-title');
		$new_json[0]['data'] = Input::get('diapo-data');
		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;

		return view('diapos.edit')->with('diapo', $json);
	}

}
