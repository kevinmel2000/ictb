<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width"/>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'International Seminar on Current Development on Mine reclamation and Mine Water Management') }}</title>

	<link rel="shortcut icon" href="{{ asset('images/biofavicon.gif') }}" />
	<link rel="image_src" href="{{ asset('images/biofavicon.gif') }}" />
	<meta name="keywords" content="third seameo biotrop international conference on tropical biology, biotrop third international conference, tropical biology, konferensi internasional biotrop"/>
	<meta name="description" content="Official Website Third SEAMEO BIOTROP International Conference on Tropical Biology">
	<!-- CSS Files-->
	<link rel="shortcut icon" href="{{ asset('images/biofavicon.gif') }}" />
	<link rel="image_src" href="{{ asset('images/biofavicon.gif') }}" />
	<link rel="stylesheet" href="{{ asset('js/bootstrap/css/bootstrap-theme.min.css') }}">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/homepage.css') }}"><!-- homepage stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/skins/teal.css') }}"><!-- skin color -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<link href='{{ asset('calendar/fullcalendar.css') }}' rel='stylesheet' />
	<link href='{{ asset('calendar/lib/cupertino/jquery-ui.min.css') }}' rel='stylesheet' />

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.1/jquery.qtip.min.css">

	<style>
	#script-warning {
		display: none;
		background: #eee;
		border-bottom: 1px solid #ddd;
		padding: 0 10px;
		line-height: 40px;
		text-align: center;
		font-weight: bold;
		font-size: 12px;
		color: red;
	}

	#loading {
		display: none;
		position: absolute;
		top: 10px;
		right: 10px;
	}

	#calendar {
		font-size: 10px;
		max-width: 100%;
		margin: 0px auto;
		padding: 0 10px;
		height:100%;
	}
</style>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-62428814-1', 'auto');
	ga('send', 'pageview');

</script>


<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->    
</head>

