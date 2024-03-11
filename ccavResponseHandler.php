<!doctype html>
<html class="no-js" lang="">
<body>
    <div class="container">
    <div class="row">
</div><div class="col-md-6 col-sm-6 col-lg-6 col-6 text-center col-md-offset-3">
<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	
	$workingKey='CC97E20ED6355A9756C12DFAE24AB009';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			            //This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);

	for($i = 0; $i < $dataSize; $i++) 
	{
        $information = explode ( '=', $decryptValues [$i] );
        $responseMap [$information [0]] = $information [1];  
	}

    $order_status = $responseMap ['order_status'];
    
	if($order_status=="Success")
	{
		echo "<br>Your Payment is Successfull. We will contact you soon with your request on mail <br> <a class='btn btn-success' href='http://localhost/ccavenue/'>Back to Home</a>";
		
	}
	else if($order_status=="Aborted")
	{
		echo "<br> Your Payment has Been Aborted <br> <a class='btn btn-primary' href='http://localhost/ccavenue/'>Retry</a> || <a class='btn btn-success' href='http://localhost/ccavenue/'>Switch to Main Page</a>";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>The transaction has been declined. <br> <a class='btn btn-success' href='http://localhost/ccavenue/'>Back to Home</a>";
	}
	else
	{
		echo "<br>Thank you for the payment. Your transaction is successful. <br> <a class='btn btn-success' href='http://localhost/ccavenue/'>Back to Home</a>";
	
	}

$order_id = $responseMap ['order_id'];
$tracking_id = $responseMap ['tracking_id'];
$bank_ref_no = $responseMap ['bank_ref_no'];
$order_status = $responseMap ['order_status'];
$payment_mode = $responseMap ['payment_mode'];
$card_name = $responseMap ['card_name'];
$status_code = $responseMap ['status_code'];
$status_message = $responseMap ['status_message'];
$currency = $responseMap ['currency'];
$amount = $responseMap ['amount'];
$billing_name = $responseMap ['billing_name'];
$billing_address = $responseMap ['billing_address'];
$billing_city = $responseMap ['billing_city'];
$billing_state = $responseMap ['billing_state'];
$billing_zip = $responseMap ['billing_zip'];
$billing_country = $responseMap ['billing_country'];
$billing_tel = $responseMap ['billing_tel'];
$billing_email = $responseMap ['billing_email'];
$trans_date = $responseMap ['trans_date'];
$token_eligibility = $responseMap ['token_eligibility'];
$response_code = $responseMap ['response_code'];



echo"<table class='table'>
  <thead>
    <tr>
      <th>Order ID</th>
      <th> $order_id </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Tracking ID</th>
      <td>$tracking_id</td>
    </tr>
    <tr>
      <th>Bank Ref N.o</th>
      <td>$bank_ref_no</td>
    </tr>
    <tr>
      <th>Order Status</th>
      <td>$order_status</td>
    </tr>
        <tr>
      <th>Payment Mode</th>
      <td>$payment_mode</td>
    </tr>
        <tr>
      <th>Card Name</th>
      <td>$card_name</td>
    </tr>
        <tr>
      <th>Status Code</th>
      <td>$status_code</td>
    </tr>
        <tr>
      <th>Status Message</th>
      <td>$status_message</td>
    </tr>
        <tr>
      <th>Total Amount</th>
      <td>$amount / $currency </td>
    </tr>
        <tr>
      <th>Name & Address </th>
      <td>$billing_name | $billing_address, $billing_city, $billing_state, $billing_zip, $billing_country </td>
    </tr>
        </tr>

        <tr>
      <th>Contact Details</th>
      <td>$billing_tel / $billing_email</td>
    </tr>
            <tr>
      <th>Transaction Date</th>
      <td>$trans_date</td>
    </tr>
            <tr>
      <th>Token Eligibility</th>
      <td>$token_eligibility</td>
    </tr>
        <tr>
      <th>Response Code</th>
      <td>$response_code</td>
    </tr>
    
  </tbody>
</table>"
	
?>
<button class="btn btn-warning" onclick="window.print()">Print this page</button>   
<br><hr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dash";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO payments (order_id, tracking_id, bank_ref_no, order_status, payment_mode, card_name, status_code, status_message, currency, billing_name, billing_address, billing_city, billing_state, billing_zip, billing_country, billing_tel, billing_email, trans_date, token_eligibility, response_code, amount)
VALUES ('$order_id','$tracking_id','$bank_ref_no','$order_status','$payment_mode','$card_name','$status_code','$status_message','$currency','$billing_name','$billing_address','$billing_city','$billing_state','$billing_zip','$billing_country','$billing_tel','$billing_email','$trans_date','$token_eligibility','$response_code','$amount')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br><hr>
</div>
</div></div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html