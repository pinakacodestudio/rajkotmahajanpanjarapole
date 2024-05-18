@extends('siteadmin/layouts.app')
@section('css')
    <style>
        .panel-body{
            width: 100%;
            overflow-x: auto;
        }
        #datatable {
            width: max-content;
            border-collapse: collapse;
        }
        /* Responsive styling */
        @media screen and (max-width: 720px) {
            .table thead {
                display: none; /* Hide table header */
            }
            .table tr {
                display: block; /* Display each row as a block */
                margin-bottom: 10px; /* Space between rows */
            }
            .table td {
                display: block;
                text-align: right;
                border-bottom: 1px solid #ddd;
                position: relative;
                padding-left: 50%;
                min-height:2rem;
            }
            .table td::before {
                content: attr(data-label); /* Add a label before each cell's content */
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
@endsection

@section('content')
<div id="main">
    @section('navbar')
    @parent
    @endsection
    @section('sidebar')
    @parent
    @endsection
    @section('content')

    <?php


    ?>
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/') }}">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active">Order Report</li>
            </ol>
        </div>
        <div class="topbar-right">
            <div id="date-range" style="width:180px;border:none; margin-top:10px;" class="pull-right">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
                <input type="hidden" name="startdate" id="startdate" value='{{$startdate}}'>
                <input type="hidden" name="enddate" id="enddate" value='{{$enddate}}'>
            </div>
            <div style="margin-right:10px;" class="pull-right">
                <select class="form-control" name="product_name" id="product_name" style="height:30px !important;padding:6px 10px !important;">
                    <option value="">- Select Donation -</option>
                    @foreach($donationlist as $post)
                        <option value="{{ $post->id }}">{{ $post->optionvalue}}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-right:10px;" class="pull-right">
                <select class="form-control" name="status_name" id="status_name" style="height:30px !important;padding:6px 10px !important;">
                    <option value="">- Select Status -</option>
                    <option value="Success">Success</option>
                    <option value="Failure">Failure</option>
                    <option value="Pending">Pending</option>
                    <option value="Aborted">Aborted</option>
                    <option value="Invalid">Invalid</option>
                    <option value="Timeout">Timeout</option>
                </select>
            </div>
        </div>
    </header>
    <!-- End: Topbar -->
    <!-- Begin: Content -->
    <section id="content">
        <!-- begin: .tray-center -->
        <div class="row p5 pt15">
            <div class="col-lg-12">
                <div class="panel panel-visible" id="spy3">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Order Report
                            <div class='pull-right'><a class='btn btn-sm btn-warning exportsale'>Export</a></div>
                        </div>

                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Phone No.</th>
                                    <th>Email ID</th>
                                    <th>Order No</th>
                                    <th>Receipt No</th>
                                    <th style="min-width:200px;">Product Name</th>
                                    <th style="min-width:130px;">Date</th>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="8" style="text-align:right">Total:</th>
                                    <th id="total-amount"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
</div>
@endsection
@section('js')
<script>
    $(function() {
        var start = moment().subtract(3, 'months');
        //var start = moment($('#startdate').val());
        var end = moment($('#enddate').val());

        function cb(start, end) {
            // $('#date-range span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $('#date-range span').html(start.format('D/M/YYYY') + ' - ' + end.format('D/M/YYYY'));
            $('#startdate').val(start.format('YYYY-M-D'));
            $('#enddate').val(end.format('YYYY-M-D'))
            getdata();
        }
        $('#date-range').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });
    $('.exportsale').click(function() {
        var startdate = $('#startdate').val();
        var enddate = $('#enddate').val();
        var product_name = $('#product_name').val();
        window.location.href = '{{ url("siteadmin/report/exportOrder")}}?startdate=' + startdate + '&enddate=' + enddate + '&product_name=' + product_name;
    });
    $('.pdfsale').click(function() {
        var startdate = $('#startdate').val();
        var enddate = $('#enddate').val();
        var product_name = $('#product_name').val();
        window.location.href = '{{ url("siteadmin/report/pdfOrder")}}?startdate=' + startdate + '&enddate=' + enddate + '&product_name=' + product_name;
    });
    
    $('#product_name,#status_name').change(function(){
        // Call the getdata() function
        getdata();
    });

    function getdata() {
        $("#datatable").dataTable().fnDestroy();
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("siteadmin/report/getOrderData") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'startdate': $('#startdate').val(),
                    'enddate': $('#enddate').val(),
                    'product_name': $('#product_name').val(),
                    'status_name': $('#status_name').val(),
                },
            },
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', '#');
                    }
                },
                {
                    data: 'firstname',
                    name: 'firstname',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Customer');
                    }
                },
                {
                    data: 'phone',
                    name: 'phone',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Phone No.');
                    }
                },
                {
                    data: 'emailid',
                    name: 'emailid',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Email ID');
                    }
                },
                {
                    data: 'order_id',
                    name: 'order_id',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Order No');
                    }
                },
                {
                    data: 'receipt_no',
                    name: 'receipt_no',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Receipt No');
                    }
                },
                {
                    data: 'product_name',
                    name: 'product_name',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Product');
                    }
                },
                {
                    data: 'added_date',
                    name: 'added_date',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Date');
                    }
                },
                {
                    data: 'product_amount',
                    name: 'product_amount',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Amount');
                    }
                },
                {
                    data: 'payment_id',
                    name: 'payment_id',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Transaction ID');
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Status');
                    }
                },
                {
                    data: null,
                    createdCell: function(td, cellData, rowData, row, col) {
                        $(td).attr('data-label', 'Actions');
                        if (rowData.status == 'Success') {
                            $(td).html(`
                                <a href="{{ url('download') }}/${rowData.token}" class="btn btn-primary btn-xs"><i class="fa fa-download"></i></a>
                                <a href="{{ url('siteadmin/report/sendEmail') }}/${rowData.token}" class="btn btn-success btn-xs"><i class="fa fa-send"></i></a>
                            `);
                        } else {
                            $(td).html('');
                        }
                    }
                }
            ],
            footerCallback: function(row, data, start, end, display) {
                var api = this.api();

                // Total calculation logic
                var totalPrice = api.column(7).data().reduce(function(a, b) {
                    return parseFloat(a) + parseFloat(b);
                }, 0);

                // Update the total amount in the footer
                $('#total-amount').html(totalPrice.toFixed(2)); // Assuming the price is in decimal format
            },
            order: [],
            deferRender: true,
            lengthMenu: [
                [10, 15, 25, 50, 100, 1000],
                [10, 15, 25, 50, 100, 1000]
            ],
            pageLength: 15,
        });

    }
</script>
@endsection