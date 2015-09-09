<?php


namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller{
    public function index(){
        return view('billing.createBill');
    }


    public function store(){
        $Aholder = Auth::user()->email;
        $Aname = $_POST['bill_name'];
        $Aamount = $_POST['bill_amount'];
        DB::insert('insert into bills (bill_holder, bill_name,bill_amount) values (?, ?, ?)', [$Aholder, $Aname, $Aamount]);




//        $dbh = new PDO('p3nlmysql65plsk.secureserver.net; dbname=BillBreak;port=3306',BillBreak, Option66);



        //Pull from database
//        $stmt = $dbh->prepare("insert into bill (, bill_name, bill_amount,) values(:bholder, :bname, :bamount)");
//        $stmt->bindParam('bholder', $Aholder);
//        $stmt->bindParam('bname', $Aname);
//        $stmt->bindParam('bamount', $Aamount);
//
//        $stmt->execute();

        return view('partials.temp');
    }







    public function confirm(Requests\PrepareNoticeRequest $request){
        $data = $request->all();
        $template = view()->file(app_path("Http/Templates/RoommateInvite.blade.php"));
        return $template;
    }




}




