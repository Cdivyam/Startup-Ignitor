<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
@include('includes.head')

<body id="body">

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
				<h2>Schemes</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="/">Home</a></li>
				  <li class="active">Easy Pricing</li>
				</ol>
			</div>
		</div>
	</div>
</section>








	
	
    <section class="blog" id="blog">
      <div class="container">
        <div class="row">
  
          <!-- section title -->
          <div class="title text-center ">
            <h2> Awesome <span class="color">Schemes</span></h2>
            <div class="border"></div>
            <p>Good Schemes</p>
          </div>
          <!-- /section title -->
          <!-- single blog post -->
          <article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
            <div class="post-item">
              <div class="media-wrapper">
                <img src="bingoimages/audit.jpg" alt="audit" class="img-responsive" width="1000px">
              </div>
              
              <div class="content">
                <h3><a href="single-post.html">Financial Help & Auditing</a></h3>
                <p>For the beginners and new to world of entreprenuership,not only funding is important but also the paperwork.Thats where Startup Igniters comes to help with its Financial and Auditing paperwork aid by high professionals in those fields. </p>
                <a class="btn btn-main" href="single-post.html">Read more</a>
              </div>
            </div>						
          </article>
          <!-- /single blog post -->
          
          <!-- single blog post -->
          <article class="col-md-4 col-sm-6 col-xs-12 "  >
            <div class="post-item">
              <div class="portrait">
                <img src="bingoimages/legal_aid.png" alt="amazing caves coverimage" height="270px" width="360px"  >
              </div>
              
              <div class="content">
                <h3><a href="single-post.html">Legal Support</a></h3>
                <p>Legal aid is the provision of assistance to people otherwise unable to afford legal representation.<br>
                StartUp Igniter provides the legal support assistance for the rookies in the entreprenuership world. </p>
                <a class="btn btn-main" href="single-post.html">Read more</a>
              </div>
            </div>						
          </article>
          <!-- end single blog post -->
          
          <!-- single blog post -->
          <article class="col-md-4 col-sm-6 col-xs-12 "  >
            <div class="post-item">
              <div class="media-wrapper">
                <img src="bingoimages/marketing.png" alt="amazing caves coverimage"  height="300px" width="360px">
              </div>
              
              <div class="content">
                <h3><a href="single-post.html">Marketing</a></h3>
                <p>The Most Important point to take care of in launching your startup is Marketing.We provide a lot of schemes for the product marketing to enhance the publical knowledge about your project.<br>“Content is fire, social media is gasoline.” - Jay Baer</p>
                <a class="btn btn-main" href="single-post.html">Read more</a>
              </div>
            </div>						
          </article>
          <!-- end single blog post -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end section -->
  
          

</section>

@include('includes.footer')

  </body>
  </html>