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
    $val_role_name = "";
    $val_role_details = array();
    if ($id != '') {
        $val_role_details = json_decode($role->role);
        $val_role_name = $role->role_name;
    }

    ?>
    <style>
        .role_ul li {
            display: inline-block;
            width: 100%;
            padding: 5px;
            line-height: 20px;
            border: 1px solid #ddd;
        }

        li>.fa {
            font-size: 14px;
        }

        ul,
        ol {
            margin-top: 0;
            margin-bottom: 9.5px;
        }

        ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 0em;
            margin-block-end: 0em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 0px;
        }

        .switcher {
            float: right;
            width: 50px;
            text-align: center;
        }

        .maintop span {
            width: 50px;
            text-align: center;
            display: inline-block;
        }
    </style>
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.php">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active"> Role</li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">


            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Role</span>
                </div>
                <form action="{{ url('siteadmin/Role/saveRole')}}" method='post' id='userform'>
                    @csrf
                    <div class='panel-body'>

                        <input type='hidden' name='id' value='{{ $id}}'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <label>Role Name:</label>
                                <input type='text' class='form-control' name='role_name' value='{{ $val_role_name}}'>
                            </div>
                        </div>
                        <div class='row'>

                            <div class="col-lg-12 mt20 mb20">
                                <?php $menu_list_arr = json_decode(MENU_LIST_JSON);
                                echo '<ul class="role_ul maintop">';
                                echo '<li>Menu <div class="pull-right">
                            <span>Delete</span>
                            <span>Edit</span>
                            <span>Add</span>
                            <span>View</span>
                            </div></li>';
                                echo '</ul>';
                                foreach ($menu_list_arr as $m) {
                                    echo '<ul class="role_ul">';
                                    echo Helper::set_menu_role($m, $val_role_details);
                                    echo '</ul>';
                                }

                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                    </div>
                </form>
            </div>



        </div>
    </section>

    @endsection
</div>
@endsection
@section('js')
<script>
    $(".select2-multiple").select2({
        placeholder: "Select a Document",
        allowClear: true
    });
</script>
@endsection