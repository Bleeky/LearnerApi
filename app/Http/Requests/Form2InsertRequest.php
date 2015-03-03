<?php


namespace LearnerApi\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class Form2Request extends FormRequest {

	public function rules()
	{
		return [
			'diapo-title'   => '',
			'diapo-picture' => 'required|mimes:jpg,jpeg,png',
		];
	}

	public function authorize()
	{
		return true;
	}

}