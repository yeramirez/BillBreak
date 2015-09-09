<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller{
    public function index(){
        return view('primaryAccount.createBill');
    }


    public function store(){
        $Aholder = Auth::user()->email;
        $Aname = $_POST['bill_name'];
        $Aamount = $_POST['bill_amount'];
        DB::insert('insert into bills (bill_holder, bill_name,bill_amount) values (?, ?, ?)', [$Aholder, $Aname, $Aamount]);

        return view('partials.temp');
    }







    public function confirm(Requests\PrepareNoticeRequest $request){
        $data = $request->all();
        $template = view()->file(app_path("Http/Templates/RoommateInvite.blade.php"));
        return $template;
    }




}




