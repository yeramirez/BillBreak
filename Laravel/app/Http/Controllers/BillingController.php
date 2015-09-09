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
        $count = DB::select('select count(*) as rmCount from roommates where rmPrimary = ?', [$Aholder]);
//        var_dump($count[0]->rmCount);

        $intCount = $count[0]->rmCount;
        $individualBill = ($Aamount/($intCount+1));



        $Name = Auth::user()->name; //senders name
        $email = Auth::user()->email; //senders e-mail address
        $subject = "Bill Summary for {$Aname}"; //recipient
        $recipient = Auth::user()->email;
        $mail_body = "The Total {$Aname} Bill is {$Aamount}. Each Roommate owes you {$individualBill}.";
        $header = "From: ". $Name . " <" . $email . ">\r\n";
        mail($recipient, $subject, $mail_body, $header);

        $counter = 0;
        while($counter < $intCount) {
            $recipient = ($roommates[$counter]->rmEmail);
            $mail_body = $mail_body = "The Total {$Aname} Bill is {$Aamount}. Please write me a check for {$individualBill} at your earliest convenience";
            $header = "From: ". $Name . " <" . $email . ">\r\n";
            mail($recipient, $subject, $mail_body, $header);

            $counter++;
        }

        return view('pages.dashboard');

    }






    public function confirm(Requests\PrepareNoticeRequest $request){
        $data = $request->all();
        $template = view()->file(app_path("Http/Templates/RoommateInvite.blade.php"));
        return $template;
    }




}




