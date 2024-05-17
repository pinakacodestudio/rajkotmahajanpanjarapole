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
        <thead>
            <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Email ID</th>
                <th>Order No</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Transaction ID</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; 
            $totalamount = 0;
            foreach($data as $post){
                $totalamount += $post->product_amount;
            $date=date('d-m-Y H:i:s',strtotime($post->added_date));
            ?>
            <tr>
                <td>{{ $i++}}</td>
                <td>{{ $post->full_name}}</td>
                <td>{{ $post->emailid}}</td>
                <td>{{ $post->order_id}}</td>
                <td>{{ $post->product_name}}</td>
                <td>{{ $date}}</td>
                <td>{{ $post->product_amount}}</td>
                <td>{{ $post->payment_id}}</td>
                <td>{{ $post->status}}</td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6" style="text-align:right">Total:</th>
                <th id="total-amount">{{ $totalamount }}</th>
                <th colspan="2"></th>
            </tr>
        </tfoot>
    </table>
</body>

</html>