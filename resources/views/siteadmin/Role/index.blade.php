@extends('siteadmin/layouts.app')
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
        
        $val_item_name = '';
        $val_drawing_no = '';
        $val_description = '';
        
        $operation = 'Add';
        
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
                    <li class="crumb-active">Role</li>
                </ol>
            </div>
            @if(Helper::check_role_assigned('role', 'add'))
            <div class="topbar-right">
            <a href="{{ url('siteadmin/Role/Add') }}" class="btn btn-default btn-sm light fw600 ml10">
                    <span class="fa fa-plus pr5"></span>Add</a>
            </div>
            @endif

        </header>
        <!-- End: Topbar -->
        <!-- Begin: Content -->
        <section id="content" class="animated fadeIn">
            <!-- begin: .tray-center -->
            <div class="row p5 pt15">
                <div class="col-lg-12">
                    <div class="panel panel-visible" id="spy3">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Role
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Role Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0; 
                                    foreach ($rolelist as $post) {
                                       
                                        if($post->id == 1){
                                            continue;
                                        }
                                        $i++; 
                                        ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $post->role_name ?></td>
                                         <td>
                                         @if(Helper::check_role_assigned('role', 'edit'))
                                            <div class="btn-group">
                                                <a href="{{ url('siteadmin/Role/Add') }}/{{ $post->id }}"
                                                    class="btn btn-warning btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </div>
                                            @endif
                                            @if(Helper::check_role_assigned('role', 'delete'))
                                            <div class="btn-group">
                                                <a data-id='{{$post->id}}'
                                                    class="btn btn-danger btn-xs cancel">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
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
    $('.cancel').click(function(e) {
        e.preventDefault();

        var delid = $(this).attr('data-id');
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Records!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {

                    window.location.href = "{{ url('siteadmin/Role/delete') }}" + '/' + delid;

                } else {
                    swal({
                        title: "Cancelled",
                        text: "Your Records are safe :)",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                }
            });

    });
    $('#datatable').dataTable({
        dom: 'Blfrtip',
        scrollX: true,
    });
</script>
@endsection
