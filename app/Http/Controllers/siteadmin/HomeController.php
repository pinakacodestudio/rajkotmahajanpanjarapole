<?php

namespace App\Http\Controllers\siteadmin;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('guest:admin')->except('logout');
    }
    public function index()
    {
        $data['donationlist']=DB::table('donation')->get();
        return view('siteadmin.dashboard',$data);
    }
    public function getBoxvalue(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
       
        $results = DB::table('donation')
        ->select('donation.id as productid', DB::raw("(select COALESCE(SUM(orders.product_amount), 0) AS amount from orders where date(added_date) >= '".$startdate."' and date(added_date) <= '".$enddate."' and status = 'Success' and productid = donation.id) as amount"))
        ->get();
       
        $data['totalproduct'] =$results;
        return json_encode($data);
    }

}
