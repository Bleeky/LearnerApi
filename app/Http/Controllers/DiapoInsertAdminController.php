<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\Http\Requests\Form1Request;
use LearnerApi\Http\Requests\Form2Request;
use LearnerApi\Http\Requests\Form3Request;

class DiapoInsertAdminController extends AdminController
{
	public function getInsertToForm($form, $id) {
		return view($form)->with('id', $id);
	}

    public function postInsertFromForm1(Form1Request $request)
    {

    }
    public function postInsertFromForm2(Form2Request $request)
    {

    }
    public function postInsertFromForm3(Form3Request $request)
    {

    }

}
