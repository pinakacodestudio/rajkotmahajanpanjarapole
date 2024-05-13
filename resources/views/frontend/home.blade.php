@extends('frontend.layout.app')
@section('title','Home ')
@section('internalcssjs')

<link  href="{{ url('public/assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ url('public/assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ url('public/assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

<style>
  .donation-box p{
    line-height: 1.2em; /* Adjust line height as needed */
    min-height: calc(1.2em * 3); /* Height for three lines */
  }
  .team-member .team-info{
    bottom:0px;
  }
</style>
@endsection
@section('content')
<!-- Section: home -->
<section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default text-center" data-version="5.0">
            <ul>

              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ url('public/assets/images/mainbanner/main-banner-1.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ url('public/assets/images/mainbanner/main-banner-1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <img src="{{ url('public/assets/images/mainbanner/main-banner-2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->
   
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme bg-theme-colored-transparent text-white font-raleway mt-20 pl-10 pr-10"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['36']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">Shelter for Innocent Orphan Animal
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme bg-theme-colored-transparent-gr text-black font-raleway pl-10 pr-10 mt-50" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px; text-center">Donate for the Century old shelter place for injured, blind, <br>crippled, weak, sick, milk-less, who cannot speak and express <br> their sufferings,their hunger, their pain or their needs.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px; margin-top: 100px; border-radius: 20px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="{{ url('donatenow/cattle-fodder-scheme')}}">Donate Now</a>
                </div>
              </li>

              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ url('public/assets/images/mainbanner/main-banner-2.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ url('public/assets/images/mainbanner/main-banner-2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->
   
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme  bg-theme-colored-transparent text-white font-raleway pl-10 pr-10"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['42']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">Support Slaughter Animals
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme bg-theme-colored-transparent-gr text-black font-raleway pl-30 pr-30" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['20',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px; text-center">Donate for rescued from going to<br>slaughter, unsupported animals.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="{{ url('donatenow/cattle-fodder-scheme')}}">Donate Now</a>
                </div>
              </li>

              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ url('public/assets/images/mainbanner/main-banner-3.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ url('public/assets/images/mainbanner/main-banner-3.jpg') }}"  alt=""  data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

               <!-- LAYER NR. 2 -->
               <div class="tp-caption tp-resizeme bg-theme-colored-transparent text-white font-raleway pl-10 pr-10"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['39']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Feeding Motherless Baby Animals
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme bg-theme-colored-transparent-gr text-black font-raleway pl-10 pr-10" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px; text-center">Donate for the cattle who are Motherless-Orphans which <br> requires to feed milk through bottles.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="{{ url('donatenow/cattle-fodder-scheme')}}">Donate Now</a>
                </div>
              </li>
              
              <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ url('public/assets/images/mainbanner/main-banner-4.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ url('public/assets/images/mainbanner/main-banner-4.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Medical Support
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme bg-theme-colored-transparent-gr text-black font-raleway pl-30 pr-30" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['20',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px; text-center">Donate for to feed, to cure & treatment of the cattle & birds <br>which is unproductive, helpless, injured, sick.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="donate">Donate Now</a>
                </div>
              </li>
            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
       
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
          <div class="col-lg-4 img-hover-border mt-sm-30">
              <img class="img-fullwidth img-design" src="{{ url('public/assets/images/about/about-6.jpg') }}" alt="">
              <img class="img-fullwidth img-design" src="{{ url('public/assets/images/about/about-5.jpg') }}" alt="">
            </div>
            <div class="col-md-8">
              <div class="about-details">
                <h3 class="font-30 mt-0"> Welcome to <span class="text-theme-colored">Rajkot Mahajan Panjrapole</span></h3>
                <p>The institution has been providing shelter and care for animals for over a century, and it is heartening to see the dedication and compassion of the staff and volunteers who work tirelessly to ensure the well-being of these animals. It is also commendable that they provide veterinary services and have a separate division for sick and orphaned animals, showing their commitment to the welfare of the animals under their care.</p>
                <p>It is inspiring to see the legacy of compassion and care that the Rajkot Mahajan Panjarapole has built over the years, and it is a reminder of the importance of kindness and empathy towards all living beings.</p>
                <p>Our Rajkot Mahajan Panjarapole has its own veterinary officer and helpers, providing veterinary services such as necessary treatments and operations for sick or injured animals. Currently, the daily expense is Rs. 1,50,000/-</p>
                <a href="aboutus" class="btn btn-flat btn-colored btn-theme-colored mt-15 mr-15">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section id="causes" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h3 class="line-bottom-center mt-0">Donation <span class="text-theme-colored font-weight-600">Schemes</span></h3>
              <!-- <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i><br>
                <i class="fas fa-donate" style="font-size: 36px;"></i>
              </div> -->
              <p class="text-center">In every religion nonviolence is given a prime place. It is the holy duty of human being to keep sympathy towards miserable persons and animals.</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="owl-carousel-3col">
            <?php 
            foreach($donationlist as $post){ ?>
            <div class="item">
              <div class="causes bg-white maxwidth500 mb-30 donation-box">
                <div class="thumb">
                  <img src="{{ url($post->imgpath) }}" alt="" class="img-fullwidth">
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-15 pb-15">
                <h4 class="text-uppercase"><a href="{{ url('donatenow/'.$post->urlpath) }}">{{ $post->title }}</a></h4>
                <p class="mt-20">{{ $post->description }}</p>
                <a href="{{ url('donatenow/'.$post->urlpath) }}" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10"><i class="fas fa-inr font-16 mr-5 ml-5"></i> Donate - {{ $post->amount }} <i class="fas fa-inr font-16 mr-5 ml-5"></i></a>
                </div>
              </div>
            </div>
          <?php } ?>

          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="{{ url('public/assets/images/bg/bg1.jpg') }}" data-parallax-ratio="0.7">
      <div class="container pt-80 pb-80">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-culture mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="127" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0<span>+</span></h2>
              <h5 class="text-white text-uppercase font-weight-600">years old</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-news-paper mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="5000" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">animals</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="100" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <!-- <span class="plus">+</span> -->
              <h5 class="text-white text-uppercase font-weight-600">donation centers</h5>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Section: Mission  -->
    <section>
      <div class="container pb-30" style="margin-top: 20px;">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 pb-sm-20">
              <h3 class="line-bottom mt-0">Our <span class="text-theme-colored">Mission</span></h3>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-5 mb-20">
                    <a class="media-left pr-15 pl-5 pt-10 flip">
                      <!-- <i class="flaticon-charity-shaking-hands-inside-a-heart text-theme-colored"></i> -->
                      <i class="fa-solid fa-shield-dog" style="color: #F26255"></i>
                    </a>
                    <div class="media-body">
                      <h4 class="mb-0 text-uppercase">Save Animals</h4>
                      <p>To save and preserve maximum animals who comes to the gate of Rajkot Mahajan Panjarapole.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-5 mb-20"> <a class="media-left pt-10 pr-15 pl-5 flip"><i class="fas fa-stroopwafel" style="color: #F26255"></i></a>
                    <div class="media-body">
                      <h4 class="mb-0 text-uppercase">Feed Healthy Food</h4>
                      <p>To feed maximum protein food to animals especially sick animals.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-5 mb-20"> <a class="media-left pt-10 pr-15 pl-5 flip"><i class="far fa-hospital" style="color: #F26255"></i></a>
                    <div class="media-body">
                      <h4 class="mb-0 text-uppercase">Advanced Hospital</h4>
                      <p>To develop hospital facilities with advanced surgical equipment & medicine to treatment & cure for sick animals.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-5 mb-20"> <a class="media-left pt-10 pr-15 pl-5 flip" href="#"><i class="fa-solid fa-arrow-up-from-ground-water" style="color: #F26255"></i></a>
                    <div class="media-body">
                      <h4 class="mb-0 text-uppercase">Modern Construction</h4>
                      <p>To construct modern shed to preserve and to give shelter to maximum animals and to construct different types of divison for each type of animals.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h3 class="line-bottom border-bottom mt-0">Upcoming <span class="text-theme-colored">Events</span></h3>
              
              <?php
                  foreach($eventslist as $post){
              ?>

              <div class="event sm-maxwidth400 border-bottom mb-5 mt-10 ">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700"><?php echo substr($post->date, 8, 2); ?></li>
                        <li class="font-18 text-white text-center text-uppercase"><?php echo substr($post->MONTHNAME, 0, 3); ?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content pl-5 pr-10 pb-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#"><?php echo $post->name; ?></a></h5>
                      <p class="text-justify font-14">
                      <?php echo $post->description; ?>
                      </p>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
<?php } ?>

            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-stellar-background-ratio="0.2"  data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0 text-white">
               Our <span class="text-theme-colored">Appeal</span>
              </h3>
              <p class="text-white text-center" style="font-size: 16px;">
                Who can be the saviour of those unfortunate animals who cannot speak and express their sufferings, their hunger, their pain or their needs? An answer to this is RAJKOT MAHAJAN PANJARAPOLE and animal welfare activists. Rajkot Mahajan Panjarapole has been facing severe financial constraints on account of ever-increasing expenses to serve and maintain ever-increasing animals.
              </p>
              <p class="text-white text-center" style="font-size: 16px;">
                We earnestly appeal kind hearted philanthropists for generous donations to support and supplement the noble cause of maintaining, saving, serving and sheltering unfortunate animals.
              </p>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: volunteers -->
    <section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h3 class="line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Volunteers</span></h3>
              <!-- <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p> -->
            </div>
          </div>
        </div>
      
        <div class="section-content">          
          <div class="row multi-row-clearfix">
            <div class="testimonial-box">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="team-slider owl-carousel">

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/1 Nileshbhai Shah.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Nileshbhai Shah
                        </p>
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/2 Vinodbhai Bavdecha.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Vinodbhai Bavdecha</p>
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/3 Dipakbhai Raval.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Dipakbhai Raval</p>
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/4 Mitesh Shah.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Mitesh Shah</p>
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/5 Dipakbhai Lathigra.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Dipakbhai Lathigra</p>   
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/6 Kalpeshbhai Chavda.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Kalpeshbhai Chavda</p>
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/7 Jaydeep Vora.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <h4 class="mt-0 text-white"></h4>
                          <h6 class="mt-3 text-white" style="margin-top: -6px;"></h6>
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Jaydip Vora</p>
                        </div>
                      </div>

                      <div class="team-member clearfix">
                        <div class="team-thumb">
                          <img alt="" src="{{ url('public/assets/images/Volunteers/8 Kalpesh Fichadiya.jpg') }}" class="img-fullwidth">
                        </div>
                        <div class="team-info bg-theme-colored">
                          <p class="mt-5 text-center text-white font-20" style="line-height:1.4rem">Kalpesh Fichadiya</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('internaljs')
<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ url('public/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('public/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
<script>
      $('.team-slider').owlCarousel({
          loop: true,            
          nav: false,
          autoplay: true,
          autoplayTimeout: 5000,
          smartSpeed: 450,
          margin: 20,
          responsive: {
              0: {
                  items: 1
              },
              768: {
                  items: 2
              },
              991: {
                  items: 3
              },
              1200: {
                  items: 4
              },
              1920: {
                  items: 3
              }
          }
      });
</script>
 <!--  Revolution slider scriopt -->
 <script>
	$(document).ready(function(e) {
	$(".rev_slider_default").revolution({
		sliderType:"standard",
		sliderLayout: "auto",
		dottedOverlay: "none",
		delay: 5000,
		navigation: {
		keyboardNavigation: "off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation: "off",
		onHoverStop: "off",
		touch: {
			touchenabled: "on",
			swipe_threshold: 75,
			swipe_min_touches: 1,
			swipe_direction: "horizontal",
			drag_block_vertical: false
		},
		arrows: {
			style:"zeus",
			enable:true,
			hide_onmobile:true,
			hide_under:600,
			hide_onleave:true,
			hide_delay:200,
			hide_delay_mobile:1200,
			tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
			left: {
			h_align:"left",
			v_align:"center",
			h_offset:30,
			v_offset:0
			},
			right: {
			h_align:"right",
			v_align:"center",
			h_offset:30,
			v_offset:0
			}
		},
		bullets: {
			enable:true,
			hide_onmobile:true,
			hide_under:600,
			style:"metis",
			hide_onleave:true,
			hide_delay:200,
			hide_delay_mobile:1200,
			direction:"horizontal",
			h_align:"center",
			v_align:"bottom",
			h_offset:0,
			v_offset:30,
			space:5,
			tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
		}
		},
		responsiveLevels: [1240, 1024, 778],
		visibilityLevels: [1240, 1024, 778],
		gridwidth: [1170, 1024, 778, 480],
		gridheight: [700, 768, 960, 720],
		lazyType: "none",
		parallax: {
		origo: "slidercenter",
		speed: 1000,
		levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
		type: "scroll"
		},
		shadow: 0,
		spinner: "off",
		stopLoop: "on",
		stopAfterLoops: 0,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		fullScreenAutoWidth: "off",
		fullScreenAlignForce: "off",
		fullScreenOffsetContainer: "",
		fullScreenOffset: "0",
		hideThumbsOnMobile: "off",
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 0,
		hideAllCaptionAtLilmit: 0,
		debugMode: false,
		fallbacks: {
		simplifyAll: "off",
		nextSlideOnWindowFocus: "off",
		disableFocusListener: false,
		}
	});
	});
</script>
<!-- Slider Revolution Ends -->

@endsection