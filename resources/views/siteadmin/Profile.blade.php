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
        
        $val_id = $profile[0]->id;
        $val_name = $profile[0]->name;
        $val_email = $profile[0]->email;
        $val_profile = $profile[0]->profile;
        
        $tab1active = 'active';
        $tab2active = '';
        if (isset($errordata['activetab'])) {
            $tab1active = '';
            $tab2active = 'active';
        }
        ?>

        <!-- Start: Topbar -->
        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="dashboard.php">
                            <span class="glyphicon glyphicon-home fs14"></span>
                        </a>
                    </li>
                    <li class="crumb-active"> User Profile</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->
        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">
            <!-- begin: .tray-center -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-block">
                        <ul class="nav nav-tabs">
                            <li class="<?= $tab1active ?>">
                                <a href="#tab1" data-toggle="tab">Profile</a>
                            </li>
                            <li class="<?= $tab2active ?>">
                                <a href="#tab2" data-toggle="tab">Change Password</a>
                            </li>
                        </ul>
                        <div class="tab-content p30">
                            <div id="tab1" class="tab-pane <?= $tab1active ?>">
                                <form class="admin-form" action="{{ url('siteadmin/updateprofile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-3">
                                        <div class="media clearfix">
                                            <div class="media-left pr30">
                                                <a target="_blank"  href="{{ asset('public/pimage/'.$val_profile.'') }}">
                                                    <img style="width: 100%;" class="media-object mw150"
                                                        src="{{ asset('public/pimage/'.$val_profile.'') }}" alt="...">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="col-md-8">
                                            <div class="section">
                                                <label class="field prepend-icon append-button file">
                                                    <span class="button">Choose File</span>
                                                    <input type="file" accept="image/*" class="gui-file" name="pimg"
                                                        id="imgInp"
                                                        onChange="document.getElementById('uploader1').value = this.value;">
                                                    <input type="text" class="gui-input" id="uploader1"
                                                        placeholder="Please Select A File">
                                                    <label class="field-icon">
                                                        <i class="fa fa-upload"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="hidden" name="id" class="form-control"
                                                    value="<?= $val_id ?>">
                                                <input type="text" name="user" class="form-control"
                                                    value="<?= $val_name ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control"
                                                    value="<?= $val_email ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12"></div>
                                        <div class="col-md-8 col-sm-12">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="tab2" class="tab-pane <?= $tab2active ?>">
                                <form action="{{ url('setpass') }}" method="POST" enctype="multipart/form-data">
                                    <div class="card-body ribbon">
                                        @csrf
                                        <div class='col-md-6'>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="hidden" name="id" class="form-control" value="">
                                                    <input type="password" name="oldpass" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" name="newpass" id='newpass'
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" name="confpass" id='confpass'
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" id='submit' class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <div class='col-md-2'></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <script>
            $('#submit').click(function(e) {
                var newpass = $('#newpass').val();
                var oldpass = $('#confpass').val();
                if (newpass != oldpass) {
                    alert('New Password And Confirm Password Does Not Match');
                    e.preventDefault();
                }
            });
        </script>
    @endsection
</div>
@endsection
