  <!-- Header -->
  <header class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div> -->
          <div class="col-md-11">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <!-- <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li> -->
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#"> info@rajkotmahajanpanjarapole.org</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10" target="_blank" href="donationform_custom.php" >Donate Now</a>
                </li>
                <!-- <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup" href="ajax-load/volunteer-apply-form.html">Join Us</a>
                </li> -->
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
            <a class="menuzord-brand pull-left flip" href="index.php"><img src="images/header-logo.png" alt=""></a>
            <ul class="menuzord-menu">

              <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>><a href="index">Home</a></li>
              <li><a href="aboutus">About</a></li>
              <li><a href="gallery">Gallery</a></li>
              <li><a href="activity">Activity</a></li>
              <li <?php if (basename($_SERVER['PHP_SELF']) == 'contactus.php') echo 'class="active"'; ?>><a href="contactus">Contact Us</a></li>
              <li <?php if (basename($_SERVER['PHP_SELF']) == 'donate.php') echo 'class="active"'; ?>><a href="donate">Donate</a>

                <ul class="dropdown">
                  <li><a href="#">Donation amount slab</a>
                  </li>
                  <li><a href="donationform_custom.php" target="_blank">Payment form</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>