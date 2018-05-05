<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width"/>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>3rd International Conference on Tropical Biology</title>

	<link rel="shortcut icon" href="{{ asset('old/images/biofavicon.gif') }}" />
	<link rel="image_src" href="{{ asset('old/images/biofavicon.gif') }}" />
	<meta name="keywords" content="third seameo biotrop international conference on tropical biology, biotrop third international conference, tropical biology, konferensi internasional biotrop"/>
	<meta name="description" content="Official Website Third SEAMEO BIOTROP International Conference on Tropical Biology">
	<!-- CSS Files-->
	<link rel="shortcut icon" href="{{ asset('old/images/biofavicon.gif') }}" />
	<link rel="image_src" href="{{ asset('old/images/biofavicon.gif') }}" />
	<link rel="stylesheet" href="{{ asset('old/js/bootstrap/css/bootstrap-theme.min.css') }}">

	<link rel="stylesheet" href="{{ asset('old/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('old/css/homepage.css') }}"><!-- homepage stylesheet -->
	<link rel="stylesheet" href="{{ asset('old/css/skins/teal.css') }}"><!-- skin color -->
	<link rel="stylesheet" href="{{ asset('old/css/responsive.css') }}">
	<link href='{{ asset('old/calendar/fullcalendar.css') }}' rel='stylesheet' />
	<link href='{{ asset('old/calendar/lib/cupertino/jquery-ui.min.css') }}' rel='stylesheet' />

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
					<a href="./"><img src="{{ asset('old/images/seameo_anniv.png') }}"/></a>
				</div>
			</div>
			<div class="nine columns noleftmarg">		
				<nav id="nav-wrap">
						@include('component/navbar')

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
					</footer>
				</div> 

<!-- JAVASCRIPTS 
	================================================== -->
	<!-- Javascript files placed here for faster loading -->
<!--
<script src="http://code.jquery.com/jquery-1.11.2.js"></script>
-->
<script src="{{ asset('old/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('old/calendar/lib/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('old/js/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('old/js/foundation.min.js') }}"></script>  
<script src="{{ asset('old/js/elasticslideshow.js') }}"></script>
<script src="{{ asset('old/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('old/js/jquery.cycle.js') }}"></script>
<script src="{{ asset('old/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.2.0/js/vendor/modernizr.js"></script>
<script src="{{ asset('old/js/slidepanel.js') }}"></script>
<script src="{{ asset('old/js/scrolltotop.js') }}"></script>
<script src="{{ asset('old/js/hoverIntent.js') }}"></script>
<script src="{{ asset('old/js/superfish.js') }}"></script>
<script src="{{ asset('old/js/responsivemenu.js') }}"></script>
<script src="{{ asset('old/calendar/lib/moment.min.js') }}"></script>
<script src="{{ asset('old/calendar/fullcalendar.min.js') }}"></script>
<script src="http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js"></script>
<script src="{{ asset('old/js/jquery.anoslide.js') }}"></script>
@yield('script')

</body>
</html>

