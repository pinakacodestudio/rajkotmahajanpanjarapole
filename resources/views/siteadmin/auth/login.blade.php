<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin | Rajkot Mahajan Panjrapole</title>
    <meta name="author" content="Caprus Digital">
    <meta name="theme-color" content="#0c2f68">
    <link rel="shortcut icon" href="{{ URL::asset('public/siteadmin/assets/img/logos/favicon.png') }}">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/skin/default_skin/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/admin-tools/admin-forms/css/admin-forms.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/admin-tools/admin-forms/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/css/castom.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('public/siteadmin/assets/img/logos/fevicon.png') }}">
 
    <style>
        body.external-page #content .admin-form {
            max-width: 400px;
        }
    </style>
</head>

<body class="external-page sb-l-c sb-r-c">
    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">
        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Begin: Content -->
            <section id="content">
                <div class="admin-form theme-system mtn" id="login1">
                    <div class="row table-layout">
                        <div class="col-xs-12 text-center va-b pr5">
                            <p style='text-align:center; margin-bottom:0px'>
                                <img src="{{ URL('public/assets/images/logo/header-logo-3.png') }}" style="width:90%"/>          
                                <h1 class="text-center text-system mn">
                                </h1>
                            </p>
                        </div>
                    </div>
                    <div class="panel panel-system mt10 br-n">
                        <div class="panel-heading heading-border bg-white p15 pt20">
                            <h2 class='text-system mn' style='font-weight:500;'><i class='fa fa-user'></i> Sign In</h2>
                        </div>
                        <!-- end .form-header section -->
                        <form method="post" action="{{ route('adminlogin') }}">
                            @csrf
                            <div class="panel-body bg-light p15">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section">
                                            {{-- <label for="username" class="field-label text-muted fs18 mb10">Mobile</label> --}}

                                            <label for="email" class="field-label text-muted fs18 mb10">{{ __('E-Mail Address') }}</label>

                                            <label for="username" class="field prepend-icon">

                                            <input id="email" type="email" class="gui-input @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                                <label for="mobile" class="field-icon">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->
                                        <div class="section mb10">
                                            <label for="username" class="field-label text-muted fs18 mb10">Password</label>

                                            <label for="password" class="field prepend-icon">
                                                <input id="password" type="password" class="gui-input @error('password') is-invalid @enderror" name="password" required  placeholder="Enter Your Password" autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                <label for="password" class="field-icon">
                                                    <i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>

                                       
                                        <!-- end section -->
                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                              
                                <button type="submit" class="button btn-system mr10 pull-right">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="#">
                                        {{-- {{ route('password.request') }} --}}
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                </div>
            </section>
            <!-- End: Content -->
        </section>
        <!-- End: Content-Wrapper -->
    </div>
    <script src="{{ URL::asset('public/siteadmin/vendor/jquery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/jquery/jquery_migrate/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/plugins/highcharts/highcharts.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/utility/utility.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/demo/demo.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/js/custom.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/demo/widgets.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/plugins/datatables/media/js/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/plugins/pnotify/pnotify.js') }}"></script>
    <script src='includes/js/notifaction.js'></script>
    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core      
            Core.init();
            // Init Demo JS
            Demo.init();

        });
    </script>

<script type="text/javascript">
function alertbox(title,error,type)
{
  new PNotify({
    title:title,
    text:error ,
    shadow: true,
    opacity: 1,
    addclass: "stack_top_right",
    type:type,
    stack: {
        "dir1": "down",
        "dir2": "left",
        "push": "top",
        "spacing1": 10,
        "spacing2": 10
    },
    width: "auto",
    delay: 5000
      });
}

@if(Session::has('success'))
  alertbox('','{{ Session::get('success') }}','success');
@endif
@if(Session::has('error'))
  alertbox('','{{ Session::get('error') }}','danger');
@endif 
</script>
    <!-- END: PAGE SCRIPTS -->
</body>

</html>