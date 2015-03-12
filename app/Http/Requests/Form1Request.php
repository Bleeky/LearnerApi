<?php


namespace LearnerApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest {

	public function rules()
	{
		return [
			'diapo-title' => '',
			'diapo-data'  => 'required',
			'diapo-audio' => 'mimes:mp3'
		];
	}

	public function authorize()
	{
		return true;
	}

}