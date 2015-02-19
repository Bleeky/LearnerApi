<?php
namespace LearnerApi\Http\Controllers;

use Illuminate\Support\Facades\Input;
use LearnerApi\Diapo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DiapoEditAdminController extends AdminController {

	public function getEditToForm($id, $form)
	{
		$json = array();
		$json['id'] = $id;

		return view($form)->with('diapo', $json);
	}

	public function postUpdateForm1()
	{
		$new_title = Input::get('diapo-title');
		$new_data = Input::get('diapo-data');

		$new_json = [[
			"type"  => '1',
			"title" => $new_title,
			"data"  => $new_data,
		]];
		$new_json = json_encode($new_json);
		$old_diapo = Diapo::find(Input::get('diapo-id'));
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;

		return view('diapos.edit')->with('diapo', $json);
	}

	public function postUpdateForm2()
	{
		$old_diapo = Diapo::find(Input::get('diapo-id'));
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"  => '2',
			"img"   => $current_content[0]->img,
			"title" => $current_content[0]->title,
		]];

		if (Input::has('diapo-title'))
		{
			$new_title = Input::get('diapo-title');
			$new_json[0]['title'] = $new_title;
		}
		if (Input::hasFile('diapo-picture'))
		{
			$new_file = Input::file('diapo-picture');
			if ($current_content[0]->img != null)
			{
				$filename = explode('/', $current_content[0]->img);
				if (File::exists('resources/diapos/' . end($filename)))
					File::delete('resources/diapos/' . end($filename));
			}
			$filename = Str::random($lenght = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}

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
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"  => '3',
			"img"   => $current_content[0]->img,
			"title" => $current_content[0]->title,
			"data"  => $current_content[0]->data,
		]];

		if (Input::has('diapo-title'))
		{
			$new_title = Input::get('diapo-title');
			$new_json[0]['title'] = $new_title;
		}
		if (Input::has('diapo-text'))
		{
			$new_title = Input::get('diapo-title');
			$new_json[0]['title'] = $new_title;
		}
		if (Input::hasFile('diapo-picture'))
		{
			$new_file = Input::file('diapo-picture');
			if ($current_content[0]->img != null)
			{
				$filename = explode('/', $current_content[0]->img);
				if (File::exists('resources/diapos/' . end($filename)))
					File::delete('resources/diapos/' . end($filename));
			}
			$filename = Str::random($lenght = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}

		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;

		return view('diapos.edit')->with('diapo', $json);
	}

}
