<?php
namespace LearnerApi\Http\Controllers;

use Illuminate\Support\Facades\Input;
use LearnerApi\Diapo;
use LearnerApi\Http\Requests\Form1Request;
use LearnerApi\Http\Requests\Form2Request;
use LearnerApi\Http\Requests\Form3Request;
use LearnerApi\Http\Requests\FormQuestion1Request;
use LearnerApi\Http\Requests\FormQuestion2Request;
use LearnerApi\Common;
use LearnerApi\Http\Requests\FormVideoRequest;

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

		if (Input::hasFile('diapo-audio'))
		{
			Common\LearnerTools::deleteOldAudio($current_content);
			$new_json = Common\LearnerTools::updateAudio($update, $new_json);
		}

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
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '3';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];
		$new_json[0]['img'] = $current_content[0]->img;

		if (Input::hasFile('diapo-audio'))
		{
			Common\LearnerTools::deleteOldAudio($current_content);
			$new_json = Common\LearnerTools::updateAudio($update, $new_json);
		}
		if (Input::hasFile('diapo-picture'))
		{
			Common\LearnerTools::deleteOldPicture($current_content);
			$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		}
		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateForm4(Form3Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '4';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];
		$new_json[0]['img'] = $current_content[0]->img;

		if (Input::hasFile('diapo-audio'))
		{
			Common\LearnerTools::deleteOldAudio($current_content);
			$new_json = Common\LearnerTools::updateAudio($update, $new_json);
		}
		if (Input::hasFile('diapo-picture'))
		{
			Common\LearnerTools::deleteOldPicture($current_content);
			$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		}
		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateForm5(Form3Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '5';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['data'] = $update['diapo-data'];
		$new_json[0]['img'] = $current_content[0]->img;

		if (Input::hasFile('diapo-audio'))
		{
			Common\LearnerTools::deleteOldAudio($current_content);
			$new_json = Common\LearnerTools::updateAudio($update, $new_json);
		}
		if (Input::hasFile('diapo-picture'))
		{
			Common\LearnerTools::deleteOldPicture($current_content);
			$new_json = Common\LearnerTools::updatePicture($update, $new_json);
		}
		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}

	public function postUpdateFormQuestion1(FormQuestion1Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['question'] = $update['diapo-question'];
		$new_json[0]['img'] = $current_content[0]->img;
			$new_json[0]['type'] = '6';
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
			Common\LearnerTools::deleteOldPicture($current_content);
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
		if ($count == 1)
		{
			Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		}
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);
		if ($count == 1)
			return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['error' => 'You need only one answer at true.']);
	}
	public function postUpdateFormQuestion3(FormQuestion1Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['question'] = $update['diapo-question'];
		$new_json[0]['type'] = "7";
		$new_json[0]['img'] = $current_content[0]->img;
		$new_json[0]['responses'] =
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
			];
		$new_json[0]["comment_true"] = $update['diapo-comment-true'];
		$new_json[0]["comment_false"] = $update['diapo-comment-false'];
		if (Input::hasFile('diapo-picture'))
		{
			Common\LearnerTools::deleteOldPicture($current_content);
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
		if ($count >= 2)
			Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);
		if ($count >= 2)
			return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['error' => 'You need at least two answer at true.']);
	}
	public function postUpdateFormQuestion2(FormQuestion2Request $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '8';
		$new_json[0]['question'] = $update['diapo-question'];
		$new_json[0]['response'] = $update['diapo-response'];
		$new_json[0]['range_begin'] = $update['diapo-range_begin'];
		$new_json[0]['range_end'] = $update['diapo-range_end'];
		$new_json[0]['range_step'] = $update['diapo-range_step'];

		Common\LearnerTools::deleteOldPicture($current_content);

		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}
	public function postUpdateFormVideo(FormVideoRequest $request)
	{
		$update = $request->all();
		$old_diapo = Diapo::find($update['diapo-id']);
		$current_content = json_decode($old_diapo->content);
		$new_json = Common\LearnerTools::getJson();
		$new_json[0]['type'] = '9';
		$new_json[0]['title'] = $update['diapo-title'];
		$new_json[0]['video'] = $current_content[0]->video;

		if (Input::hasFile('diapo-video'))
		{
			Common\LearnerTools::deleteOldVideo($current_content);
			$new_json = Common\LearnerTools::updateVideo($update, $new_json);
		}
		Common\LearnerTools::updateDiapoContent($old_diapo, $new_json);
		$diapo_data = Common\LearnerTools::getDiapoData($old_diapo);

		return view('diapos.edit')->with('diapo', $diapo_data)->withErrors(['success' => 'Diapo updated with success.']);
	}
}
