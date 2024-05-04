<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorModel;
use App\Models\Vendororder;
use App\Models\Vendorcart;
use DB;
class ApiController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function generateClientKey(request $request){

        echo $clientid = hash('sha256', 'Caprus Digital Customer 2');
        echo "<br>";
        echo $secretkey = hash('sha256', 'Caprus Secret Key 2');
    }

    
    public function accessToken(request $request)
    {
        $data = json_decode($request->getContent());
        $client_id = $data->client_id;
        $secret_key = $data->secret_key;

        $checktoken = VendorModel::where([['client_id','=',$client_id],['secret_key','=',$secret_key]])->first();
        if($checktoken){
            $client = new \GuzzleHttp\Client();
            $body = [
                'grant_type' => 'client_credentials',
                'client_id' => 'q8bH6VKXZuPekUlnjcgCf8fj2dvREy2cGT8ALt52',
                'client_secret' => 'puvY0g2H34xhCIPjfPcNt7Eu9fyOCUBIjPZgl8xE',
            ];
            $response = $client->post('https://nms.caprusit.com/api/oauth2/access-token', ['form_params' => $body]);
            $post = json_decode($response->getBody()->getContents());
            $headers = ['Accept' => 'application/vnd.cloudlx.v1+json'];
            
            DB::update('update tbl_vendor set access_token = ? where id = ?',[$post->access_token,$checktoken->id]);

            $data = ['access_token'=> $post->access_token];

            return response()->json([
                'status' => true,
                'access_token'=> $post->access_token
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => "No Data Found"
            ]);
        }
    }


    public function countryList(request $request)
    {

        $data = json_decode($request->getContent());

        $checktoken = VendorModel::where('access_token',$data->token)->first();
        if($checktoken)
        {
            $page = 1;
            $url = "";
            if(isset($data->page)){
                $page = $data->page;
            }
            if(isset($data->max_per_page)){
                $url = "?max_per_page=".$data->max_per_page."&page=".$page;
            }

            $headers = ['Authorization' => $request->token, 'Accept' => 'application/vnd.cloudlx.v1+json'];
            $client = new \GuzzleHttp\Client(['headers' => $headers]);
            $response = $client->get('https://nms.caprusit.com/api/countries'.$url);
            $get = json_decode($response->getBody()->getContents());
        
            return response()->json([
                            'status' => true,
                            'msg' => "Request SuccessFull.",
                            "data" => $get
                        ]);
        }else {
            return response()->json([
                        'status' => "false",
                        'message' => "Accesstoken Does Not Match.",
                    ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function numberTypes(Request $request)
    {
        $data = json_decode($request->getContent());

        $checktoken = VendorModel::where('access_token',$data->token)->first();
        if($checktoken)
        {

            $name = ['Geographic','Mobile','National','Premium','Toll Free'];
            foreach ($name as $key => $value) {
                $numbertypeList[] = $value;
            }
            return response()->json([
                'status' => true,
                'message' => "Request SuccessFull.",
                "data" => $numbertypeList
            ]);
        }
        elseif ($checktoken == null) {
             return response()->json([
                            'status' => false,
                            'message' => "Accesstoken Does Not Match.",
                        ]);
        }
    }

    public function availableNumber(request $request)
    {

        $data = json_decode($request->getContent());
        
        $checktoken = VendorModel::where('access_token',$data->token)->first();
        if($checktoken)
        {
       
        $url = "";
        if(isset($data->countryId)) {
            $url .= '/country/' . $data->countryId;
        }
        if (isset($data->range)) {
            $url .= '/range/' . $data->range;
        }
        $searchterm = '';
        if (isset($data->numberType)) {
            $searchterm = '?number_service_type=' . $data->numberType;
        }
       

        if(isset($data->page)){
            $page = $data->page;
        }
        if(isset($data->max_per_page) && $searchterm == ""){
            $searchterm = "?max_per_page=".$data->max_per_page."&page=".$page;
        }else{
            $searchterm .= "&max_per_page=".$data->max_per_page."&page=".$page;
        }

        if (isset($data->search)) {
            if($data->search != ""){
                $searchterm = '?search=' . str_replace("+","",$data->search);
                $url="";
            }
        }

        $markup = $checktoken->markuprate;
        if ($markup != 0) {
            $markup = $markup / 100;
        }
        $per_min_markup = $checktoken->per_min_markup;
        if ($per_min_markup != 0) {
            $per_min_markup = $per_min_markup / 100;
        }
        
        $headers = ['Authorization' => $data->token ,'Accept' => 'application/vnd.cloudlx.v1+json'];
        $client = new \GuzzleHttp\Client(['headers' => $headers]);
        $dataurl = 'https://nms.caprusit.com/api/available_numbers' . $url . $searchterm;
       
        $response = $client->get($dataurl);
        $get = json_decode($response->getBody()->getContents());

        $dataarr = array();
        if (isset($get->available_numbers)) {
            foreach ($get->available_numbers as $post) {

                $chargearr = array(
                    'id' => $post->id,
                    'number_e164' => $post->number_e164,
                    'type' => $post->service_type_name,
                    'range_name' => $post->range_name,
                    'country_name' => $post->country_name,
                    'country_iso' => $post->country_iso,
                    'is_toll_free'=> $post->is_toll_free,
                );

                $monthly_charge = $post->pricing->mrc;
                 $per_minute_charge = $post->pricing->minute_rate;

                if($monthly_charge == 0){
                    $monthly_charge  = "1.0000";
                }else{
                    $monthly_charge = sprintf("%0.4f", $post->pricing->mrc + ($post->pricing->mrc * $markup));
                }
                
                $chargearr["monthly_charge"] = $monthly_charge; 
                
                if($post->is_toll_free){
                    $toll_free_per_minute_charge_fixed = sprintf("%0.4f", $post->pricing->minute_rate_fixed + ($post->pricing->minute_rate_fixed * $per_min_markup));

                    $toll_free_per_minute_charge_mobile = sprintf("%0.4f", $post->pricing->minute_rate_mobile + ($post->pricing->minute_rate_mobile * $per_min_markup));
                    if(is_numeric($post->pricing->minute_rate_payphone)){
                        $toll_free_per_minute_charge_payphone = sprintf("%0.4f", $post->pricing->minute_rate_payphone + ($post->pricing->minute_rate_payphone * $per_min_markup));
                    }else{
                        $toll_free_per_minute_charge_payphone = $post->pricing->minute_rate_payphone;
                    }

                    $toll_free_fixed_setup = sprintf("%0.4f", $post->pricing->setup_fixed + ($post->pricing->setup_fixed * $markup));
                    if($toll_free_fixed_setup == 0){
                        $toll_free_fixed_setup = "1.000";
                    }

                    $toll_free_mobile_setup = sprintf("%0.4f", $post->pricing->setup_mobile + ($post->pricing->setup_mobile * $markup));
                    if($toll_free_mobile_setup == 0){
                        $toll_free_mobile_setup = "1.000";
                    }

                    $toll_free_payphone_setup = sprintf("%0.4f", $post->pricing->setup_payphone + ($post->pricing->setup_payphone * $markup));
                    if($toll_free_payphone_setup == 0){
                        $toll_free_payphone_setup = "1.000";
                    }
                   
                    $chargearr["toll_free_per_minute_charge_fixed"] = $toll_free_per_minute_charge_fixed; 
                    $chargearr["toll_free_per_minute_charge_mobile"] = $toll_free_per_minute_charge_mobile; 
                    $chargearr["toll_free_per_minute_charge_payphone"] = $toll_free_per_minute_charge_payphone; 
                    $chargearr["toll_free_fixed_setup"] = $toll_free_fixed_setup; 
                    $chargearr["toll_free_mobile_setup"] = $toll_free_mobile_setup; 
                    $chargearr["toll_free_payphone_setup"] = $toll_free_payphone_setup;  

                }else{
                    $setup_charge = $post->pricing->nrc;
                    if($setup_charge == 0){
                        //$setup_charge  = "1.0000";
                    }else{
                        $setup_charge = sprintf("%0.4f", $post->pricing->nrc + ($post->pricing->nrc * $markup));
                    }
                    $chargearr["setup_charge"] = $setup_charge;  

                    $per_minute_charge = sprintf("%0.4f", $post->pricing->minute_rate + ($post->pricing->minute_rate * $per_min_markup));
                    $setup = sprintf("%0.4f", $post->pricing->setup + ($post->pricing->setup * $markup));
                    if($setup == 0){
                      //  $setup = "1.000";
                    } 
                    $chargearr["setup"] = $setup; 
                    $chargearr["per_minute_charge"] = $per_minute_charge; 
    
                }
            

                $dataarr[] = $chargearr;
            }
        }
        return response()->json([
            'status' => true,
            'msg' => "Request SuccessFull.",
            "data" => $dataarr
        ]);
        }
        elseif ($checktoken == null) {
            return response()->json([
                            'status' => false,
                            'message' => "Accesstoken Does Not Match.",
                        ]);
        }
        
    }

    
    public function addOrder(Request $request)
    {
        
        $data = json_decode($request->getContent());

        $checktoken = VendorModel::where('access_token',$data->token)->first();
        if($checktoken)
        {

            if(isset($data->amount)){
                $amount = $data->amount;
            }
            $orderno = DB::table('tbl_vendor_orders')->where('is_delete', 0)->OrderBy('id', 'desc')->first();
            $ordno = 'INV/001';
            if ($orderno != '') {
                $ordno = 'INV/' . sprintf('%03d', explode('/', $orderno->orderno)[1] + 1);
            }
            $addorder = new Vendororder;
            $addorder->pay_id = $data->pay_id;
            $addorder->amount= $data->amount;
            $addorder->orderno = $ordno;
            $addorder->user_id = $checktoken->id;
            $addorder->save();
            $invoice_id = $addorder->id;
           
            $orderlist = $data->orderlist;
            foreach($orderlist as $post){

                $reference =  array();
                $reference['monthly_charge']=$post->monthly_charge;
                $reference['setup_charge']=$post->setup_charge;
                if($post->type == "Toll Free"){
                    $reference['toll_free_per_minute_charge_fixed']=$post->toll_free_per_minute_charge_fixed;
                    $reference['toll_free_per_minute_charge_mobile']=$post->toll_free_per_minute_charge_mobile;
                    $reference['toll_free_per_minute_charge_payphone']=$post->toll_free_per_minute_charge_payphone;
                    $reference['toll_free_fixed_setup']=$post->toll_free_fixed_setup;
                    $reference['toll_free_mobile_setup']=$post->toll_free_mobile_setup;
                    $reference['toll_free_payphone_setup']=$post->toll_free_payphone_setup;
                }else{
                    $reference['setup']=$post->setup;
                    $reference['per_minute_charge']=$post->per_minute_charge;
                }

                $reference = json_encode($reference);

                $addcart = new Vendorcart;
                $addcart->user_id =$checktoken->id;
                $addcart->buy_number_id =$post->id;
                $addcart->invoice_id = $invoice_id;
                $addcart->number= $post->number_e164;
                $addcart->order_status = '0';
                $addcart->type = $post->type;
                $addcart->range_name= $post->range_name;
                $addcart->reference_details = $reference;
                $addcart->save(); 
            }          

            return response()->json([
                'status'=> "true",
                'msg'=> "Order Added SuccessFully."
            ]);
        }else
        {
            return response()->json([
            'status'=>"false", 
            'msg' => "Accesstoken Does Not Match."
        ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewOrder(Request $request)
    {
        $data = json_decode($request->getContent());

        $checktoken = Vendormodel::where('access_token',$data->token)->first();
        if($checktoken)
        {
            $user_id = $checktoken->id;
            $list = Vendororder::where('user_id',$user_id)->get();
            if(count($list)>0)
            {
                $data=[];
                foreach ($list as $key => $value) {
                    $cartlist = Vendorcart::where('invoice_id',$value->id)->get();
                    
                    $cartdata=[];
                    foreach ($cartlist as $value2) {
                        
                       
                        $resarr = array();
                        $resarr['id'] =  $value2->buy_number_id;
                        $resarr['number_e164'] =  $value2->number;
                        $resarr['type'] =  $value2->type;
                        $resarr['range_name'] =  $value2->range_name;
                        $resarr['order_status'] =  $value2->order_status;

                        $reference = json_decode($value2->reference_details);
                        $resarr['monthly_charge']=$reference->monthly_charge;
                        $resarr['setup_charge']=$reference->setup_charge;

                        if($value2->type == "Toll Free"){
                            $resarr['toll_free_per_minute_charge_fixed']=$reference->toll_free_per_minute_charge_fixed;
                            $resarr['toll_free_per_minute_charge_mobile']=$reference->toll_free_per_minute_charge_mobile;
                            $resarr['toll_free_per_minute_charge_payphone']=$reference->toll_free_per_minute_charge_payphone;
                            $resarr['toll_free_fixed_setup']=$reference->toll_free_fixed_setup;
                            $resarr['toll_free_mobile_setup']=$reference->toll_free_mobile_setup;
                            $resarr['toll_free_payphone_setup']=$reference->toll_free_payphone_setup;
                        }else{
                            $resarr['setup']=$reference->setup;
                            $resarr['per_minute_charge']=$reference->per_minute_charge;
                        }

                        $cartdata[]= $resarr;
                    }
                    $data[]= [
                        'orderno'=>$value->orderno,
                        'pay_id'=>$value->pay_id,
                        'amount'=>$value->amount,
                        'order_status'=>$value->order_status,
                        'created_on'=>$value->created_on,
                        'orderlist'=>$cartdata
                    ];
                }
                return response()->json([
                'status'=>"true", 
                'msg' => "Orders Fetched SuccessFully.",
                'data'=> $data
            ]);
            }else{
                return response()->json([
                    'status'=>"false", 
                    'msg' => "No Orders Found."
                    ]);
            }
        }else
        {
            return response()->json([
            'status'=>"false", 
            'msg' => "Accesstoken Does Not Match."
            ]);
        }

    }

}
