
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
  </div> 
    <!-- Header -->
	<header class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-11">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> 365 Days: 8:00 AM - 6:00 PM </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="mailto:info@rajkotmahajanpanjarapole.org"> info@rajkotmahajanpanjarapole.org</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  <a class="btn btn-default btn-flat rounded-pill btn-xs bg-light p-5 font-11 pl-10 pr-10" target="_blank" href="{{ url('donatenow/cattle-fodder-scheme')}}" style="border-radius: 15px;">Donate Now</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand pull-left flip" href="{{ url('') }}"><img src="{{ url('public/assets/images/logo/header-logo-4.png') }}" alt="Rajot Mahajan Panjarapole"></a>
            <ul class="menuzord-menu">
              <li <?php if (request()->segment(1) == '') echo 'class="active"'; ?>><a href="{{ url('') }}">Home</a></li>
              <li <?php if (request()->segment(1) == 'aboutus') echo 'class="active"'; ?>><a href="{{ url('aboutus') }}">About</a></li>
              <li <?php if (request()->segment(1) == 'gallery') echo 'class="active"'; ?>><a href="{{ url('gallery') }}">Gallery</a></li>
              <li <?php if (request()->segment(1) == 'policy') echo 'class="active"'; ?>><a href="{{ url('policy') }}">Policy</a></li>
              <li <?php if (request()->segment(1) == 'donate') echo 'class="active"'; ?>><a href="{{ url('donate') }}">Donate</a></li>
              <li <?php if (request()->segment(1) == 'contactus') echo 'class="active"'; ?>><a href="{{ url('contactus') }}">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>