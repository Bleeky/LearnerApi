<?php

namespace LearnerApi\Http\Middleware;

use Illuminate\Foundation\Http\FormRequest;

class ModuleUpdateRequest extends FormRequest {

	public function rules()
	{
		return [
			'module-title'       => 'required|min:3',
			'module-description' => 'required',
		];
	}

	public function authorize()
	{
		return true;
	}
}