<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
 

<!-- Page Title -->
<title>Contact Us | Rajkot Mahajan Panjrapole</title>

<!-- Favicon and Touch Icons -->
<link href="images/PanjarapoleICON.ico" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script src="https://www.google.com/recaptcha/api.js" ></script>
<style>
  .icon-box {
    /* margin-bottom: 30px; */
    width: 402px;
    height: 140px;
    box-sizing: border-box;
  }
</style>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
  </div> 
   <?php
    // Include the header file
    include('header.php');
  ?>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Contact Us</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-30">Please contact us for more information?</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="send_email.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <sup style="color:red">*</sup></label>
                    <input name="form_name" class="form-control" type="text" value="Demo Name" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone <sup style="color:red">*</sup></label>
                    <input name="form_phone" class="form-control" type="tel" value="9090909090" maxlength="10" pattern="[0-9]{10}" placeholder="Enter Phone" required="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                 <div class="form-group">
                    <label>Email <sup style="color:red">*</sup></label>
                    <input name="form_email" class="form-control required email" value="demoemail@gmail.com" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" value="Testing purpose mail" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <!-- <div class="form-group">
                <div class="col-lg-12 col-md-12 form-field">
                    <div class="g-recaptcha"
                    data-sitekey="6Lfran0nAAAAAKDyb5MXqVPhQAoThfe8bpGPDjtW">
                </div>
              </div> -->
              <div class="form-group">
                <!-- <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" name="send">Send your message</button> -->
                <input type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" value="Submit" name="submit">
                <!-- <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button> -->
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <div class="row">
              <h3 class="line-bottom mt-20 mb-20 ml-15">Our Location</h3>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box media bg-deep p-20 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Our Office Location</h5>
                    <p><b>Rajkot Mahajan Panjrapole</b><br>
                    <a href="https://maps.app.goo.gl/myGAK7QZaPiJkAQ18"> Bhavnagar Road, Nr. Aaji River Bank, Rajkot - 360003, Gujarat, India. </a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box media bg-deep p-15 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Email Address</h5>
                    <p>
                      <a href="mailto:info@rajkotmahajanpanjarapole.org">info@rajkotmahajanpanjarapole.org
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24444.547539406012!2d70.801705940023!3d22.300698344871897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b5ff3775048d%3A0xf0b80c5256ae6cad!2sRajkot%20Mahajan%20Panjrapole!5e0!3m2!1sen!2sin!4v1710183069485!5m2!1sen!2sin" width="auto" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

 <?php
    // Include the footer file
    include('footer.php');
  ?>
</div>

<script src="js/custom.js"></script>

</body>
 </html>