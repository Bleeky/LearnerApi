<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\User;

class UserAdminController extends AdminController {

	public function getIndex()
	{
		return view('users.home')->with('users', User::all());
	}

	public function postEditUser()
	{

	}

	public function postDeleteUser()
	{

	}

	public function getAddUser()
	{

	}
}