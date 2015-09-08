<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller{
    public function create(){
        return view('notices.create');
    }

    public function confirm(Requests\PrepareNoticeRequest $request){
        return $request->all();

    }

    public function show(){
    	return view('notices.addbill');
    }

    // public function addBill() {
    // 	echo "Hello";
    // }
}