<body>


	{{-- HEADER
		================================================== --}}
		{{-- Share to Facebook --}}
		<div id="fb-root"></div>
		<div class="fb-share-button" data-href="http://ictb.biotrop.org" data-layout="button_count"></div>

		{{-- top header menu --}}
		<div class="row">	
			<div class="three columns">
				<div class="logo">
					<a href="./"><img src="{{ asset('images/seameo_anniv.png') }}"/></a>
				</div>
			</div>
			<div class="nine columns noleftmarg">		
				<nav id="nav-wrap">
					<ul class="nav-bar sf-menu">
						<li class="current">
							<a href="./">Home</a>
						</li>
						<li>
							<a href="#">Scientific Program</a>
							<ul>
								<li><a href="index.php?mode=about">Introduction</a></li>
								<li><a href="index.php?mode=topic">Sub Themes and Topics</a></li>
								<li><a href="index.php?mode=speaker">Conference Speakers</a></li>						
								<li><a href="#">Participation Guidelines</a>
									<ul style="left:170px;">
										<li><a href="index.php?mode=guideline">Registration</a>
											<li><a href="index.php?mode=guideforauthor">Author Guidelines</a>
											</ul>
										</li>
										<li><a href="index.php?mode=imdate">Schedule & Program</a>

										</ul>
									</li>

									<li>
										<a href="index.php?mode=exhibition">Exhibition & Sponsorship</a>
									</li>

									<li>
										<a href="#">Conference Venue</a>
										<ul>
											<li><a href="index.php?mode=venue">Venue</a></li>
											<li><a href="index.php?mode=accommodation">Accommodation</a></li>
										</ul>
									</li>

									<li>
										<a href="#">Registration</a>
										<ul>
											<li><a href="index.php?mode=olreg">New Registration</a></li>

										</ul>
									</li>



									<li>
										<a href="#">Download</a>
										<ul>
											<li><a target="_blank" href="ftp://ftp.biotrop.org/International_Conference_on_Tropical_Biology_2015/">Presentation Files</a></li>
											<li>
												<a target="_blank" href="{{ asset('images/2nd ICTB_InfoKit.pdf') }}">Arrival info pack</a>
											</li>
											<li>
												<a target="_blank" href="{{ asset('images/infopack_2nd_ictb_2015.pdf') }}">Information kit</a>
											</li>

										</ul>
									</li>				

								</ul>
							</nav>
						</div>	

					</div>


					<div class="clear">
					</div>


					{{-- SLIDER ================================================== --}}
					<div id="ei-slider" class="ei-slider">
						<ul class="ei-slider-large">

							<li>
								<img src="{{ asset('images/slideshow/large/pic1.jpg') }}" alt="image01" class="responsiveslide">
								<div class="ei-title">

									<h2>
										<font color="black">
											Thank you for your participation<br/>
											See you again at the next ICTB!!
										</font>
									</h2>

									<h3>
										<span style="font-size:0.8em;">Contact Information:<br>
											Secretariat<br></span>
											<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
											Tel: +62-251-8323848, Fax: +62-251-8326851</span>
										</h3>
									</div>

								</li>
								<li>
									<img src="{{ asset('images/slideshow/large/pic2.jpg') }}" alt="image02" class="responsiveslide">
									<div class="ei-title">
										<h2>
											<font color="black">
												Thank you for your participation<br/>
												See you again at the next ICTB!!
											</font>
										</h2>

										<h3>
											<span style="font-size:0.8em;">Contact Information:<br>
												Secretariat<br></span>
												<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
												Tel: +62-251-8323848, Fax: +62-251-8326851</span>
											</h3>
										</div>

									</li>

									<li>
										<img src="{{ asset('images/slideshow/large/pic3.jpg') }}" alt="image03" class="responsiveslide">
										<div class="ei-title">
											<h2>
												<font color="black">
													Thank you for your participation<br/>
													See you again at the next ICTB!!
												</font>
											</h2>

											<h3>
												<span style="font-size:0.8em;">Contact Information:<br>
													Secretariat<br></span>
													<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
													Tel: +62-251-8323848, Fax: +62-251-8326851</span>
												</h3>
											</div>
										</li>

										<li>
											<img src="{{ asset('images/slideshow/large/pic4.jpg') }}" alt="image04" class="responsiveslide">
											<div class="ei-title">
												<h2>
													<font color="black">
														Thank you for your participation<br/>
														See you again at the next ICTB!!
													</font>
												</h2>

												<h3>
													<span style="font-size:0.8em;">Contact Information:<br>
														Secretariat<br></span>
														<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
														Tel: +62-251-8323848, Fax: +62-251-8326851</span>
													</h3>
												</div>

											</li>
											<li>
												<img src="{{ asset('images/slideshow/large/pic5.jpg') }}" alt="image05" class="responsiveslide">
												<div class="ei-title">
													<h2>
														<font color="black">
															Thank you for your participation<br/>
															See you again at the next ICTB!!
														</font>
													</h2>
													<h3>
														<span style="font-size:0.8em;">Contact Information:<br>
															Secretariat<br></span>
															<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
															Tel: +62-251-8323848, Fax: +62-251-8326851</span>
														</h3>
													</div>

												</li>
												<li>
													<img src="{{ asset('images/slideshow/large/pic6.jpg') }}" alt="image06" class="responsiveslide">
													<div class="ei-title">

														<h2>
															<font color="black">
																Thank you for your participation<br/>
																See you again at the next ICTB!!
															</font>
														</h2>
														<h3>
															<span style="font-size:0.8em;">Contact Information:<br>
																Secretariat<br></span>
																<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
																Tel: +62-251-8323848, Fax: +62-251-8326851</span>
															</h3>
														</div>
													</li>
													<li>
														<img src="{{ asset('images/slideshow/large/pic7.jpg') }}" alt="image07" class="responsiveslide">
														<div class="ei-title">

															<h2>
																<font color="black">
																	Thank you for your participation<br/>
																	See you again at the next ICTB!!
																</font>
															</h2>

															<h3>
																<span style="font-size:0.8em;">Contact Information:<br>
																	Secretariat<br></span>
																	<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
																	Tel: +62-251-8323848, Fax: +62-251-8326851</span>
																</h3>
															</div>
														</li>

														<li>
															<img src="{{ asset('images/slideshow/large/pic8.jpg') }}" alt="image08" class="responsiveslide">
															<div class="ei-title">

																<h2>
																	<font color="black">
																		Thank you for your participation<br/>
																		See you again at the next ICTB!!
																	</font>
																</h2>
																<h3>
																	<span style="font-size:0.8em;">Contact Information:<br>
																		Secretariat<br></span>
																		<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
																		Tel: +62-251-8323848, Fax: +62-251-8326851</span>
																	</h3>
																</div>
															</li>
															<li>
																<img src="{{ asset('images/slideshow/large/pic9.jpg') }}" alt="image09" class="responsiveslide">
																<div class="ei-title">
																	<h2>
																		<font color="black">
																			Thank you for your participation<br/>
																			See you again at the next ICTB!!
																		</font>
																	</h2>
																	<h3>
																		<span style="font-size:0.8em;">Contact Information:<br>
																			Secretariat<br></span>
																			<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
																			Tel: +62-251-8323848, Fax: +62-251-8326851</span>
																		</h3>
																	</div>
																</li>

																<li>
																	<img src="{{ asset('images/slideshow/large/pic10.jpg') }}" alt="image10" class="responsiveslide">
																	<div class="ei-title">
																		<h2>
																			<font color="black">
																				Thank you for your participation<br/>
																				See you again at the next ICTB!!
																			</font>
																		</h2>
																		<h3>
																			<span style="font-size:0.8em;">Contact Information:<br>
																				Secretariat<br></span>
																				<span style="font-size:0.7em;">E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
																				Tel: +62-251-8323848, Fax: +62-251-8326851</span>
																			</h3>
																		</div>
																	</li>

																</ul>
																<!-- slider-thumbs -->
																<ul class="ei-slider-thumbs">
																	<li class="ei-slider-element">Current</li>

																	<li><a href="#">Slide 1</a><img src="{{ asset('images/slideshow/thumbs/pic1.jpg') }}" class="slideshowthumb" alt="thumb01"/>
																	</li>
																	<li><a href="#">Slide 2</a><img src="{{ asset('images/slideshow/thumbs/pic2.jpg') }}" class="slideshowthumb" alt="thumb02"/></li>

																	<li><a href="#">Slide 3</a><img src="{{ asset('images/slideshow/thumbs/pic3.jpg') }}" class="slideshowthumb" alt="thumb03"/></li>

																	<li><a href="#">Slide 4</a><img src="{{ asset('images/slideshow/thumbs/pic4.jpg') }}" class="slideshowthumb" alt="thumb04"/></li>
																	<li><a href="#">Slide 5</a><img src="{{ asset('images/slideshow/thumbs/pic5.jpg') }}" class="slideshowthumb" alt="thumb05"/></li>
																	<li><a href="#">Slide 6</a><img src="{{ asset('images/slideshow/thumbs/pic6.jpg') }}" class="slideshowthumb" alt="thumb06"/></li>
																	<li><a href="#">Slide 7</a><img src="{{ asset('images/slideshow/thumbs/pic7.jpg') }}" class="slideshowthumb" alt="thumb07"/></li>

																	<li><a href="#">Slide 8</a><img src="{{ asset('images/slideshow/thumbs/pic8.jpg') }}" class="slideshowthumb" alt="thumb08"/></li>		
																	<li><a href="#">Slide 9</a><img src="{{ asset('images/slideshow/thumbs/pic9.jpg') }}" class="slideshowthumb" alt="thumb09"/></li>

																	<li><a href="#">Slide 10</a><img src="{{ asset('images/slideshow/thumbs/pic10.jp') }}g" class="slideshowthumb" alt="thumb10"/></li>

																</ul>	
															</div>
															<div class="minipause">
															</div>
															{{-- SUBHEADER		================================================== --}}
															<div id="subheader">
																<div class="row">
																	<div class="twelve columns">
																		<p class="text-center">
																			<span style="font-size:1.3em; color:#FF0">2<sup>nd</sup> International Conference on Tropical Biology</span><br>
																			Theme: "Ecological Restoration in Southeast Asia: Challenges, Gains, and Future 
																			Directions"

																			<div style=" text-align:center; color:#FF0; font-weight:bold">October 12-13, 2015</div>
																			<div style=" text-align:center; color:#FF0; font-weight:bold">SEAMEO BIOTROP Convention Hall, Jl. Raya Tajur Km. 6, Bogor, Indonesia</div>
																		</p>
																	</div>
																</div>
															</div>

