<?php namespace App\Http\Controllers; 

class WelcomeController extends Controller{

	public function __construct(){

		$this->middleware('guest');

	}

	public function index()
	{
		return view('index');
	}

	public function accounts()
	{
		//return view('accounts');
		return view('accounts');
	}

	public function create()
	{
		//return view('accounts');
		return view('create');
	}

}