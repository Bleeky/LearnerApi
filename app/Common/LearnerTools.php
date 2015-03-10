<?php
namespace LearnerApi\Common;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LearnerTools {

	public static function getJson()
	{
		$new_json = [[
			"type"        => null,
			"title"       => null,
			"data"        => null,
			"img"         => null,
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

		return $new_json;
	}

	public static function deleteOldPicture($current_content)
	{
		if (!empty($current_content[0]->img))
		{
			$filename = explode('/', $current_content[0]->img);
			if (File::exists('resources/diapos/' . end($filename)))
				File::delete('resources/diapos/' . end($filename));
		}
	}

	public static function updateDiapoContent($old_diapo, $new_json)
	{
		$new_json = json_encode($new_json);
		$old_diapo->content = $new_json;
		$old_diapo->save();
	}

	public static function getDiapoData($old_diapo)
	{
		$json = array();
		$json['content'] = json_decode($old_diapo->content);
		$json['id'] = $old_diapo->id;
		$json['module_id'] = $old_diapo->module_id;

		return $json;
	}

	public static function updatePicture($update, $new_json)
	{
		$new_file = $update['diapo-picture'];
		$filename = Str::random($length = 30) . '.' . $new_file->getClientOriginalExtension();
		$new_file->move('resources/diapos', $filename);
		$new_json[0]['img'] = asset('resources/diapos/' . $filename);

		return $new_json;
	}
}