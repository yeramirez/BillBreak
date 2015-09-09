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
        DB::insert('insert into bills (bill_holder, bill_name, bill_amount) values (?, ?, ?)', [$Aholder, $Aname, $Aamount]);

        $Aholder = Auth::user()->email;
        $roommates = DB::select('select * from roommates where rmPrimary = ?', [$Aholder]);
        $count = DB::select('select count(*) from roommates where rmPrimary = ?', [$Aholder]);

        $Name = "James MAxfield"; //senders name
        $email = "vercjames@gmail.com"; //senders e-mail adress
        $recipient = "vercjames@gmail.com"; //recipient
        $mail_body = "i love you"; //mail body
        $subject = "I still love you"; //subject
        $header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields

        if(mail($recipient, $subject, $mail_body, $header)){
            return view('partials.temp');
        }else{
            return view('partials.temp2');
        }


    }






    public function confirm(Requests\PrepareNoticeRequest $request){
        $data = $request->all();
        $template = view()->file(app_path("Http/Templates/RoommateInvite.blade.php"));
        return $template;
    }




}




