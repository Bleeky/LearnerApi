<?php

namespace LearnerApi\Http\Controllers;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use LearnerApi\Module;

class AdminController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return view('home');
	}
}