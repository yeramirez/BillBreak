<?php
class AccountsController extends Controller{
	
	public function index()
	{
		$accounts = Account::all();

		return view('index', compact('accounts'));
	}

	public function show($id)
	{
		$accounts = Account::findOrFail($id);

		return view('show', compact('accounts'));
	}

	public function create()
	{
		return view('create');
	}

}