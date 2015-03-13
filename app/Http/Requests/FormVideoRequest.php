<?php


namespace LearnerApi\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormVideoRequest extends FormRequest {

    public function rules()
    {
        return [
               'diapo-video' => 'mimes:mp4',
        ];
    }

    public function authorize()
    {
        return true;
    }

}