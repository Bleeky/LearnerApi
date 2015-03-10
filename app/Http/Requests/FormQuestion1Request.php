<?php


namespace LearnerApi\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormQuestion1Request extends FormRequest {

    public function rules()
    {
        return [
            'diapo-question'   => 'required',
            'diapo-response1'    => 'required',
            'diapo-response2'    => 'required',
            'diapo-response3'    => 'required',
            'diapo-response4'    => 'required',
            'diapo-picture' => 'mimes:jpg,jpeg,png',
        ];
    }

    public function authorize()
    {
        return true;
    }

}