<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAdminController extends AdminController {

	public function getIndex()
	{
		return view('users.home')->with('users', User::all());
	}

	public function postEditUser()
	{
		$User = User::find(Input::get('id'));
		$User->username = Input::get('username');
		$User->password = Hash::make(Input::get('password'));
		$User->save();

		return view('users.users')->with('users', User::orderBy('username', 'desc')->get());
	}

	public function postDeleteUser()
	{
		User::find(Input::get('id'))->delete();

		return view('users.users')->with('users', User::orderBy('username', 'desc')->get());
	}

	public function getAddUser()
	{

		$User = new User;
		$User->username = Str::random($lenght = 10);
		$User->password = Hash::make('default');
		$User->Save();

		return view('users.users')->with('users', User::orderBy('username', 'desc')->get());
	}
}