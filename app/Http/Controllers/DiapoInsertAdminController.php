<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\Diapo;
use LearnerApi\Http\Requests\Form1Request;

class DiapoInsertAdminController extends AdminController
{
	public function getInsertToForm($form) {
		return view($form);
	}

    public function postCreateForm1(Form1Request $request)
    {

    }

}
