<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoommateController extends Controller{
    public function index(){
        return view('primaryAccount.addRoommate');
    }

    public function store(){
        $Aholder = Auth::user()->email;
        $rmName = $_POST['inviteRoommate'];
        $rmEmail = $_POST['inviteEmail'];
        DB::insert('insert into roommates (rmPrimary, rmName,rmEmail) values (?, ?, ?)', [$Aholder, $rmName, $rmEmail]);

        return view('partials.temp');
    }

}




