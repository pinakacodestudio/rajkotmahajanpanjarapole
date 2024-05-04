@extends('siteadmin.layouts.app')

@section('content')
<div id="main">
    @section('navbar')
    @parent
    @endsection
    @section('sidebar')
    @parent
    @endsection
    @section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-icon">
                    <a href="{{ url('/')}}">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active">
                    <a>Dashboard</a>
                </li>
            </ol>
        </div>
        <div class="topbar-right">
            <div id="date-range" style="width:180px;border:none" class="pull-right">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
                <input type="hidden" name="startdate" id="startdate">
                <input type="hidden" name="enddate" id="enddate">
            </div>
        </div>
    </header>
    <!-- End: Topbar -->
    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <!-- Dashboard Tiles -->
        
        <div class="row mb10">
            <?php 
            foreach($donationlist as $post){ 
                $elementId = "box_".$post->id;
                ?>
            <div class="col-sm-6 col-md-4">
                <div class="panel bg-primary light of-h mb10">
                    <div class="p5">
                        <h4 class="m5 text-muted">{{ $post->optionvalue}}</h4>
                        <h2 class="m5 text-muted">
                            <b id='{{ $elementId }}'><span style="font-size:15px"> Amount : Rs. 0 </span></b>
                        </h2>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    @endsection
    <!-- End: Content-Wrapper -->
    @section('js')
    <script src="{{ URL::asset('public/siteadmin/js/Chart.js') }}"></script>
    <script>
        $(function() {
            var start = moment().subtract(1, 'months');
            //var start = moment();
            var end = moment();

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

        function getdata() {
            $.ajax({
                url: '{{ URL("siteadmin/dashboard/getBoxvalue") }}',
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'startdate': $('#startdate').val(),
                    'enddate': $('#enddate').val(),
                },
                success: function(data) {
                    data = $.parseJSON(data);
                    var customer = '<span style="font-size:15px"> Amount : Rs. </span> ' + data.totalproduct.amount;
                    $('#').html(customer);
                    $.each(data.totalproduct, function(index, product) {
                    // Create HTML elements dynamically using product_name as HTML ID
                    //var elementId = product.product_name.replace(/\s+/g, '-').toLowerCase(); // Convert product_name to lowercase and replace spaces with hyphens for valid HTML ID
                    var elementId = 'box_'+product.productid;
                    
                    var productHtml = '<span style="font-size:15px"> Amount : Rs. ' + product.amount + '</span>';
                    // Append the HTML content to a container element, assuming you have a div with ID 'product-container'
                    if ($('#' + elementId).length) {
                        // If the element exists, append the HTML content
                        $('#' + elementId).html(productHtml);
                    } else {
                        // If the element does not exist, ignore it
                        console.log('Element with ID ' + elementId + ' not found.');
                    }
                });
                    
                },
                error: function(error) {
                    swal("Done!", error, "info");
                    return false;
                }
            });
         
        }
    </script>

    @endsection
</div>
@endsection