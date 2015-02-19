<?php


namespace LearnerApi\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest{
	public function rules()
	{
		return [
			'diapo-title'       => '',
			'diapo-data' => 'required',
		];
	}

	public function authorize()
	{
		return true;
	}

}