<!-- CONTENT 
	================================================== -->
	<!-- SHORT INFO -->
	<div class="background_content">

		<div class="row">
			<div class="four columns">
				<div class="teamwrap teambox" style="height:auto;">
					<img src="{{ asset('images/intro/pic_sprogram.png') }}" alt="" class="responsiveintro" style="width:100%; height:auto; max-width:350px;">
					<div class="mask">
						<p>
							The Conference will provide a forum for scientists and practitioners to share useful lessons, address challenges, and generate commitments to strengthen policy decisions and work collaboratively towards ecological restoration for sustainable and integrated regional development in Southeast Asia along global biodiversity and other conservation goals.
						</p>
						<a href="index.php?mode=about" class="readmore">Learn more</a>
					</div>
				</div>
			</div>

			<div class="four columns">
				<div class="teamwrap teambox" style="height:auto;">
					<img src="{{ asset('images/intro/pic_desinfo.png') }}" alt="" class="responsiveintro" style="width:100%; height:auto; max-width:350px;">
					<div class="mask" >
						<p>
							<a href="http://bogortravelguide.com/" title="About Bogor" target="_blank"><strong>Bogor</strong></a> is a city located 42 km south of Jakarta, the capital of Indonesia. At the center of the city lies the Bogor Palace, one of 6 Presidential Palaces in Indonesia. The palace is famous for its collection of artworks such as paintings and statues from around the world.

						</p>
						<a href="http://bogortravelguide.com/" title="About Bogor" target="_blank" class="readmore">Learn more</a>
					</div>
				</div>
			</div>

			<div class="four columns">
				<div class="pos_calendar" style="height:auto;">
					<div id="tooltip"></div>
		
					<div id='calendar'></div>
					<div id='script-warning'>
						JSON data is not found.
					</div>
					<div id='loading'>loading...</div>

				</div>
			</div>

		</div>




