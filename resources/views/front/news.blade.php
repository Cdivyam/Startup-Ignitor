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


  
  <section class="team" id="team" style="padding-top: 100px ;background: white"  >
    <div class="container" >
        <div class="row">
        
            <!-- section title -->
            <div class="title text-center ">
                <h2>Trending News</h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->
            @if(isset($articles))
                <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-3 col-sm-6 ">
                    <div class="card">
                       <div class="team-member text-center"  >
                            <div class="member-photo">
                                <!-- member photo -->
                                <img class="img-responsive" src="{{$article['urlToImage']}}"  alt="Meghna" style="border-top-right-radius: 0px;border-top-left-radius:0px;height: 170px" >
                                <!-- /member photo -->
                                
                            </div>
                            
                            <!-- member name & designation -->
                            <div class="member-content">
                                <h3>
                                    <!-- <a href=#>{{$article['title']}}</a> -->
                                    <p class="ArticleBody">{{ substr(strip_tags($article['title']), 0, 40) }}
                                        {{ strlen(strip_tags($article['title'])) > 40 ? "..." : "" }} 
                                    </p>
                                </h3>
                                <span>{{$article['publishedAt']}}</span>
                                <!-- <p>{{$article['description']}}</p> -->
                                <p class="ArticleBody">{{ substr(strip_tags($article['description']), 0, 50) }}
                                    {{ strlen(strip_tags($article['description'])) > 50 ? "..." : "" }} 
                                </p>
                                <!-- <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a> -->
                                  <a data-scroll="" href="{{$article['url']}}" class="btn btn-main " style="padding: 0px; border-radius:20px"><p style="font-size: 10px; color: white">Read More</p></a>
                            </div>
                                <!-- /member name & designation -->
                            

                       </div>
                   </div>
                    </div>
                @endforeach
                </div>		
            @endif
<!-- 
commented -->
{{--
            <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Sebi looks to boost startup funding</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <!-- <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a> -->
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 0px; border-radius:20px"><p style="font-size: 10px; color: white">Read More</p></a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->

        <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Women Entrepreunship platform launched</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 0px; border-radius:20px"><p style="font-size: 10px; color: white">Read More</p></a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->
            <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Standup India Mission helps the suppressed.</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <!-- <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a> -->
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 0px; border-radius:20px"><p style="font-size: 10px; color: white">Read More</p></a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->
            <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Telecom industry needs investment.</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <!-- <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a> -->
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 0px; border-radius:20px"><p style="font-size: 10px; color: white">Read More</p></a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->
            <!-- /section title -->
            <div class="title text-left" style="padding: 20px; color: darkblue ">
                <h3> General News</h3>
            </div>
            <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Congress, BJP escalate big data war</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <!-- <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a> -->
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 0px; border-radius:20px"><p style="font-size: 10px; color: white">Read More</p></a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->

        <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Karnataka Poll dates Announced</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->
            <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Politics in Karnataka over water issues.</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->
            <!-- team member -->
            <div class="col-md-3 col-sm-6 ">
               <div class="team-member text-center" style="border-radius: 20px " >
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-responsive" src="images/icon-home/news.jpg"  alt="Meghna" style="border-top-right-radius: 20px;border-top-left-radius:20px" >
                        <!-- /member photo -->
                        
                    </div>
                    
                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3><a href=#>Telecom industry needs investment.</a></h3>
                        <span>25 Mar, 2018, 12.24PM IST</span>
                        <p>In this fast changing ecosystem, wherein angels are investing much higher amounts.</p>
                        <a data-scroll="" href="#" class="btn btn-main " style="padding: 10px">Read More</a>
                    </div>
                    <!-- /member name & designation -->
                    

               </div>
            </div>
            <!-- end team member -->
            --}}
        </div>  	<!-- End row -->
    </div>   	<!-- End container -->
</section>
<style type="text/css">
	
	div.card {
    width: 250px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
}

</style>

@include('includes.header')
<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>LIVE SESSIONS</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">Easy Pricing</li>
				</ol>
			</div>
		</div>
	</div>
</section>







	<!-- <section class="buy-pro" style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="pro-block text-center" style="padding: 20px 50px; background: white; box-shadow: 0px 2px 28px 0px #7777775e; border-radius: 5px;">
					<h2 style="font-size: 25px; line-height: 1;">You have downloaded free version of Bingo.</h2>
					<h4 style="padding: 10px 0 15px 0;">To get full access of this page please purchase the premium version</h4>
					<h4>Why Premium?</h4>
					<ul style="margin-bottom: 20px;">
						<li>Full Template Pack</li>
						<li>Priority Support</li>
						<li>Documentation Included</li>
						<li>Monthly Update</li>
						<li>Lifetime Download</li>
						<li>Personal and commercial Use</li>
						<li>One time payment</li>
					</ul>
					<a href="https://themefisher.com/products/bingo-bootstrap-business-template/" target="_blank" class="btn btn-main" style="margin-bottom: 20px;">Buy Premium Version</a>			
				</div>
			</div>
		</div>
	</div>
</section>

@include('includes.footer')

  </body>
  </html> -->