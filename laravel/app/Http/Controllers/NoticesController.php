<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return 'hello';
    }

    public function create(){
        return view('notices.create');
    }

    public function confirm(Requests\PrepareNoticeRequest $request){
        return $request->all();

    }
}




