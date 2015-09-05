<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {
    public function home() {
        return view('pages.home');
    }
    
    public function contact () {
        return view('pages.contact');
    }
    
    public function register () {
        return view('pages.register');
    }
    
    public function signin () {
        return view('pages.signin');
    }
}
