<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
@include('includes.head')

<body id="body">
	@include('includes.bot')
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
				<h2>Connect to this platform</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="/">Home</a></li>
				  <li class="active">Connect</li>
				</ol>
			</div>
		</div>
	</div>
</section>








<section class="service-2 section">
	<div class="container">
	  <div class="row">
  
		<!-- section title -->
		<div class="title text-center">
		  <h2>Connect And Reach</h2>
		  <p>A guide to traverse and get the best out of System for an Enthusiast.</p>
		  <div class="border"></div>
		</div>
		<!-- /section title -->
  
		<div class="col-md-4 text-center">
		  <img src="images/about/membe.jpg" class="inline-block" alt="">
		</div>
		<div class="col-md-8">
		  <div class="row text-center">
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="service-item">
				<img src="images/icon-home/mentoricon.png" style="width: 30%;height: 30%">
				<h4>Mentor Support</h4>
				<p>Get support from mentors to help you in ideation stage of your startup.</p>
			  </div>
			</div><!-- END COL -->
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="service-item">
				<img src="images/icon-home/incubatoricon.png" style="width: 24%;height: 24%">
				<h4>Incubator / Accelerator Support</h4>
				<p>Take a step ahead by registering for incubation programs.</p>
			  </div>
			</div><!-- END COL -->
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="service-item">
				<img src="images/icon-home/investoricon.png" style="width: 30%;height: 30%">
				<h4>Investor</h4>
				<p>Get the help for funding to nurture and nourish your startups.</p>
			  </div>
			</div><!-- END COL -->
			<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="service-item">
				<img src="images/icon-home/supporticon.png" style="width: 30%;height: 30%">
				<h4>Support Services</h4>
				<p>Acquire support from agency that provide various services for startup.</p>
			  </div>
			</div><!-- END COL -->
		  </div>
		</div>
	</div>    <!-- End row -->
</div>    <!-- End container -->
  </section>
@include('includes.footer')

  </body>
  </html>