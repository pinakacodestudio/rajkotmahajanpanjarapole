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
@php 
$val_uname='';
$val_email='';
$val_docid='';
if($id!=0)
{
    $val_uname=$user->name;
    $val_email=$user->email;
    $val_docid=$user->role_id;
}
@endphp

    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.php">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active"> User</li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">

            <form role="form" action="{{ url('siteadmin/User/save') }}" method="POST">
                @csrf
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">User</span>
                    </div>
                    <div class="panel-body">
                        <input type='hidden' name='id' id='id' value='{{$id}}'>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold">User Name</label>
                                <input type="text" name="uname" value="{{$val_uname}}" id="uname"
                                    placeholder="Enter User Name" class="form-control" required>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Email</label>
                                <input type="email" name="email" value="{{$val_email}}" id="email"
                                    placeholder="Enter User Email" class="form-control" required>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Role</label>
                                <select class="form-control" name='role' id='role'>
                                        <option value="">---Select---</option>
                                    @foreach ($rolelist as $row)
                                        <option value="{{ $row->id }}" 
                                        @php if($row->id== $val_docid){  
                                           echo 'selected';
                                        } @endphp
                                         >{{ $row->role_name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Passowrd</label>
                                <input type="password" name="password" id="password"
                                    placeholder="Enter Password" class="form-control" @if($id==0) required @endif>
                            </fieldset>
                        </div>
                    </div>
                
                   
                    <div class="panel-footer">
                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                    </div>
                </div>
            </form>
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