<!-- ORGANIZER
	================================================== -->
	<div class="row">
		<div class="centersectiontitle">
			<h4>Organizer</h4>
		</div>
		<div class="twelve columns">
			<div class="centerFlex">
				<a href="http://biotrop.org" target="_blank"><img src="{{ asset('images/partner/logo50tagline.png') }}" alt="SEAMEO BIOTROP"/></a>
			</div>
		</div>
	</div>


<!-- PARTNER 
	================================================== -->
	<div class="row">
		<div class="centersectiontitle">
			<h4>Major Partner</h4>
		</div>
		<div class="twelve columns">
			<div class="centerFlex">
				<a href="http://www.fao.org/home/en/" target="_blank"><img src="{{ asset('images/partner/fao_logo.png') }}" alt="FAO"/></a>
			</div>
		</div>
	</div>

	<div class="hr"></div>
	<div class="row"> 
		<div class="centersectiontitle">
			<h4>Supporting Institutions</h4>
		</div>   

		<div class="carousel" data-mixed="">
					<a class="prev" data-prev=""></a>
					<ul>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/iufro.png') }}" /></figure></div>
						</li>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/biotropica.png') }}" /></figure></div>
						</li>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/icraf.png') }}" /></figure></div>
						</li>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/forru_cmu.png') }}" /></figure></div>
						</li>

						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/ipb.png') }}" /></figure></div>
						</li>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/bangor_univ.png') }}" /></figure></div>
						</li>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/british_council2.png') }}" /></figure></div>
						</li>
						<li>
							<div class="wrap"><figure><img data-src="{{ asset('images/partner/anu.jpg') }}"/></figure></div>
						</li>
					</ul>
					<a class="next" data-next=""></a>

				</div>


			</div>
<!-- Coverage
	================================================== -->
	<div class="row">
		<div class="centersectiontitle">
			<h4>Media Coverage</h4>
		</div>
		<div class="twelve columns">
			<div class="centerFlex">
				<iframe src="https://drive.google.com/file/d/0B30hg8Bh1QoGRDJwdUE4LWJPNkk/preview" height="320" width="540"></iframe><br/>
				Coverage by <a href="http://greentv.ipb.ac.id/videos/the-2nd-international-conference-on-tropical-biology/" target="_blank">Green TV</a>
			</div>
		</div>
	</div>

<!-- TESTIMONIALS 
	================================================== -->
	<div class="row">
		<div class="twelve columns">
			<div class="centersectiontitle">
			</div>
		</div>
		<div class="twelve columns">
			<h5>Quotes</h5>
			<div id="testimonials">
				<blockquote>
					<p>
						"Life is like riding a bicycle. To keep your balance, you must keep moving." <cite>&ndash;Albert Einstein</cite>
					</p>
				</blockquote>
				<blockquote>
					<p>
						"Nobody can go back and start a new beginning, but anyone can start today and make a new ending." <cite>&ndash;Maria Robinson</cite>
					</p>
				</blockquote>
				<blockquote>
					<p>
						"The greatest danger for most of us is not that our aim too high and we miss it, but that it is too low and we reach it." <cite>&ndash;Michelangelo</cite>
					</p>
				</blockquote>
				<blockquote>
					<p>
						"I am who I am today, because of the choices I made yesterday." <cite>&ndash;Eleanor Roosevelt</cite>
					</p>
				</blockquote>
				<blockquote>
					<p>
						"Put your heart, mind, and soul into even your smallest acts. This is the secret of success." <cite>&ndash;Swami Sivananda</cite>
					</p>
				</blockquote>
				<blockquote>
					<p>
						"Even if you are on the right track, you will get run over if you just sit there." <cite>&ndash;Will Rogers</cite>
					</p>
				</blockquote>
			</div>
			<!--end testimonials-->
		</div>
	</div>

