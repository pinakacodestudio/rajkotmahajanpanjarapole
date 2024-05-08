<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use DateTime;
use PDF;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Helper\Helper;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->merchantId = "1916560";
        $this->accessCode = "AVRV78LD24AU17VRUA";
        $this->workingKey = "0256CA65137D854CB00CEBE118FFEE4D";
    }
  
    public function index($id = 0)
    {
        $data['donationlist']=DB::table('donation')->get();
        $data['id']=0;
        $data['merchantId']=$this->merchantId;
        if($id != ''){
            $data['donation']=DB::table('donation')->where('urlpath',$id)->first();
            $data['id'] = $data['donation']->id;
        }
        return view('frontend.donatenow',$data);
    }

    public function initiateTransaction(Request $request)
    {
        error_reporting(0);
        
         $order_id = rand(11111,99999);
         $tid = rand(11111,99999);
         $data = $request->all();
         $data['tid']=$tid;

        $order_id = DB::table('orders')->select('order_id')->orderBy('id','desc')->first()->order_id;
        if($order_id != ""){
            $order_id = $order_id + 1;
            $data['order_id']=$order_id;
           
        }else{
            $order_id = 1;
            $data['order_id']=$order_id;
        }

        DB::table('orders')->insert([
            'order_id' => $order_id,
            'productid' => $data['productid'],
            'product_name' => $data['product_name'],
            'product_amount' => $data['amount'],
            'firstname' => $data['billing_name'],
            'phone' => $data['billing_tel'],
            'emailid' => $data['billing_email'],
            'pancard' => $data['pancard_no'],
            'added_date' => now(),
        ]);

        foreach ($data as $key => $value) {
            $merchant_data .= $key . '=' . $value . '&';
        }

        // Using Laravel's encryption
        $encrypted_data = $this->encryptCC($merchant_data,$this->workingKey); // Method for encrypting the data.
     
        return view('frontend.paymentinitiate', [
            'encrypted_data' => $encrypted_data,
            'access_code' => $this->accessCode,
        ]);

    }

    public function handleResponse(Request $request)
    {
        error_reporting(0);

        
        $workingKey = $this->workingKey; // Working Key should be provided here.
        $encResponse = $request->input('encResp'); // This is the response sent by the CCAvenue Server
        $rcvdString = $this->decryptCC($encResponse, $workingKey); // Crypto Decryption used as per the specified working key.
        $order_status = "";

        $decryptValues = explode('&', $rcvdString);
        $responseMap = [];
       
        foreach ($decryptValues as $value) {
            $info = explode('=', $value);
            $responseMap[$info[0]] = $info[1];
        }

        $form_data = array(
                'payment_id' => $responseMap['tracking_id'],
                'status' => $responseMap['order_status'],
                'payment_mode' => $responseMap['payment_mode']
        );

        if($responseMap['order_status'] == 'Success'){
            $financialCode = $this->generateUniqueFinancialCode();
            $form_data['receipt_no']=$financialCode;
            $date = DateTime::createFromFormat('d/m/Y H:i:s', $responseMap['trans_date']);
            $form_data['trans_date'] = $date->format('Y-m-d H:i:s');
            $form_data['token'] = Str::random(10);
        }

        DB::table('orders')->where('order_id', $responseMap['order_id'])->update($form_data);

        $response = array(
            'Order No.'=>$responseMap['order_id'],
            'Amount'=>$responseMap['amount'],
            'Name'=>$responseMap['billing_name'],
            'Email '=>$responseMap['billing_email'],
            'Transaction Date'=>$responseMap['trans_date'],
            'Transaction ID'=>$responseMap['tracking_id'],
            'Order Status'=>$responseMap['order_status'],
            'Message'=>$responseMap['status_message'],
        );

        if($responseMap['order_status'] == 'Success'){
            $this->sendReceiptEmail($form_data['token']);
        }

        return view('frontend.paymentresponse', compact('response'));
    }


    public function sendReceiptEmail($token = ''){

        if($token != ""){
            $data['orderdetails'] = DB::table('orders as t1')
            ->leftJoin('donation as t2','t1.productid','t2.id')
            ->select('t1.*','t2.optionvalue as product_name')->where('t1.token',$token)->first();
            $data['downloadfile']="download/".$data['orderdetails']->token;

            $mail = new PHPMailer(true);
            $emailConfig = DB::table('emailconfig')->where('id',1)->first();
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host       = $emailConfig->smtp_host;
                $mail->SMTPAuth   = true;
                $mail->Username   = $emailConfig->smtp_username;
                $mail->Password   = $emailConfig->smtp_password;
                $mail->SMTPSecure = $emailConfig->smtp_encryption;
                $mail->Port       = $emailConfig->smtp_port;

                //Recipients
                $mail->setFrom($emailConfig->smtp_from_email, $emailConfig->smtp_from_name);
                $mail->addAddress($data["orderdetails"]->emailid, $data["orderdetails"]->firstname);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Thank You for Your Generous Donation to Rajkot Mahajan Panjrapole';
                $mail->Body    = view('mail.receipts', $data)->render();

                $mail->send();
                return true;
            } catch (Exception $e) {
    //            echo "Message could not be sent. Mailer Error: ".$e;
                return false; 
            }
        }else{
            return false; 
        }
        
    }

    public function downloadReceipt($token = ""){
        
        if($token != ""){
            $data['orderdetails'] = DB::table('orders as t1')
            ->leftJoin('donation as t2','t1.productid','t2.id')
            ->select('t1.*','t2.optionvalue as product_name')->where('token',$token)->first();
            
            $pdf = PDF::loadView('frontend/pdfReceipt', $data)->setOptions(['defaultFont' => 'sans-serif','isRemoteEnabled'=> TRUE]);
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download('receipt_'.time().'.pdf');
        }else{
            return ('/');
        }
    }
    public function encryptCC($plainText, $key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }

    public function decryptCC($encryptedText, $key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = $this->hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }

    public function pkcs5_padCC($plainText, $blockSize)
    {
        $pad = $blockSize - (strlen($plainText) % $blockSize);
        return $plainText . str_repeat(chr($pad), $pad);
    }

    public function hextobin($hexString)
    {
        $length = strlen($hexString);
        $binString = "";
        $count = 0;
        while ($count < $length) {
            $subString = substr($hexString, $count, 2);
            $packedString = pack("H*", $subString);
            if ($count == 0) {
                $binString = $packedString;
            } else {
                $binString .= $packedString;
            }

            $count += 2;
        }
        return $binString;
    }

    function generateUniqueFinancialCode(): string
    {
        $currentYear = now()->format('y');
        $currentMonth = now()->format('m');
        $currentYear = ($currentMonth >= 4) ? $currentYear : ($currentYear - 1);
        $nextYear = ($currentMonth < 4) ? $currentYear : ($currentYear+1);

        $financialYear = $currentYear.$nextYear;

        // Get the last financial year code
        $lastCode = DB::table('orders')
                    ->where('status', 'Success')
                    ->orderBy('id', 'desc')
                    ->first();

        $sequenceNumber = 1;

        if ($lastCode) {
            $finyear = substr($lastCode->receipt_no, 3, 4);
            if($finyear == $financialYear){
                $sequenceNumber = (int) substr($lastCode->receipt_no, -6) + 1; // Extract and increment sequence
            }
        }

        // Format the code (prefix, year, padded sequence)
        $code = "RMP" . $financialYear . str_pad($sequenceNumber, 6, '0', STR_PAD_LEFT);

        // Ensure uniqueness
        while (DB::table('orders')->where('receipt_no', $code)->exists()) {
            $sequenceNumber++;
            $code = "RMP" . $financialYear . str_pad($sequenceNumber, 6, '0', STR_PAD_LEFT);
        }

        return $code;
    }
}