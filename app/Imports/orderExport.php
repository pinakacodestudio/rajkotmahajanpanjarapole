<?php
namespace App\Imports;
  
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; // Export ShouldAutoSize


class orderExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    public function headings(): array
    {
      
        return [
            'Customer Name',
            'Phone No.',
            'Email Id',
            'Order No.',
            'Product Name',
            'Date',
            'Amount',
            'Transaction ID',
            'Status',
        ];
    }
    public function collection()
    {
        $startdate=session()->get('order_startdate');
        $enddate=session()->get('order_enddate');
        $product_name=session()->get('order_product_name');
        $query=DB::table('orders as t1')
        ->leftJoin('donation as t2','t1.productid','t2.id')
        ->select('t1.firstname','t1.phone','t1.emailid','t1.order_id','t2.optionvalue as product_name','t1.added_date','t1.product_amount','t1.payment_id','t1.status')
        ->whereDate('t1.added_date','>=',$startdate)
        ->whereDate('t1.added_date','<=',$enddate)
        ->orderBy('t1.added_date','desc');
        
        if($product_name != ""){
            $query->where('t1.productid',$product_name);
        }

        $orderdata = $query->get();

        // Calculate the total amount
        $totalAmount = $orderdata->sum('product_amount');

        // Append the total amount as a new row
        $orderdata->push(['', '','','','Total', $totalAmount]); // Assuming your "amount" column is the third column

        return $orderdata;
    }
}