<!-- TWITTER
	================================================== -->
	<div class="tweetarea">
		<div class="tweettext">
			<div class="row">
				<div class="twelve columns">
					<div class="tweet" style="width:100%; margin-bottom:10px;">
						<div id="tweet_biotrop1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

{{-- FOOOTER ================================================== --}}
<div id="footer">
	<footer class="row">
	<p class="back-top floatright">
		<a href="#top"><span></span></a>
	</p>

	<div class="twelve columns">

		<div class="social facebook">
			<a href="https://www.facebook.com/biotrop"></a>
		</div>
		<div class="social twitter">
			<a href="https://twitter.com/seameo_biotrop"></a>
		</div>
		<div class="social deviantart">
			<a href="#"></a>
		</div>
		<div class="social flickr">
			<a href="#"></a>
		</div>
		<div class="social dribbble">
			<a href="#"></a>
		</div>
	</div>


<div class="copyright">
	<div class="row">
		<div class="twelve columns">
			 &copy;<span class="small"> Copyright 2018 <a href="http://www.biotrop.org" title="SEAMEO BIOTROP" target="_blank">SEAMEO BIOTROP</a></span>
		</div>

	</div>
</div>



</div> {* end of white color *}

<!-- JAVASCRIPTS 
	================================================== -->
	<!-- Javascript files placed here for faster loading -->
<!--
<script src="http://code.jquery.com/jquery-1.11.2.js"></script>
-->
	<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('calendar/lib/jquery-ui.custom.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('js/foundation.min.js') }}"></script>  


	<script src="{{ asset('js/elasticslideshow.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/jquery.cycle.js') }}"></script>

	<script src="{{ asset('js/app.js') }}"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.2.0/js/vendor/modernizr.js"></script>
	<script src="{{ asset('js/slidepanel.js') }}"></script>
	<script src="{{ asset('js/scrolltotop.js') }}"></script>
	<script src="{{ asset('js/hoverIntent.js') }}"></script>
	<script src="{{ asset('js/superfish.js') }}"></script>
	<script src="{{ asset('js/responsivemenu.js') }}"></script>
	<script src="{{ asset('calendar/lib/moment.min.js') }}"></script>
	<script src="{{ asset('calendar/fullcalendar.min.js') }}"></script>

	<script src="http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js"></script>

	<script src="{{ asset('js/jquery.anoslide.js') }}"></script>


<script>$(document).ready(function(){$('#calendar').fullCalendar({theme:true,header:{left:'',center:'prev title next',right:''},defaultDate:'2018-03-27',editable:false,eventLimit:true,events:{url:'{{ asset('calendar/php/get-events.php') }}',error:function(){$('#script-warning').show();}},loading:function(bool){$('#loading').toggle(bool);},eventClick:function(event,element){$(this).css('border-color','red');event.url;},eventDragStart:function(event,element,ui){$(this).qtip("hide");$(this).qtip("disable");},eventDragEnd:function(event,element,ui){$(this).qtip("enable");},eventRender:function(event,element){var tipContent="<strong>"+event.title+"</strong><br/>";$(element).qtip({content:tipContent,position:{corner:{target:'leftMiddle',tooltip:'leftMiddle'}},border:{radius:4,width:3},style:{name:'green',tip:'leftMiddle'}});}});});</script>



						{{-- Looping logo partner --}}
						<script>
							$('.carousel[data-mixed] ul').anoSlide(
							{
								items: 7,
								speed: 1000,
								prev: 'a.prev[data-prev]',
								next: 'a.next[data-next]',
								lazy: true,
								delay: 100
							})
						</script>
					

						{{-- Share to Facebook --}}
						<script>
							window.fbAsyncInit = function() {
								FB.init({
									appId      : '1585210368400385',
									xfbml      : true,
									version    : 'v2.3'
								});
							};

							(function(d, s, id){
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) {return;}
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/en_US/sdk.js";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>


					</body>
					</html>

