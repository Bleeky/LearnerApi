<?php

namespace LearnerApi\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use LearnerApi\Diapo;
use Illuminate\Support\Str;
use LearnerApi\Http\Requests\Form1Request;
use LearnerApi\Http\Requests\Form2Request;
use LearnerApi\Http\Requests\Form2InsertRequest;
use LearnerApi\Http\Requests\Form3InsertRequest;
use LearnerApi\Http\Requests\Form3Request;
use LearnerApi\Http\Requests\FormQuestion1Request;
use LearnerApi\Http\Requests\FormQuestion2Request;
use LearnerApi\Module;
use LearnerApi\Common;

class DiapoInsertAdminController extends AdminController {

	public function getInsertToForm($form, $id, $module_id)
	{
		return view($form)->with('id', $id)
			->with('module_id', $module_id);
	}

	public function postInsertFromForm1(Form1Request $request)
	{
		$update = $request->all();

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '1';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];

		$new_json = Common\LearnerTools::updateAudio($update, $new_json);

		$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
		$new_json = json_encode($new_json);
		$elem = new Diapo();
		$elem->content = $new_json;
		$elem->module()->associate(Module::find($update['module_id']));
		$elem->save();
		if ($update['diapo-id'] == "0")
		{
			foreach ($diapos as $diapo)
			{
				$elem->prev_id = null;
				$elem->next_id = $diapo->id;
				$diapo->prev_id = $elem->id;
				$diapo->save();
			}
		} else
		{
			$insert_after = Diapo::find($update['diapo-id']);
			if (!empty($insert_after))
			{
				$insert_before = Diapo::find($insert_after->next_id);
				$insert_after->next_id = $elem->id;
				$elem->prev_id = $insert_after->id;
				$elem->next_id = null;
				if (!empty($insert_before))
				{
					$elem->next_id = $insert_before->id;
					$insert_before->prev_id = $elem->id;
					$insert_before->save();
				}
				$insert_after->save();
			}
		}
		$elem->save();

