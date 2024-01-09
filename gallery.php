<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="FundPro - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Gallery | Rajkot Mahajan Panjrapole</title>

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
    font-size: 18px;
    border: 1px solid #F26522;
    border-radius: 5px;
    text-align: center;
    color: #F26522;
    margin-bottom: 10px;
}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #F26522;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #F26522;

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

.gallery_product
{
    margin-bottom: 30px;
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
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
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
            <div>
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="nature">Nature</button>
                <button class="btn btn-default filter-button" data-filter="people">People</button>
                <button class="btn btn-default filter-button" data-filter="cars">Cars</button>
                <button class="btn btn-default filter-button" data-filter="buildings">Buildings</button>
            </div>
            <div class="row">
                <div class="gallery_product col-md-4 filter center nature">
                    <img src="images/about/about-1.jpg">
                </div>

                <div class="gallery_product col-md-4 filter people">
                    <img src="images/about/about-2.jpg">
                </div>

                <div class="gallery_product col-md-4 filter nature">
                    <img src="images/about/about-3.jpg">
                </div>

                <div class="gallery_product col-md-4 filter cars">
                    <img src="images/about/about-1.jpg">
                </div>

                <div class="gallery_product col-md-4 filter buildings">
                    <img src="images/about/about-2.jpg">
                </div>

                <div class="gallery_product col-md-4 filter cars">
                    <img src="images/about/about-3.jpg">
                </div>

                <!-- <div class="gallery_product col-md-4 filter buildings">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter cars">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter cars">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter nature">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter buildings">
                    <img src="https://via.placeholder.com/365">
                </div>

                <div class="gallery_product col-md-4 filter people">
                    <img src="https://via.placeholder.com/365">
                </div> -->
            </div>
        </div>
</section>
    <script>
        $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
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