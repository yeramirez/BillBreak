<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoommateController extends Controller{
    public function create(){
        //return view('notices.create');

        DB::table('roommates')->insert([
            ['rmName' => $rmName],
            ['rmEmail' => $rmEmail],
            ['rmPassword' => $rmPassword]
        ]);
    }
}