		return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
	}

	public function postInsertFromForm2(Form2InsertRequest $request)
	{
		$update = $request->all();
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '2';
		$new_json[0]['title'] = $update['diapo-title'];

		$new_json = Common\LearnerTools::updatePicture($update, $new_json);

		$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
		$new_json = json_encode($new_json);
		$elem = new Diapo();
		$elem->content = $new_json;
		$elem->module()->associate(Module::find($update['module_id']));
		$elem->save();
		if ($update['diapo-id'] == "0")
		{
			foreach ($diapos as $diapo)
			{
				$elem->prev_id = null;
				$elem->next_id = $diapo->id;
				$diapo->prev_id = $elem->id;
				$diapo->save();
			}
		} else
		{
			$insert_after = Diapo::find($update['diapo-id']);
			if (!empty($insert_after))
			{
				$insert_before = Diapo::find($insert_after->next_id);
				$insert_after->next_id = $elem->id;
				$elem->prev_id = $insert_after->id;
				$elem->next_id = null;
				if (!empty($insert_before))
				{
					$elem->next_id = $insert_before->id;
					$insert_before->prev_id = $elem->id;
					$insert_before->save();
				}
				$insert_after->save();
			}
		}
		$elem->save();

		return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
	}

	public function postInsertFromForm3(Form3InsertRequest $request)
	{
		$update = $request->all();
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '3';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];

		$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		$new_json = Common\LearnerTools::updateAudio($update, $new_json);

		$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
		$new_json = json_encode($new_json);
		$elem = new Diapo();
		$elem->content = $new_json;
		$elem->module()->associate(Module::find($update['module_id']));
		$elem->save();
		if ($update['diapo-id'] == "0")
		{
			foreach ($diapos as $diapo)
			{
				$elem->prev_id = null;
				$elem->next_id = $diapo->id;
				$diapo->prev_id = $elem->id;
				$diapo->save();
			}
		} else
		{
			$insert_after = Diapo::find($update['diapo-id']);
			if (!empty($insert_after))
			{
				$insert_before = Diapo::find($insert_after->next_id);
				$insert_after->next_id = $elem->id;
				$elem->prev_id = $insert_after->id;
				$elem->next_id = null;
				if (!empty($insert_before))
				{
					$elem->next_id = $insert_before->id;
					$insert_before->prev_id = $elem->id;
					$insert_before->save();
				}
				$insert_after->save();
			}
		}
		$elem->save();

		return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
	}

	public function postInsertFromForm4(Form3InsertRequest $request)
	{
		$update = $request->all();

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '4';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];

		$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		$new_json = Common\LearnerTools::updateAudio($update, $new_json);

		$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
		$new_json = json_encode($new_json);
		$elem = new Diapo();
		$elem->content = $new_json;
		$elem->module()->associate(Module::find($update['module_id']));
		$elem->save();
		if ($update['diapo-id'] == "0")
		{
			foreach ($diapos as $diapo)
			{
				$elem->prev_id = null;
				$elem->next_id = $diapo->id;
				$diapo->prev_id = $elem->id;
				$diapo->save();
			}
		} else
		{
			$insert_after = Diapo::find($update['diapo-id']);
			if (!empty($insert_after))
			{
				$insert_before = Diapo::find($insert_after->next_id);
				$insert_after->next_id = $elem->id;
				$elem->prev_id = $insert_after->id;
				$elem->next_id = null;
				if (!empty($insert_before))
				{
					$elem->next_id = $insert_before->id;
					$insert_before->prev_id = $elem->id;
					$insert_before->save();
				}
				$insert_after->save();
			}
		}
		$elem->save();

		return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
	}

	public function postInsertFromForm5(Form3InsertRequest $request)
	{
		$update = $request->all();

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '5';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];

		$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		$new_json = Common\LearnerTools::updateAudio($update, $new_json);

		$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
		$new_json = json_encode($new_json);
		$elem = new Diapo();
		$elem->content = $new_json;
		$elem->module()->associate(Module::find($update['module_id']));
		$elem->save();
		if ($update['diapo-id'] == "0")
		{
			foreach ($diapos as $diapo)
			{
				$elem->prev_id = null;
				$elem->next_id = $diapo->id;
				$diapo->prev_id = $elem->id;
				$diapo->save();
			}
		} else
		{
			$insert_after = Diapo::find($update['diapo-id']);
			if (!empty($insert_after))
			{
				$insert_before = Diapo::find($insert_after->next_id);
				$insert_after->next_id = $elem->id;
				$elem->prev_id = $insert_after->id;
				$elem->next_id = null;
				if (!empty($insert_before))
				{
					$elem->next_id = $insert_before->id;
					$insert_before->prev_id = $elem->id;
					$insert_before->save();
				}
				$insert_after->save();
			}
		}
		$elem->save();

		return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
	}

	public function postInsertFromFormQuestion1(FormQuestion1Request $request)
	{
		$update = $request->all();

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['question'] = $update['diapo-question'];
		$new_json[0]['responses'] =
			[
				[
					"response" => $update['diapo-response1'],
					"comment"  => $update['diapo-comment1'],
					"valid"    => "false"
				],
				[
					"response" => $update['diapo-response2'],
					"comment"  => $update['diapo-comment2'],
					"valid"    => "false"
				],
				[
					"response" => $update['diapo-response3'],
					"comment"  => $update['diapo-comment3'],
					"valid"    => "false"
				],
				[
					"response" => $update['diapo-response4'],
					"comment"  => $update['diapo-comment4'],
					"valid"    => "false"
				]
			];
		if (Input::hasFile('diapo-picture'))
		{
			$new_json = Common\LearnerTools::updatePicture($update, $new_json);
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
			$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
			$new_json = json_encode($new_json);
			$elem = new Diapo();
			$elem->content = $new_json;
			$elem->module()->associate(Module::find($update['module_id']));
			$elem->save();
			if ($update['diapo-id'] == "0")
			{
				foreach ($diapos as $diapo)
				{
					$elem->prev_id = null;
					$elem->next_id = $diapo->id;
					$diapo->prev_id = $elem->id;
					$diapo->save();
				}
			} else
			{
				$insert_after = Diapo::find($update['diapo-id']);
				if (!empty($insert_after))
				{
					$insert_before = Diapo::find($insert_after->next_id);
					$insert_after->next_id = $elem->id;
					$elem->prev_id = $insert_after->id;
					$elem->next_id = null;
					if (!empty($insert_before))
					{
						$elem->next_id = $insert_before->id;
						$insert_before->prev_id = $elem->id;
						$insert_before->save();
					}
					$insert_after->save();
				}
			}
			$elem->save();

			return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
		}

		return view('diapos.insert')->with('id', $update['diapo-id'])->with('module_id', $update['module_id'])->withErrors(['Error' => 'You have to put at least one answer at true']);
	}

	public function postInsertFromFormQuestion2(FormQuestion2Request $request)
	{
		$update = $request->all();

		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '8';
		$new_json[0]['question'] = $update['diapo-question'];
		$new_json[0]['response'] = $update['diapo-response'];
		$new_json[0]['range_begin'] = $update['diapo-range_begin'];
		$new_json[0]['range_end'] = $update['diapo-range_end'];
		$new_json[0]['range_step'] = $update['diapo-range_step'];

		$diapos = Diapo::where("module_id", "=", $update['module_id'])->where("prev_id", "=", null)->get();
		$new_json = json_encode($new_json);
		$elem = new Diapo();
		$elem->content = $new_json;
		$elem->module()->associate(Module::find($update['module_id']));
		$elem->save();
		if ($update['diapo-id'] == "0")
		{
			foreach ($diapos as $diapo)
			{
				$elem->prev_id = null;
				$elem->next_id = $diapo->id;
				$diapo->prev_id = $elem->id;
				$diapo->save();
			}
		} else
		{
			$insert_after = Diapo::find($update['diapo-id']);
			if (!empty($insert_after))
			{
				$insert_before = Diapo::find($insert_after->next_id);
				$insert_after->next_id = $elem->id;
				$elem->prev_id = $insert_after->id;
				$elem->next_id = null;
				if (!empty($insert_before))
				{
					$elem->next_id = $insert_before->id;
					$insert_before->prev_id = $elem->id;
					$insert_before->save();
				}
				$insert_after->save();
			}
		}
		$elem->save();

		return Redirect::action('DiapoAdminController@getHome', ['id' => $update['module_id']]);
	}
}
