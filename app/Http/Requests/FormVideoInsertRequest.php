<?php


namespace LearnerApi\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormVideoInsertRequest extends FormRequest {

    public function rules()
    {
        return [
               'diapo-video' => 'required|mimes:mp4',
        ];
    }

    public function authorize()
    {
        return true;
    }

}