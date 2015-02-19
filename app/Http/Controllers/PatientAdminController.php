<?php


namespace LearnerApi\Http\Controllers;


class PatientAdminController extends AdminController {

	public function getIndex()
	{
		return view('patients.home');
	}
}