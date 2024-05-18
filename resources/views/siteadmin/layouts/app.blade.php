<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rajkot Mahajan Panjrapole</title>
    <meta name="author" content="Rajkot Mahajan Panjrapole">
    <meta name="theme-color" content="#0c2f68">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ URL('public/assets/images/favicon.png') }}">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/skin/default_skin/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/admin-tools/admin-forms/css/admin-forms.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/admin-tools/admin-forms/css/custom.css') }}">
    <!-- <link rel="shortcut icon" href="{{ URL::asset('public/siteadmin/assets/img/logos/fevicon.png') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/vendor/plugins/datatables/media/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/vendor/plugins/select2/css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/siteadmin/assets/js/sweetalert.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/siteadmin/css/castom.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('public/siteadmin/vendor/daterangepicker.css') }}" />
    <style>
        .navbar-brand-small img{
            width:80%; padding-top:10px; padding-left:10px;
        }
        @media (max-width: 700px) {
            .navbar-brand-small img{
                width: 100%;
                padding-top:7px;
                padding-left:0px;
            }
        }
    </style>
    @yield('css')
</head>

<body class="dashboard-page sb-r-c onload-check mobile-view sb-l-disable-animation tray-rescale sb-l-m">
    <!-- Start: Main -->
    <div id="main">
        <header class="navbar navbar-fixed-top bg-primary">
            <div class="navbar-branding bg-white">
                <a class="navbar-brand" href="">
                    <img src="{{ URL('public/assets/images/logo/header-logo-3.png') }}" style="width:90%"/>
                </a>
                <a class="navbar-brand-small" href="">
                    <img src="{{ URL('public/assets/images/PanjarapoleLOGO.png') }}" style=""/>
                </a>
                
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                        <img src="{{ asset('public/pimage/'.Auth::guard('admin')->user()->profile.'') }}" alt="avatar" class="mw30 br64 mr15">{{ Auth::guard('admin')->user()->name }}
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                        <li class="list-group-item">
                            <a href="{{ URL('siteadmin/profile/') }}" class="animated animated-short fadeInUp">
                                <span class="fa fa-user"></span> Profile
                            </a>
                        </li>
                       
                        <li class="dropdown-footer">
                            <a class="dropdown-item" href="{{ url('siteadmin/logout') }}">
                                <span class="fa fa-power-off pr5"></span>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li id="toggle_sidemenu_t">
                    <span class="ad ad-lines"></span>
                </li>
            </ul>
        </header>
        <aside id="sidebar_left" class="nano nano-primary affix has-scrollbar">
            <div class="sidebar-left-content nano-content">
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>

                    <li>
                        <a href="{{ URL('siteadmin/dashboard/') }}">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('siteadmin/report/orderReport') }}">
                            <span class="fa fa-archive"></span>
                            <span class="sidebar-title">Order</span>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </aside>
        <!-- Start: Content-Wrapper -->
        <section id='content_wrapper'>

            @yield('content')

            <footer id="content-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <span class="footer-legal">© <?= date('Y') ?> Rajkot Mahajan Panjrapole</span>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="#content" class="footer-return-top">
                            <span class="fa fa-arrow-up"></span>
                        </a>
                    </div>
                </div>
            </footer>
        </section>

    </div>
    <!-- End: Main -->
    <!-- jQuery -->

    <script src="{{ URL::asset('public/siteadmin/vendor/jquery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/jquery/jquery_migrate/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/utility/utility.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/demo/demo.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('public/siteadmin/assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="{{ URL::asset('public/siteadmin/vendor/plugins/datatables/media/js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/siteadmin/vendor/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="{{asset('public/siteadmin/vendor/plugins/pnotify/pnotify.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core    
            Core.init();
            // Init Demo JS  
            Demo.init();
            // Define chart color patterns

        });
    </script>
    @yield('js')

    
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

</body>

</html>