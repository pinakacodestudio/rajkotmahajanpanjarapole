<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>

    <!-- Page Title -->
    <title>Gallery | Rajkot Mahajan Panjrapole</title>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Rajkot Mahajan Panjarapole is one of the oldest organizations dedicated to the welfare of ownerless and sick animals. You can support their cause by donating towards medical treatments, daily food, and other essential needs for the animals." />
  <meta name="keywords" content="rajkot,mahajan,panjarapole,animal,charity,nonprofit,orphan-animal,funding,ngo" />
  <meta name="author" content="Rajkot Mahajan Panjarapole" />
  
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Donate Online for Animal" />
  <meta property="og:description" content="Rajkot Mahajan Panjarapole is one of the oldest organizations dedicated to the welfare of ownerless and sick animals. You can support their cause by donating towards medical treatments, daily food, and other essential needs for the animals." />
  <meta property="og:url" content="https://www.rajkotmahajanpanjarapole.org/" />
  <meta property="og:image" content="https://www.rajkotmahajanpanjarapole.org/images/logo/panjarapole-rajkot-logo.png" />
  <meta property="og:site_name" content="Rajkot Mahajan Panjarapole" />
  <meta name="theme-color" content="#ed5309">

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
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<style>
  #portfolio {
    padding: 10px;
    margin: 0 auto;
}
.gallery-title
{
    font-size: 36px;
    color: #F26522;
    text-align: center;
    font-weight: 700;
    padding: 40px 20px 60px;
}
.filter-button
{
    font-size: 16px;
    border: 1px solid #F26522;
    text-align: center;
    color: #F26522;
    margin-bottom: 10px;
    padding: 0px 16px;
}
.filter-button:hover
{
    font-size: 16px;
    border: 1px solid #F26522;
    text-align: center;
    color: #ffffff;
    background-color: #F26522;
    padding: 0px 16px;

}
.btn-default:active .filter-button:active
{
    background-color: #F26522;
    color: white;
}

.port-image
{
    width: 100%;
}
/* 
.gallery_product
{
    margin-bottom: 5px;
} */
.img-design{
  border: 3px solid #F26522;
  padding: 2px;
  margin: 5px;
}
</style>
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

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
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Gallery</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
    <section id="portfolio">
        <div class="container">
            <div style="margin-bottom: 10px;">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="activity">Activity</button>
                <button class="btn btn-default filter-button" data-filter="animals">Animals</button>
                <button class="btn btn-default filter-button" data-filter="chitranagari">Chitranagari</button>
                <button class="btn btn-default filter-button" data-filter="guest-events">Guest & Event</button>
                <button class="btn btn-default filter-button" data-filter="jiv-chhodaman">Jiv Chhodaman</button>
                <button class="btn btn-default filter-button" data-filter="shed">Shed</button>
                <button class="btn btn-default filter-button" data-filter="treatments">Treatments</button>
            </div>
            <div class="row">
                <?php
                    $directory = 'images/gallery/activity/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all activity">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>

                <?php
                    $directory = 'images/gallery/animals/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all animals">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>
                
                <?php
                    $directory = 'images/gallery/chitranagari/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all chitranagari">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>

                <?php
                    $directory = 'images/gallery/guest-events/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all guest-events">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>

                <?php
                    $directory = 'images/gallery/jiv-chhodaman/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all jiv-chhodaman">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>

                <?php
                    $directory = 'images/gallery/shed/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all shed">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>

                <?php
                    $directory = 'images/gallery/treatments/';
                    $files = scandir($directory);

                    foreach ($files as $file) {
                        $file_path = $directory . $file;
                        if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                ?>
                            <div class="gallery_product col-md-4 filter center all treatments">
                                <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                            </div>
                <?php } } ?>

            </div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all"){
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else{
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');        
            }
        });
        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
            $(this).addClass("active");
        });
    </script>
    </section>
 <?php
    // Include the footer file
    include('footer.php');
  ?>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
 </html>