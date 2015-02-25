<?php


namespace LearnerApi\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormQuestion2Request extends FormRequest {

    public function rules()
    {
        return [
            'diapo-question'   => 'required',
            'diapo-response'    => 'required',
            'diapo-range_begin'    => 'required',
            'diapo-range_end'    => 'required',
            'diapo-range_step'    => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

}