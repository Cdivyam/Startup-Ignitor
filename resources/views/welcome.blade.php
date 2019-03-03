{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentationnnnn</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
@include('includes.head')

<body id="body">
	@include('includes.bot')
    <style>
        /* body {
          font-family: Arial, Helvetica, sans-serif;
          font-size: 20px;
        }
        
        #myBtn {
          display: block;
          position: fixed;
          bottom: -13px;
          right: -15px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
          /* opacity: 0.2; */
        } */

        /* #myBtn : hover {
          opacity: 0.2;
        }
         */
        </style>
      {{-- <iframe id="myBtn"
      allow="microphone;"
      width="350"
      height="430"
      src="https://console.dialogflow.com/api-client/demo/embedded/4ce60952-89ed-48fc-9d21-2631f56996f5">
  </iframe> --}}
 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onload = function() {scrollFunction(),topFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "block";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
@include('includes.header')
<!--
End Fixed Navigation
==================================== -->




	 <!--
Welcome Slider
==================================== -->
<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Startup Igniter <br> Welcomes You!</h1>
					<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">We thrive to convert your dreams into reality through our services</p>
					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
						<li>
							<a data-scroll href="#menu" class="btn btn-main" class="menu__link scroll">Explore Us</a>		
						</li>
						<li>
							<a data-scroll href="/about-ecosystem" class="btn btn-main">Learn More</a>			
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-2 section" id="about">
    <div class="container">
      <div class="row">
      
        <!-- section title -->
        <div class="title text-center"  >
          <h2>We offer services for startups </h2>
          <p>This platform serves as a catalyst for any startup or individual mentee to ignite his work, getting help from Government Officers and in directing other different entities directly using communiction tools</p>
          <div class="border"></div>
        </div>
        <!-- /section title -->
  
        <div class="col-md-6">
          <img src="bingoimages/about/about-2.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-6">
          <ul class="checklist">
                      <a href="/"><li>Educating & introducing startups with resources and services provided by private organization.</li></a>
                      <li>Getting help from mentors to connect them with appropriate resources & giving them an overview using curated data information.</li>
                      <li>One click application for startups wanting them to connect with ecosystem stakeholders like Incubators,Accelerators & Investors.</li>
                      <li>This is a user-friendly & interactive application which provides interaction between mentee & different stakeholders.</li>
                      <li>Connecting mentors to relevent organization, with the help of an optimized filter alogorithm.</li>
                  </ul>
          <a href="/how-to" class="btn btn-main mt-20">Know More</a>
        </div>
      </div> 		<!-- End row -->
    </div>   	<!-- End container -->
  </section>   <!-- End section -->
  
@include('home_sections.menu')
<!-- <section class="counter-wrapper section-sm" style="background-color: #76cf4a; padding-top : 100px; padding-bottom: 100px;" id="choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title" style="padding : 0%; margin: 0px;">
                    <p style="color: white; font-size: 3em;">Professional Support </p>
                </div><br>
            </div>
            <!-- first count item -->
          
            <!-- end third count item -->

 
  
	@include('home_sections.enthusiast')
	@include('home_sections.mentor')
	@include('home_sections.incubator')
	@include('home_sections.accelerator')
	@include('home_sections.investor')
	@include('home_sections.service_provider')
<!--
Start About Section
==================================== -->
{{-- <section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2>What Offer services for </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, earum. </p>
        <div class="border"></div>
      </div>
      <!-- /section title -->

      <div class="col-md-4 text-center">
        <img src="bingoimages/about/member.jpg" class="inline-block" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Marketing Ideas</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section --> --}}



<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->
		
		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Award-Winning Agency</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <span class="counter" data-count="150">150</span>
							</div>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <span class="counter" data-count="130">130</span>
							</div>
							<h3>total mentorship provided</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">99</span>
							</div>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">250</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="bingoimages/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Amar </h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="bingoimages/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Mal </h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="bingoimages/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3> Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<!--
		Start Blog Section
		=========================================== -->
				
	{{-- <section class="blog" id="blog">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center ">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div>
				<!-- /section title -->
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="bingoimages/blog/post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- /single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="bingoimages/blog/post-2.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="bingoimages/blog/post-3.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->
   --}}
@include('includes.footer')


    <!-- end Footer Area
    ========================================== -->
    
    <!-- 
    Essential Scripts
    =====================================-->
    
  <!-- Main jQuery -->
    
 <script>
  
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {
 
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({
 
            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',
 
            /* basic navigation arrows and bullets */
            navigation: {
 
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
                  }
                  ,
                  bullets: {
                    enable:false,
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
            }
        });
    });
</script> 

</body>
</html>

