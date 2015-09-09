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


        $to      = $Aholder;
        $subject = "Recipe";
        $message = "total: {$Aamount}. per person: {$count}";
        $headers = "From: {$Aholder}" . "\r\n" .
            "Reply-To: {$Aholder}" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);


        foreach ($roommates as $rm) {
            $to      = $rm->rmEmail;
            $subject = "Bill Form {$Aname}.";
            $message = "Hello. the bill from {$Aname} is {$Aamount}. you owe {$count}";
            $headers = "From: {$Aholder}" . "\r\n" .
                "Reply-To: {$Aholder}" . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
        }

        return view('primaryAccount.createTicket');
    }







    public function confirm(Requests\PrepareNoticeRequest $request){
        $data = $request->all();
        $template = view()->file(app_path("Http/Templates/RoommateInvite.blade.php"));
        return $template;
    }




}




