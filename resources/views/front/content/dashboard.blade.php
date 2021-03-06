@extends('front.partials.layout')

@section('title')
Beranda
@endsection

@section('custom_css')
@endsection

@section('custom_js')
@endsection

@section('content')
<div class="top-baner swiper-animate arrows">
			<div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
				<div class="swiper-wrapper">
					<div class="swiper-slide active" data-val="0"> 
					  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/main_slide_1.jpg)">
						 </div>
					  </div>
						<div class="vertical-align">
						  <div class="container">
							<div class="row">
							  <div class="col-md-12">
								<div class="main-title vert-title">
								  <div class="top-weather-info delay-1">
									<p>London</p>
									  <img src="img/weather_icon.png" alt="">
										<span>+30&deg;C</span>
								  </div>
								  <h1 class="color-white delay-1">amazing santorini<br> 7 days tour</h1>
									<p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
									<a href="#" class="c-button bg-aqua hv-transparent delay-2"><img src="img/loc_icon.png" alt=""><span>view our tours</span></a>
								 </div>
							   </div>
							  </div>
							</div>
						 </div>
					</div>
					<div class="swiper-slide" data-val="1"> 
					  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/main_slide_1.jpg)">
						 </div>
					  </div>
						<div class="vertical-align">
						  <div class="container">
							<div class="row">
							  <div class="col-md-12">
								<div class="main-title vert-title">
								  <div class="top-weather-info delay-1">
									<p>London</p>
									  <img src="img/weather_icon.png" alt="">
										<span>+30&deg;C</span>
								  </div>
								  <h1 class="color-white delay-1">amazing santorini<br> 7 days tour</h1>
									<p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
									<a href="#" class="c-button bg-aqua delay-2"><img src="img/loc_icon.png" alt=""><span>view our tours</span></a>
								 </div>
							   </div>
							  </div>
							</div>
						 </div>
					</div>
				</div>    
				  <div class="pagination pagination-hidden poin-style-1"></div>
			</div>
				  <div class="arrow-wrapp m-200">
					<div class="cont-1170">
						<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
						<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
					</div>
				  </div>
                 
                  <div class="baner-tabs">
                   <div class="text-center">
                     <div class="drop-tabs">
                       <b>hotels</b>	
                        <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
						 <ul class="nav-tabs tpl-tabs tabs-style-1">
							<li class="active click-tabs"><a href="#one" data-toggle="tab" aria-expanded="false">hotels</a></li>
							<li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false">flights</a></li>
							<li class="click-tabs"><a href="#three" data-toggle="tab" aria-expanded="false">cars</a></li>
							<li class="click-tabs"><a href="#four" data-toggle="tab" aria-expanded="false">CRUISES</a></li>
							<li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">activities</a></li>
						 </ul>
                     </div>
	               </div>
		             <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
						<div class="tab-pane active in" id="one">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or hotel name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>

                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="two">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or flight name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="three">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or car name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="four">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or cruise name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
						<div class="tab-pane" id="five">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                           		      <div class="tabs-block">
                            		    <h5>Your Destinationss</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/loc_icon_small.png" alt="">
                            		      	   <input type="text" placeholder="Enter a destination or activities name">
                            		      </div>
                            		  </div>   
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check In</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div> 
                            		</div>
                            		<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            		  <div class="tabs-block">
                            		    <h5>Check Out</h5>
                            		      <div class="input-style">
                            		      	 <img src="img/calendar_icon.png" alt="">
                            		      	   <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                            		      </div>
                            		  </div>	
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Kids</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 kids</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 kids</a>
															<a href="#">02 kids</a>
															<a href="#">03 kids</a>
															<a href="#">04 kids</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Adults</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 adult</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 adult</a>
															<a href="#">02 adult</a>
															<a href="#">03 adult</a>
															<a href="#">04 adult</a>
														</span>
											   </div>
											</div> 
                            		  </div>
                            		</div>
                            		<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                            		  <div class="tabs-block">
                            		    <h5>Rooms</h5>
                            		       <div class="drop-wrap">
											  <div class="drop">
												 <b>01 room</b>
													<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
														<span>
															<a href="#">01 room</a>
															<a href="#">02 room</a>
															<a href="#">03 room</a>
															<a href="#">04 room</a>
														</span>
											   </div>
											</div>
                            		  </div>
                            		</div>
                            		<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            		  <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>search now</span></a>
                            		</div>
                            	</div>
                            </div>
						</div>
					</div>
			    </div>				  	
	</div>

		<div class="main-wraper">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="second-title">
    					<h2>Beautiful Trips</h2>
    					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla</p>
    				</div>
    			</div>
    		</div>
    		<div class="row col-no-padd">
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_1.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_2.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_3.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_4.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_5.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_6.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_7.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_8.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6 col-xs-12">
    				<div class="photo-block hover-aqua">
    				  <div class="tour-layer delay-1"></div>
    					<img src="img/home_1/photo_9.jpg" alt="">
    					   <div class="vertical-align">
   					   	     <div class="photo-title">
   					   	       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
    					   	    <a class="hover-it" href="#"><h3>promotional trip</h3></a>
    					   	     <h5 class="delay-1">Orlando, Air/3 Nights</h5>
    					   	 </div>
    					   </div>
    				</div>
    			</div>
    		</div>
		</div>
    </div>
       
    <div class="main-wraper padd-90">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="second-title">
    					<h2>The Best Sea Tours</h2>
    					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block hover-aqua">
    				  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/sea_tour_img_1.jpg)">
						 </div>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it">mauritius</h3>
					  	 	  <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  </div>
					  	 	<h4>from <b>$860</b></h4>  
					  	 </div>
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="img/people_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
					  	 	</div>
					  	 	<div class="tour-info">
					  	 		<img src="img/calendar_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button b-50 bg-aqua hv-transparent fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block">
    				  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/sea_tour_img_2.jpg)">
						 </div>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it">santorini</h3>
					  	 	  <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  </div>
					  	 	<h4>from <b>$750</b></h4>  
					  	 </div>
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="img/people_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
					  	 	</div>
					  	 	<div class="tour-info">
					  	 		<img src="img/calendar_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block">
    				  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/sea_tour_img_3.jpg)">
						 </div>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it">paros</h3>
					  	 	  <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  </div>
					  	 	<h4>from <b>$600</b></h4>  
					  	 </div>
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="img/people_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
					  	 	</div>
					  	 	<div class="tour-info">
					  	 		<img src="img/calendar_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block">
    				  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/sea_tour_img_4.jpg)">
						 </div>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it">kythira</h3>
					  	 	  <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  </div>
					  	 	<h4>from <b>$1050</b></h4>  
					  	 </div>
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="img/people_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
					  	 	</div>
					  	 	<div class="tour-info">
					  	 		<img src="img/calendar_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block">
    				  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/sea_tour_img_5.jpg)">
						 </div>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it">corfu</h3>
					  	 	  <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  </div>
					  	 	<h4>from <b>$500</b></h4>  
					  	 </div>
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="img/people_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
					  	 	</div>
					  	 	<div class="tour-info">
					  	 		<img src="img/calendar_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    				<div class="radius-mask tour-block">
    				  <div class="clip">
						 <div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/sea_tour_img_6.jpg)">
						 </div>
					  </div>
					  <div class="tour-layer delay-1"></div>
					  <div class="tour-caption">
					  	 <div class="vertical-align">
					  	 	<h3 class="hover-it">crete</h3>
					  	 	  <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  </div>
					  	 	<h4>from <b>$700</b></h4>  
					  	 </div>
					  	 <div class="vertical-bottom">
					  	   <div class="fl">
					  	 	<div class="tour-info">
					  	 		<img src="img/people_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
					  	 	</div>
					  	 	<div class="tour-info">
					  	 		<img src="img/calendar_icon.png" alt="">
					  	 		  <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
					  	 	</div>
					  	   </div>	
					  	 	<a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
					  	 </div>
					  </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> 
       
    <div class="main-wraper">
    	  <div class="clip">
			 <div class="bg bg-bg-chrome" style="background-image:url(img/home_1/tour_slider_bg.jpg)">
			 </div>
		  </div>
		  <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="tour-slide">
			 <div class="swiper-wrapper">
				<div class="swiper-slide">
			      <div class="container">
			      	 <div class="row">
			      	 	<div class="col-md-12">
		      	 	      <div class="slider-tour padd-90-90">
			      	 	    <h3>from $960</h3>
			      	 	      <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  </div>
							  <h2>Maldives Vacation Packages</h2> 
							   <h5>july <b>19th</b> to july <b>26th</b></h5>
		      	          </div>	
			      	 	</div>
			      	 </div>
			      </div> 
				</div>
				<div class="swiper-slide">
			      <div class="container">
			      	 <div class="row">
			      	 	<div class="col-md-12">
		      	 	      <div class="slider-tour padd-94-94">
			      	 	    <h3>from $960</h3>
			      	 	      <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  </div>
							  <h2>Maldives Vacation Packages</h2> 
							   <h5>july <b>19th</b> to july <b>26th</b></h5>
		      	          </div>	
			      	 	</div>
			      	 </div>
			      </div> 
				</div>
				<div class="swiper-slide">
			      <div class="container">
			      	 <div class="row">
			      	 	<div class="col-md-12">
		      	 	      <div class="slider-tour padd-94-94">
			      	 	    <h3>from $960</h3>
			      	 	      <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  </div>
							  <h2>Maldives Vacation Packages</h2> 
							   <h5>july <b>19th</b> to july <b>26th</b></h5>
		      	          </div>	
			      	 	</div>
			      	 </div>
			      </div> 
				</div>
				<div class="swiper-slide">
			      <div class="container">
			      	 <div class="row">
			      	 	<div class="col-md-12">
		      	 	      <div class="slider-tour padd-94-94">
			      	 	    <h3>from $960</h3>
			      	 	      <div class="rate">
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star color-yellow"></span>
					  	 	  	<span class="fa fa-star"></span>
					  	 	  </div>
							  <h2>Maldives Vacation Packages</h2> 
							   <h5>july <b>19th</b> to july <b>26th</b></h5>
		      	          </div>	
			      	 	</div>
			      	 </div>
			      </div> 
				</div>
			 </div>
			 <div class="pagination poin-style-1"></div>
		  </div>
    </div>
       
    <div class="main-wraper">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="second-title">
    					<h2>Special Offers</h2>
    					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    		  <div class="top-baner arrows">
				<div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
				  <div class="swiper-wrapper">
					<div class="swiper-slide" data-val="0">
					   <div class="offers-block radius-mask">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/offers_slide_1.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-top">
						   <div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						   </div>
							<h3>greece</h3>
						 </div>
						 <div class="vertical-bottom">
						   <ul class="offers-info">
						   	<li><b>35</b>tours</li>
						   	<li><b>24</b>cities</li>
						   	<li><b>90</b>hotels</li>
						   </ul>
							<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
						 </div>
					   </div> 
					</div>
					<div class="swiper-slide" data-val="1">
					   <div class="offers-block radius-mask">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/offers_slide_2.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-top">
						   <div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						   </div>
							<h3>france</h3>
						 </div>
						 <div class="vertical-bottom">
						   <ul class="offers-info">
						   	<li><b>58</b>tours</li>
						   	<li><b>49</b>cities</li>
						   	<li><b>70</b>hotels</li>
						   </ul>
							<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
						 </div>
					   </div> 
					</div>
					<div class="swiper-slide" data-val="2">
					   <div class="offers-block radius-mask">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(img/home_1/offers_slide_3.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-top">
						   <div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						   </div>
							<h3>spain</h3>
						 </div>
						 <div class="vertical-bottom">
						   <ul class="offers-info">
						   	<li><b>88</b>tours</li>
						   	<li><b>10</b>cities</li>
						   	<li><b>193</b>hotels</li>
						   </ul>
							<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
						 </div>
					   </div> 
					</div>
				  </div>
				  <div class="pagination  poin-style-1 pagination-hidden"></div>
				</div>
  		          <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
				  <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
   		      </div>
    		</div>
		</div>
    </div>
		<br><br>       
	</div>
@endsection