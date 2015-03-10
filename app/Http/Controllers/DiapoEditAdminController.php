<?php
namespace LearnerApi\Http\Controllers;

use Illuminate\Support\Facades\Input;
use LearnerApi\Diapo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use LearnerApi\Http\Requests\Form1Request;
use LearnerApi\Http\Requests\Form2Request;
use LearnerApi\Http\Requests\Form3Request;
use LearnerApi\Http\Requests\FormQuestion1Request;
use LearnerApi\Http\Requests\FormQuestion2Request;
use LearnerApi\Common;

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

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '1';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];

		Common\LearnerTools::deleteOldPicture($current_content);
		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateForm2(Form2Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '2';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['img'] = $current_content[0]->img;

		if (Input::hasFile('diapo-picture'))
		{
			Common\LearnerTools::deleteOldPicture($current_content);
			$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		}
		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateForm3(Form3Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"        => '3',
			"title"       => $current_content[0]->title,
			"data"        => $current_content[0]->data,
			"img"         => $current_content[0]->img,
			"question"    => null,
			"response"    => null,
			"range_begin" => null,
			"range_end"   => null,
			"range_step"  => null,
			"responses"   =>
				[
					null
				]
		]];
		if (Input::hasFile('diapo-picture'))
		{
			if (!empty($current_content[0]->img))
				if ($current_content[0]->img != null)
				{
					$filename = explode('/', $current_content[0]->img);
					if (File::exists('resources/diapos/' . end($filename)))
						File::delete('resources/diapos/' . end($filename));
				}
			$new_file = $update['diapo-picture'];
			$filename = Str::random($length = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];
		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;
		$json['module_id'] = $old_diapo->module_id;

		return view('diapos.edit')->with('diapo', $json)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateForm4(Form3Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"        => '4',
			"title"       => $current_content[0]->title,
			"data"        => $current_content[0]->data,
			"img"         => $current_content[0]->img,
			"question"    => null,
			"response"    => null,
			"range_begin" => null,
			"range_end"   => null,
			"range_step"  => null,
			"responses"   =>
				[
					null
				]
		]];
		if (Input::hasFile('diapo-picture'))
		{
			if (!empty($current_content[0]->img))
				if ($current_content[0]->img != null)
				{
					$filename = explode('/', $current_content[0]->img);
					if (File::exists('resources/diapos/' . end($filename)))
						File::delete('resources/diapos/' . end($filename));
				}
			$new_file = $update['diapo-picture'];
			$filename = Str::random($length = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];
		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;
		$json['module_id'] = $old_diapo->module_id;

		return view('diapos.edit')->with('diapo', $json)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateForm5(Form3Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"        => '5',
			"title"       => $current_content[0]->title,
			"data"        => $current_content[0]->data,
			"img"         => $current_content[0]->img,
			"question"    => null,
			"response"    => null,
			"range_begin" => null,
			"range_end"   => null,
			"range_step"  => null,
			"responses"   =>
				[
					null
				]
		]];
		if (Input::hasFile('diapo-picture'))
		{
			if (!empty($current_content[0]->img))
				if ($current_content[0]->img != null)
				{
					$filename = explode('/', $current_content[0]->img);
					if (File::exists('resources/diapos/' . end($filename)))
						File::delete('resources/diapos/' . end($filename));
				}
			$new_file = $update['diapo-picture'];
			$filename = Str::random($length = 30) . '.' . $new_file->getClientOriginalExtension();
			$new_file->move('resources/diapos', $filename);
			$new_json[0]['img'] = asset('resources/diapos/' . $filename);
		}
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];
		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;
		$json['module_id'] = $old_diapo->module_id;

		return view('diapos.edit')->with('diapo', $json)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateFormQuestion1(FormQuestion1Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"question"    => $update['diapo-question'],
			"title"       => null,
			"data"        => null,
			"img"         => null,
			"response"    => null,
			"range_begin" => null,
			"range_end"   => null,
			"range_step"  => null,

			"responses"   =>
				[
					[
						"response" => $update['diapo-response1'],
						"valid"    => "false"
					],
					[
						"response" => $update['diapo-response2'],
						"valid"    => "false"
					],
					[
						"response" => $update['diapo-response3'],
						"valid"    => "false"
					],
					[
						"response" => $update['diapo-response4'],
						"valid"    => "false"
					]
				]
		]];
		/*
		 * Delete old image of the diapo if the diapo contained one.
		 */
		if (!empty($current_content[0]->img))
			if ($current_content[0]->img != null)
			{
				$filename = explode('/', $current_content[0]->img);
				if (File::exists('resources/diapos/' . end($filename)))
					File::delete('resources/diapos/' . end($filename));
			}
		$count = 0;
		if ($update['select-response1'] == "true")
		{
			$new_json[0]['responses'][0]['valid'] = "true";
			$count++;
		}
		if ($update['select-response2'] == "true")
		{
			$new_json[0]['responses'][1]['valid'] = "true";
			$count++;
		}
		if ($update['select-response3'] == "true")
		{
			$new_json[0]['responses'][2]['valid'] = "true";
			$count++;
		}
		if ($update['select-response4'] == "true")
		{
			$new_json[0]['responses'][3]['valid'] = "true";
			$count++;
		}
		if ($count > 0)
		{
			if ($count == 1)
				$new_json[0]['type'] = '6';
			else
				$new_json[0]['type'] = '7';
			$old_diapo->content = json_encode($new_json);
			$old_diapo->save();
		}

		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;
		$json['module_id'] = $old_diapo->module_id;
		if ($count > 0)
			return view('diapos.edit')->with('diapo', $json)->withErrors(['success' => 'Diapo updated with success.']);

		return view('diapos.edit')->with('diapo', $json)->withErrors(['error' => 'You need at least one answer at true.']);
	}

	public function postUpdateFormQuestion2(FormQuestion2Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = [[
			"type"        => '8',
			"title"       => null,
			"data"        => null,
			"img"         => null,

			"question"    => $update['diapo-question'],
			"response"    => $update['diapo-response'],
			"range_begin" => $update['diapo-range_begin'],
			"range_end"   => $update['diapo-range_end'],
			"range_step"  => $update['diapo-range_step'],
		]];
		/*
		* Delete old image of the diapo if the diapo contained one.
		*/
		if (!empty($current_content[0]->img))
			if ($current_content[0]->img != null)
			{
				$filename = explode('/', $current_content[0]->img);
				if (File::exists('resources/diapos/' . end($filename)))
					File::delete('resources/diapos/' . end($filename));
			}
		$old_diapo->content = json_encode($new_json);
		$old_diapo->save();
		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;
		$json['module_id'] = $old_diapo->module_id;

		return view('diapos.edit')->with('diapo', $json)->withErrors(['success' => 'Diapo updated with success.']);
	}
}
