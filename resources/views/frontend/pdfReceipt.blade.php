<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        .table {
            width: 100%;
            max-width: 100%;
        }

        table {
            background-color: transparent;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-color: grey;
        }
        td,th{
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2;}
    </style>
</head>
<body>
    <table class='table table-striped table-hover' border='1' width='100%'>
        <tbody>
            <tr>
                <th>Receipt No</th>
                <td>{{ $orderdetails->receipt_no}}</td>
            </tr>
            <tr>
                <th>Receipt Date</th>
                <td>{{ $orderdetails->added_date}}</td>
            </tr>
            <tr>
                <th>Donor Name</th>
                <td>{{ $orderdetails->firstname}}</td>
            </tr>
            <tr>
                <th>PAN No</th>
                <td>{{ $orderdetails->pancard}}</td>
            </tr>
            <tr>
                <th>Mobile No</th>
                <td>{{ $orderdetails->phone}}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td>{{ $orderdetails->emailid}}</td>
            </tr>
            <tr>
                <th>Package Name</th>
                <td>{{ $orderdetails->product_name}}</td>
            </tr>
            <tr>
                <th>Order ID</th>
                <td>{{ $orderdetails->order_id}}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ $orderdetails->product_amount}}</td>
            </tr>
            <tr>
                <th>Amount in Words</th>
                <td>{{ $orderdetails->receipt_no}}</td>
            </tr>
            <tr>
                <th>Online Type</th>
                <td>{{ $orderdetails->payment_mode}}</td>
            </tr>
            <tr>
                <th>Transaction Date</th>
                <td>{{ $orderdetails->trans_date}}</td>
            </tr>
            <tr>
                <th>Transaction ID</th>
                <td>{{ $orderdetails->payment_id}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>