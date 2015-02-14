<?php

namespace LearnerApi\Http\Controllers;


class AuthenticationController extends Controller {

	public function getIndex()
	{
		return view('auth.login');
	}
}