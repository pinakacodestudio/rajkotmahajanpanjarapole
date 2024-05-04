@extends('layout.app')

@section('content')

<div class="page-content bg-white">
		<!-- Slider -->
		<div class="banner-one" style="background-image: url(public/assets/images/main-slider/slider1/pic2.png);">
			<div class="container">
				<div class="banner-inner">
					<div class="img1"><img src="{{ asset('public/assets/images/main-slider/slider1/pic3.png') }}" alt=""></div>
					<div class="img2"><img src="{{ asset('public/assets/images/main-slider/slider1/pic4.png') }}" alt=""></div>
					<div class="row align-items-center">
						<div class="col-md-7">
							<div class="banner-content">
								<h6 data-wow-duration="1s" data-wow-delay="0.5s" class="wow fadeInUp sub-title">Giving voice</h6>
								<h1 data-wow-duration="1.2s" data-wow-delay="1s" class="wow fadeInUp"><span class="text-primary"> To your Business</span>
									 At a Cost You
									Can smile About</h1>
								<p  data-wow-duration="1.4s" data-wow-delay="1.5s" class="wow fadeInUp m-b30">Transform your business with
									one of the world's most trusted
									wholesale Voice and DID providers.</p>
								<a  data-wow-duration="1.6s" data-wow-delay="2s" class="wow fadeInUp btn btn-primary" href="javascript:void(0);" > Get a $25 Credit!<i class="fa fa-angle-right m-l10"></i></a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="dz-media move-box wow fadeIn" data-wow-duration="1.6s" data-wow-delay="0.8s" >
								<img class="move-1" src="{{ asset('public/assets/images/main-slider/slider1/pic5.png') }}" alt=""/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section style="background-image: url(public/assets/images/background/bg1.png); background-size:100%;">
           
            <!-- Service -->
            <div class="content-inner-2">
                <div class="container">
                    <div class="section-head style-1 text-center">
                        <h6 class="sub-title">SERVICES</h6>
                        <h2 class="title">PROVIDE AWESOME SERVICE</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                                <div class="icon-bx-md radius bg-yellow shadow-yellow"> 
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-office"></i>
                                    </a> 
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">VOIP Outbound</h4>
                                    <p class="taj">IDT satisfies all your voice calling needs with industry-leading
										international A-Z Voice Termination.
										Let our experts handle your wholesale voice routing needs,
										so you can focus on growing your bottom line.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper style-1 box-hover active text-center m-b30">
                                <div class="icon-bx-md radius bg-red shadow-red"> 
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-website"></i>
                                    </a> 
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">VOIP Inbound</h4>
                                    <p class="taj">IDT satisfies all your voice calling needs with industry-leading
										international A-Z Voice Termination.
										Let our experts handle your wholesale voice routing needs,
										so you can focus on growing your bottom line. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper style-1 box-hover text-center m-b30">
                                <div class="icon-bx-md radius bg-green shadow-green"> 
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <i class="flaticon-pie-charts"></i>
                                    </a> 
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title">MS Bound Services</h4>
                                    <p class="taj">Play bigger with DIDs from IDT Express. Our DIDs (Direct Inward Dialing)give you a programmable virtual phone number that can help your customersestablish a local presence, lower costs, and become more efficient.	Get mobile, toll-free, and local numbers from over 70 countries (and growing).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->
        <section class="content-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dz-media">
                            <img src="{{ asset('public/assets/images/about/img4.png') }}" class="move-1" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="section-head style-1 mb-4">
                            <h6 class="sub-title">ABOUT US</h6>
                            <h2 class="title">13+ Years of Innovation and Quality</h2>
                        </div>
                        <p class="m-b20">Caprus Digital has established itself as the global leader of software solutions and integration services. We design, develop, integrate, and maintain efficient software systems that act as primary business applications for enterprises, and solves their most complex and vexing everyday problems with extreme ease and competence.</p>
                      
						<ul class="list-check primary m-b30">
							<li>Certified Company</li>
							<li>Experience</li>
						</ul>
                     
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter -->
        <section class="counter-wraper bg-white half-bg">
            <div class="container">
                <div class="row counter-inner">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-4 text-center m-b30">
                            <div class="icon-bx-sm radius bg-green m-b20"> 
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-smile"></i>
                                </a> 
                            </div>
                            <div class="icon-content">
                                <span class="title">Completed Projects</span>
                                <h2 class="counter-title m-b0 text-primary"><span class="counter">372</span></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-4 text-center m-b30">
                            <div class="icon-bx-sm radius bg-yellow m-b20"> 
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-line-graph"></i>
                                </a> 
                            </div>
                            <div class="icon-content">
                                <span class="title">Employees</span>
                                <h2 class="counter-title m-b0 text-primary"><span class="counter">284</span></h2>
								

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="icon-bx-wraper style-4 text-center m-b30">
                            <div class="icon-bx-sm radius bg-blue m-b20"> 
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-startup"></i>
                                </a> 
                            </div>
							

                            <div class="icon-content">
                                <span class="title">Clientele</span>
                                <h2 class="counter-title m-b0 text-primary"><span class="counter">32</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="icon-bx-wraper style-4 text-center m-b30">
                            <div class="icon-bx-sm radius bg-red m-b20"> 
                                <a href="javascript:void(0);" class="icon-cell">
                                    <i class="flaticon-confetti"></i>
                                </a> 
                            </div>
                            <div class="icon-content">
                                <span class="title">Countries</span>
                                <h2 class="counter-title m-b0 text-primary"><span class="counter">7</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- Fetures -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="section-head style-1">
							<h6 class="sub-title">OUR</h6>
							<h2 class="title">SERVICES</h2>
						</div>
						<div class="section-wraper-one">
							<div class="icon-bx-wraper style-2 left m-b30">
								<div class="icon-bx-md radius bg-white text-red"> 
									<a href="javascript:void(0);" class="icon-cell">
										<i class="flaticon-idea"></i>
									</a> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-title">Dedicated Account
										Management</h4>
									<p>At CaprusIT, we develop custom applications that cater to a wide range of dynamic business requirements. We Ensure that the applications we develop are robust, secure, and scalable at any point in time.</p>
								</div>
								

							</div>
							<div class="icon-bx-wraper style-2 left m-b30">
								<div class="icon-bx-md radius bg-white text-yellow"> 
									<a href="javascript:void(0);" class="icon-cell">
										<i class="flaticon-line-graph"></i>
									</a> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-title">Multiple Quality
										Levels</h4>
									<p>Public and private sector organizations encounter decelerating challenges in the pursuit of keeping all their applications arrayed with their business strategies. Skilled workforce is in short supply.</p>
								</div>
							</div>
							<div class="icon-bx-wraper style-2 left m-b30">
								<div class="icon-bx-md radius bg-white text-green"> 
									<a href="javascript:void(0);" class="icon-cell">
										<i class="flaticon-rocket"></i>
									</a> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-title">Power of
										Big Telecom</h4>
									<p>Consulting Services provides an experienced team of diverse professionals and practitioners to help you think through and plan your IT strategy.</p>
								</div>
							</div>
							<div class="icon-bx-wraper style-2 left m-b30">
								<div class="icon-bx-md radius bg-white text-yellow"> 
									<a href="javascript:void(0);" class="icon-cell">
										<i class="flaticon-line-graph"></i>
									</a> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-title">Self-Service
										Online Portal</h4>
									<p>Whether addressing a specific deliverable or consulting on a larger enterprise initiative, Caprus Digital offers a flexible and knowledgeable contingent workforce.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5 wow fadeInRight  " data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="dlab-media cf-r-img d-lg-block d-none">
							<img src="{{ asset('public/assets/images/about/pic1.png') }}" class="move-2" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Projects -->

		<!-- Pricing Table -->
		<section class="content-inner" style="background-image: url(public/assets/images/background/bg20.png); background-repeat: no-repeat; background-size: 100%; background-position:center;">
			<div class="container">
				<div class="section-head style-1 text-center">
					<h6 class="sub-title">PRICING</h6>
					<h2 class="title">CHOOSE PLAN</h2>
				</div>
				<div class="row pricingtable-wraper-1">
					<div class="col-lg-4 col-md-6">
						<div class="pricingtable-wrapper style-1 m-b30 m-md-b0">
							<div class="pricingtable-inner">
								<div class="pricingtable-title">
									<h3 class="title">VOIP Inbound</h3>
								</div>
								<div class="pricingtable-price"> 
									<h2 class="pricingtable-bx">$99<small>/Month</small></h2>
								</div>
								<p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
								<ul class="pricingtable-features">
										<li>DID Numbers(NMS)</li>
										<li>TFN</li>
										<li>Mobile</li>
										<li>Geo</li>
										<li>Terminations</li>
										<li>Soft Dialers</li>
								</ul>
								<div class="pricingtable-footer"> 
									<a href="javascript:void(0);" class="btn btn-primary rounded-md">Start Now <i class="fa fa-angle-right m-l10"></i></a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4  col-md-6">
						<div class="pricingtable-wrapper style-1 active center m-b30">
							<div class="pricingtable-inner">
								<div class="pricingtable-title">
									<h3 class="title">Void Outbound</h3>
								</div>
								<div class="pricingtable-price"> 
									<h2 class="pricingtable-bx">$199<small>/Month</small></h2>
								</div>
								<p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
								<ul class="pricingtable-features">
								        <li>AtoZ Countries </li>
										<li>CC</li>
										<li>CLI</li>
										<li>NCLI</li>
								</ul>
								<div class="pricingtable-footer"> 
									<a href="javascript:void(0);" class="btn btn-primary rounded-md">Start Now <i class="fa fa-angle-right m-l10"></i></a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4  col-md-12">
						<div class="pricingtable-wrapper style-1 m-b30 ">
							<div class="pricingtable-inner">
								<div class="pricingtable-title">
									<h3 class="title">VOIP Inbound</h3>
								</div>
								<div class="pricingtable-price"> 
									<h2 class="pricingtable-bx">$149<small>/Month</small></h2>
								</div>
								<p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
								<ul class="pricingtable-features">
								        <li>DID Numbers(NMS)</li>
										<li>TFN</li>
										<li>Mobile</li>
										<li>Geo</li>
										<li>Terminations</li>
										<li>Soft Dialers</li>
								</ul>
								<div class="pricingtable-footer"> 
									<a href="javascript:void(0);" class="btn btn-primary rounded-md">Start Now <i class="fa fa-angle-right m-l10"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonials -->
		<section class="content-inner bgl-primary">
			<div class="container">
				<div class="row testimonials-wraper-1 align-items-center">
					<div class="col-lg-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="section-head style-1">
							<h6 class="sub-title">TESTMONIAL</h6>
							<h2 class="title m-b10">WHAT OUR CLIENTS SAY’S</h2>
							<p>Nunc vel ligula ut erat scelerisque vehicula sit amet porttitor magna. Donec malesuada quis diam quis pellentesque.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="testimonials-carousel1 owl-carousel owl-theme owl-btn-2 owl-btn-white owl-btn-shadow owl-btn-center">
							<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="testimonial-1">
									<div class="testimonial-text">
										<p>Cras porttitor orci vel ex convallis congue. Aliquam et pharetra urna. Quisque auctor purus in nunc posuere, vitae condimentum odio mattis. Nulla hendrerit tellus tellus, sed pharetra dui vulputate sed.</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="{{ asset('public/assets/images/testimonials/pic3.jpg') }}" alt="">
										</div>
										<div class="clearfix">
											<strong class="testimonial-name">Eity Akhter</strong> 
											<span class="testimonial-position">CEO & Founder </span>
										</div>
									</div>
								</div>
							</div>
							<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="testimonial-1">
									<div class="testimonial-text">
										<p>Cras porttitor orci vel ex convallis congue. Aliquam et pharetra urna. Quisque auctor purus in nunc posuere, vitae condimentum odio mattis. Nulla hendrerit tellus tellus, sed pharetra dui vulputate sed.</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="{{ asset('public/assets/images/testimonials/pic3.jpg') }}" alt="">
										</div>
										<div class="clearfix">
											<strong class="testimonial-name">Lora Price</strong> 
											<span class="testimonial-position">CEO & Founder </span>
										</div>
									</div>
								</div>
							</div>
							<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
								<div class="testimonial-1">
									<div class="testimonial-text">
										<p>Cras porttitor orci vel ex convallis congue. Aliquam et pharetra urna. Quisque auctor purus in nunc posuere, vitae condimentum odio mattis. Nulla hendrerit tellus tellus, sed pharetra dui vulputate sed.</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="{{ asset('public/assets/images/testimonials/pic3.jpg') }}" alt="">
										</div>
										<div class="clearfix">
											<strong class="testimonial-name">Cak Dikin</strong> 
											<span class="testimonial-position">CEO & Founder </span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog -->
		<section class="content-inner-2 mb-5" style="background-image: url(public/assets/images/background/bg1.png); background-size:100%; background-position:center; background-repeat:no-repeat;">
			<div class="container">
				<div class="section-head style-1 text-center">
					<h6 class="sub-title">BLOG</h6>
					<h2 class="title">LATEST BLOG & NEWS</h2>
				</div>
				<div class="blog-carousel1 owl-carousel owl-theme owl-btn-1 owl-btn-center-lr owl-dots-none owl-btn-primary">
					<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="dlab-blog style-1 bg-white">
							<div class="dlab-media">
								<a href="javascript:void(0);"><img src="{{ asset('public/assets/img/call-centers.jpg') }}" alt=""></a>
							</div>
							<div class="dlab-info">
								<h5 class="dlab-title">
									<a href="javascript:void(0);">How Contact Centers Can Find The Right Voice Carrier</a>
								</h5>
								<p class="m-b0 taj showone">Contact centers are often the backbone of</p>
								<div class="dlab-meta meta-bottom">
									<ul>
										<li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2021</li>
										<li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="dlab-blog style-1 bg-white">
							<div class="dlab-media">
								<a href="javascript:void(0);"><img src="{{ asset('public/assets/img/techy-photo.jpg') }}" alt=""></a>
							</div>
							<div class="dlab-info">
								<h5 class="dlab-title">
									<a href="javascript:void(0);">What is STIR/SHAKEN? All You Need to Know</a>
								</h5>
								<p class="m-b0 taj showone">Understand STIR-SHAKEN and know about the obligations</p>
								<div class="dlab-meta meta-bottom">
									<ul>
										<li class="post-date"><i class="flaticon-clock m-r10"></i>12 Oct, 2021</li>
										<li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="dlab-blog style-1 bg-white">
							<div class="dlab-media">
								<a href="javascript:void(0);"><img src="{{ asset('public/assets/img/Voip-Predictions-min.jpg') }}" alt=""></a>
							</div>
							<div class="dlab-info">
								<h5 class="dlab-title">
									<a href="javascript:void(0);">Common Mistakes When Setting Up Your Own PBX</a>
								</h5>
								<p class="m-b0 taj showone">A PBX, or Private Branch Exchange, system</p>
								<div class="dlab-meta meta-bottom">
									<ul>
										<li class="post-date"><i class="flaticon-clock m-r10"></i>7 Oct, 2021</li>
										<li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i><span>15</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Get A Quote -->
		
	
	</div>
@endsection