<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
@include('includes.head')

<body id="body">
    <style>



        /* Button used to open the chat form - fixed at the bottom of the page */
        .open-button {
          background-color: #555;
          color: white;
          padding: 16px 20px;
          border: none;
          outline: none;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 23px;
          right: 28px;
          width: 350px;
          display: block;
        }
        
        /* The popup chat - hidden by default */
        .chat-popup {
          display: none;
          position: fixed;
          bottom: 23px;
          right: 28px;
          
          z-index: 19;
        }
        
        /* Add styles to the form container */
        .form-container {
          max-width: 350px;
          
          background-color: white;
        }
        
        /* Set a style for the submit/send button */
        .form-container .btn {
          background-color: #4CAF50;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 388px;
          margin-bottom:10px;
          opacity: 0.8;
        }
        
        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
         
        }
        
        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
        </style>
        <button class="open-button" onclick="openForm()">Chatt</button>

        <div class="chat-popup" id="myForm">
          <form class="form-container">
            <iframe
            allow="microphone;"
            width="350"
            height="430"
            src="https://console.dialogflow.com/api-client/demo/embedded/4ce60952-89ed-48fc-9d21-2631f56996f5">
        </iframe>
              <button type="button" class="btn cancel" onclick="closeForm()"  >Close</button>
          </form>
        </div>
        
        
        
        <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>
        
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







<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Startup Ecosystem</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="{{ URL::to('/') }}">Home</a></li>
				  <li class="active">Ecosystem</li>
				</ol>
			</div>
		</div>
	</div>
</section><br>
<div class="container"><center><h1> The Startup Igniter Ecosystem comprises of</h1></center></div>
<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<h2>Mentor Platform</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!</p>
            </div>
			<div class="col-md-6">
                <div class="portfolio-block">
                    <img class="img-responsive" src="{{ URL::to('images/company/company-image.jpg') }}" alt="">
                    <div class="caption">
                        <div class="row">
                        <div class="col-md-6">
                            <a class="search-icon" href="#" data-lightbox="image-1">
                                <i class="tf-ion-ios-search-strong"></i>
                            </a>
                            <h4><a href="">Search Mentees</a></h4>
                        </div>
                        <div class="col-md-6">
                            <a class="search-icon" href="#" data-lightbox="image-1">
                                <i class="tf-ion-ios-search-strong"></i>
                            </a>
                            <h4><a href="">Search Mentors</a></h4>
                        </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Our Incubators</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                <div class="portfolio-block">
                    <img class="img-responsive mt-30" src="{{ URL::to('images/company/company-image-2.jpg') }}" alt="">
                    <div class="caption">
                        <a class="search-icon" href="#" data-lightbox="image-1">
                            <i class="tf-ion-ios-search-strong"></i>
                        </a>
                        <h4><a href="">Search</a></h4>
                    </div>
                </div>
			</div>
			<div class="col-md-4">
				<h3>Our Accelerators</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<div class="portfolio-block">
                    <img src="{{ URL::to('images/company/company-image-3.jpg') }}" alt="" class="img-responsive mt-30">
                    <div class="caption">
                        <a class="search-icon" href="#" data-lightbox="image-1">
                            <i class="tf-ion-ios-search-strong"></i>
                        </a>
                        <h4><a href="">Search</a></h4>
                    </div>
                </div>
			</div>
            <div class="col-md-4">
				<h3>Our Investors</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<div class="portfolio-block">
                    <img src="{{ URL::to('images/company/company-image-3.jpg') }}" alt="" class="img-responsive mt-30">
                    <div class="caption">
                        <a class="search-icon" href="#" data-lightbox="image-1">
                            <i class="tf-ion-ios-search-strong"></i>
                        </a>
                        <h4><a href="">Search</a></h4>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>




<section class="services" id="services">
    <div class="container">
        <div class="row">
            
            <!-- section title -->
            <div class="title text-center">
                <h2>Government Schemes</h2>
                <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
                <div class="border"></div>
            </div>
            <!-- /section title -->
            
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <i class="tf-ion-ios-copy-outline"></i>
                    </div>
                    <h3>Scheme 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                </div>
            </div>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block text-center">
                    <div class="service-icon text-center">
                        <i class="tf-ion-ios-alarm-outline"></i>
                    </div>
                    <h3>Scheme 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                </div>
            </div>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <i class="tf-ion-ios-book-outline"></i>
                    </div>
                    <h3>Scheme 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                </div>
            </div>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block  text-center">
                    <div class="service-icon text-center">
                        <i class="tf-ion-ios-briefcase-outline"></i>
                    </div>
                    <h3>Scheme 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                </div>
            </div>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <i class="tf-ion-ios-crop"></i>
                    </div>
                    <h3>Scheme 5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                </div>
            </div>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block text-center">
                    <div class="service-icon text-center">
                        <i class="tf-ion-ios-home-outline"></i>
                    </div>
                    <h3>Scheme 6</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                </div>
            </div>
            <!-- End Single Service Item -->
                
        </div> 		<!-- End row -->
    </div>   	<!-- End container -->
</section>



<!-- Start Latest Section -->
<section class="blog" id="blog">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="title text-center ">
                <h2> Latest <span class="color"> Happenings</span></h2>
                <div class="border"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
            </div>
            <!-- /section title -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ URL::to('images/blog/post-1.jpg') }}" alt="amazing caves coverimage" class="img-responsive">
                    </div>
                    
                    <div class="content">
                        <h3><a href="single-post.html">News</a></h3>
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
                        <img src="{{ URL::to('images/blog/post-2.jpg') }}" alt="amazing caves coverimage" class="img-responsive">
                    </div>
                    
                    <div class="content">
                        <h3><a href="single-post.html">Blogs</a></h3>
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
                        <img src="{{ URL::to('images/blog/post-3.jpg') }}" alt="amazing caves coverimage" class="img-responsive">
                    </div>
                    
                    <div class="content">
                        <h3><a href="single-post.html">Events</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="single-post.html">Read more</a>
                    </div>
                </div>						
            </article>
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->


<!--  Google Map -->

<!--====  End of Google Map  ====-->

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script  src="{{ URL::to('plugins/google-map/gmap.js') }}"></script>

@include('includes.footer')

  </body>
  </html>