@extends('frontend.layout.app')
@section('title','Gallery ')
@section('internalcssjs')
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
@endsection
@section('content')
 <!-- Section: inner-header -->
 <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ url('public/assets/images/bg/bg1.jpg') }}">
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
                <button class="btn btn-default filter-button" data-filter="animals">Animals</button>
                <button class="btn btn-default filter-button" data-filter="birds">Birds</button>
                <button class="btn btn-default filter-button" data-filter="treatments">Treatments</button>
                <button class="btn btn-default filter-button" data-filter="activity">Activity</button>
                <button class="btn btn-default filter-button" data-filter="jiv-chhodaman">Jiv Chhodaman</button>
                <button class="btn btn-default filter-button" data-filter="shed">Shed</button>
                <button class="btn btn-default filter-button" data-filter="guest-events">Guest & Event</button>
                <button class="btn btn-default filter-button" data-filter="chitranagari">Chitranagari</button>
            </div>
            <div class="row">

            <?php
              // Define an array of directories and their corresponding class names
              $gallery_directories = [
                  'public/assets/images/gallery/activity/' => 'activity',
                  'public/assets/images/gallery/animals/' => 'animals',
                  'public/assets/images/gallery/birds/' => 'birds',
                  'public/assets/images/gallery/chitranagari/' => 'chitranagari',
                  'public/assets/images/gallery/guest-events/' => 'guest-events',
                  'public/assets/images/gallery/chitranagari/' => 'chitranagari',
                  'public/assets/images/gallery/jiv-chhodaman/' => 'jiv-chhodaman',
                  'public/assets/images/gallery/shed/' => 'shed',
                  'public/assets/images/gallery/treatments/' => 'treatments'
              ];

              // Iterate over each directory
              foreach ($gallery_directories as $directory => $class_name) {
                  $files = scandir($directory);

                  foreach ($files as $file) {
                      $file_path = $directory . $file;
                      // Check if the file is a valid image file
                      if (is_file($file_path) && in_array(strtolower(pathinfo($file_path, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
              ?>
                          <div class="gallery_product col-md-4 filter center all <?php echo $class_name; ?>">
                              <img class="img-design" src="<?php echo $file_path; ?>" alt="<?php echo $file; ?>">
                          </div>
              <?php
                      }
                  }
              }
              ?>
              
            </div>
        </div>
    </section>
@endsection
@section('internaljs')
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
@endsection