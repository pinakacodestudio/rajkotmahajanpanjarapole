<?php

$dateObj = new DateTime($orderdetails->added_date);
$added_date = $dateObj->format("d-m-Y");

$dateObj = new DateTime($orderdetails->trans_date);
$transaction_date = $dateObj->format("d-m-Y");

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        body {
            max-width: 800px; /* Set your desired maximum width */
            margin: 0 auto; /* Center the content horizontally */
            padding: 20px; /* Add padding for better readability */
            font-size:14px;
            background-image: url('{{url("public/assets/images/printbg.jpg")}}');
            background-repeat: no-repeat;  /* Optional: set repeat behavior */
            background-position: center;  
            background-size:100% 100%;
        }

        table {
            display: table;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            text-indent: initial;
            border-color: black;
            background-color: transparent;
            border-collapse: collapse;
            border-spacing: 0;
        }
        td,th{
            padding: 5px;
            text-align:left;
        }
        ul{
            padding-left:20px;
        }
        li{
            list-style-type: disc; color: #F26522; font-size: 16px;
            text-align:justify;
        }
        li>span{
            color:black;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; margin-top:150px;">Donation Receipt</h1>
    <table class='table' border='1'  style="margin-top:20px;">
        <tbody>
            <tr>
                <th colspan="3" style="color:#F26522;">Donor Details</th>
            </tr>
            <tr>
                <th style="width:25%">Donor Name:</th>
                <td>{{ $orderdetails->firstname}}</td>
                <th style="width:25%">Receipt No.:</th>
            </tr>
            <tr>
                <th>Mobile No.:</th>
                <td>{{ $orderdetails->phone}}</td>
                <td>{{ $orderdetails->receipt_no}}</td>
            </tr>
            <tr>
                <th>Email Id:</th>
                <td>{{ $orderdetails->emailid}}</td>
                <th>Receipt Date:</th>
            </tr>
            <tr>
                <th>Pan No.:</th>
                <td>{{ $orderdetails->pancard}}</td>
                <td>{{ $added_date}}</td>
            </tr>
        </tbody>
    </table>

    <table class='table' border='1'  style="margin-top:20px; ">
        <tbody>
            <tr>
                <th colspan="2" style="color:#F26522;">Donation Details</th>
            </tr>
            <tr>
                <th style="width:25%">Donation For:</th>
                <td>{{ $orderdetails->product_name}}</td>
            </tr>
            <tr>
                <th>Amount:</th>
                <td>Rs. {{ sprintf("%0.2f",$orderdetails->product_amount)}}/- ({{ Helper::convertToIndianCurrencyWords($orderdetails->product_amount)}})</td>
            </tr>
        </tbody>
    </table>

    <table class='table' border='1'  style="margin-top:20px;">
        <tbody>
            <tr>
                <th colspan="4" style="color:#F26522;">Transaction Details</th>
            </tr>       
            <tr>
                <th style="width:25%;">Order ID:</th>
                <td style="width:25%;">{{ $orderdetails->order_id}}</td>
                <th style="width:25%;">Transaction Date:</th>
                <td style="width:25%;">{{ $transaction_date}}</td>
            </tr>
            <tr>
                <th>Online Type:</th>
                <td>{{ $orderdetails->payment_mode}}</td>
                <th>Transaction ID:</th>
                <td>{{ $orderdetails->payment_id}}</td>
            </tr>
        </tbody>
    </table>

    <div style=" margin-top:20px;">
    <h2>Please Note Terms and Conditions (T&C):</h2>
    <ul>
        <li><span>This donation receipt is an acknowledgement only and not for the purpose of claiming 80G deduction.</span></li>
        <li><span>Form No. 10BE, i.e., Certificate of donation under clause (ix) of sub-section (5) of section 80G of the income Tax Act, 1961, will be issued to you as per provisions of Income-tax Act, 1961, and rules made thereunder. Generally 10BE will be issued by 31st May of the following financial year.</span></li>
        <li><span>PAN is compulsory to obtain Form No. 10BE. Please ensure that the same are mentioned correctly in the donation receipt.</span></li>
        <li><span>10BE will be available in PDF version only. Please ensure to mention correct WhatsApp number and E-mail id to receive the same.</span></li>
        <li><span>Rajkot Mahajan Panjarapole's Unique Registration Number for 80G - AAATR2554AF20217 is valid till March 31, 2026 and to be renewed thereafter periodically as per provisions of Income-tax Act, 1961, and rules made thereunder.</span></li>
    </ul>
    </div>
</body>

</html>