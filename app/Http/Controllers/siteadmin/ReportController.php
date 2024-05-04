<?php

namespace App\Http\Controllers\siteadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Imports\orderExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Http\Controllers\frontend\PaymentController;

class ReportController extends Controller
{
    //
    public function __construct()
    {
    }
   
    public function orderReport(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        if ($startdate == '') {
            $startdate = now()->subDays(31)->format('Y-m-d');
        }
        if ($enddate == '') {
            $enddate = date('Y-m-d');
        }
        $donationlist = DB::table('donation')->get();
        return view('siteadmin.orderReport', ['startdate' => $startdate, 'enddate' => $enddate,'donationlist'=>$donationlist]);
    }
    public function getOrderData(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $product_name = $request->product_name;
        $status_name = $request->status_name;

        $query = DB::table('orders as t1')
            ->leftJoin('donation as t2','t1.productid','t2.id')
            ->select('t1.firstname','t1.phone','t1.emailid','t1.order_id','t2.optionvalue as product_name','t1.added_date','t1.product_amount','t1.payment_id','t1.status')
            ->whereDate('t1.added_date', '>=', $startdate)
            ->whereDate('t1.added_date', '<=', $enddate)
            ->orderBy('t1.added_date', 'desc');
        if($product_name != ""){
            $query->where('t1.productid',$product_name);
        }
        if($status_name != ""){
            $query->where('t1.status',$status_name);
        }
        $orderdata = $query->get();
        $data = DataTables::of($orderdata)->addIndexColumn()->make(TRUE);
        return $data;
    }
    public function exportOrder(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $product_name = $request->product_name;
        session()->put('order_startdate', $startdate);
        session()->put('order_enddate', $enddate);
        session()->put('order_product_name', $product_name);
        return Excel::download(new orderExport, 'Order_'.time().'.xlsx');
    }

    public function sendEmail($id = 0){
        $response = PaymentController::sendReceiptEmail($id);
        if($response){
            return redirect()->back()->with('success', 'Email Sent Successfully');
        }else{
            return redirect()->back()->with('error', 'Error Sending Email');    
        }
    }
    
    public function pdfOrder(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $product_name = $request->product_name;
        
        $orderdata = DB::table('orders')
            ->select(DB::raw("CONCAT(firstname, ' ', lastname) AS full_name"),'emailid','order_id','product_name','added_date','product_amount','payment_id',DB::raw("(CASE WHEN status='0' THEN 'Pending' WHEN status='1' THEN 'Completed' END) as status"))
            ->whereDate('added_date', '>=', $startdate)
            ->whereDate('added_date', '<=', $enddate)
            ->orderBy('added_date','desc');
        if($product_name != ""){
            $orderdata->where('product_name',$product_name);
        }
        $data['data'] = $orderdata->get();
        
        $pdf = PDF::loadView('siteadmin/pdfOrder', $data)->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('OrderReport_'.time().'.pdf');
    }
   
}
