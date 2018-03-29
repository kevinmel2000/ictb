<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width"/>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>3rd International Conference on Tropical Biology</title>

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

	<script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-62428814-1', 'auto');
	    ga('send', 'pageview');

	</script>
	@yield('style')


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

									@guest
										<li>
										<a href="{{ route('register') }}">Registration</a>
											<ul>
												<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
			                            		<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
											</ul>
										</li>
			                        @else
			                            <li class="nav-item dropdown">
			                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
			                                    {{ Auth::user()->name }} <span class="caret"></span>
			                                </a>

			                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			                                    <a class="dropdown-item" href="{{ route('logout') }}"
			                                       onclick="event.preventDefault();
			                                                     document.getElementById('logout-form').submit();">
			                                        {{ __('Logout') }}
			                                    </a>

			                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                        @csrf
			                                    </form>
			                                </div>
			                            </li>
			                        @endguest

									



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


					@yield('content')

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

						</div> 

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

@yield('script')

</body>
</html>

