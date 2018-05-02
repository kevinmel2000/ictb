<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
<link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon" />
<link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/style.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/dark.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/font-icons.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/animate.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}" type="text/css" />
	<!-- <link rel="stylesheet" href="{{ asset("css/calendar.css") }}" type="text/css" /> -->

	<link rel="stylesheet" href="{{ asset("css/responsive.css") }}" type="text/css" />

	@yield('style')
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>3rd International Conference on Tropical Biology</title>
</head>
<body class="stretched">

	<div id="wrapper" class="clearfix">

		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div id="logo">
						<a href="{{ url("/") }}" class="standard-logo d-none d-lg-block" data-dark-logo="images/logo-dark.png">
							<img src="images/logo.png" alt="3rd ICTB">
						</a>
						<a href="{{ url("/") }}" class="retina-logo" data-dark-logo="images/logo2.png">
							<img src="images/logo@2x.png" alt="3rd ICTB">
						</a>
					</div>

					<nav id="primary-menu">
											<ul class="nav-bar sf-menu">
						<li class="current">
							<a href="./">Home</a>
						</li>
						<li>
							<a href="#">Scientific Program</a>
							<ul>
								<li><a href="{{ route('about') }}">Introduction</a></li>
								<li><a href="{{ route('theme') }}">Sub Themes and Topics</a></li>
								<li><a href="{{ route('speaker') }}">Conference Speakers</a></li>						
								<li><a href="#">Participation Guidelines</a>
									<ul style="left:170px;">
										<li><a href="{{ route('guideline') }}">Registration</a>
										<li><a href="{{ route('guidelineauthor') }}">Author Guidelines</a>
									</ul>
								</li>
								<li><a href="{{ route('schedule') }}">Schedule & Program</a>
								<li><a href="{{ route('committee') }}">Committee</a></li>
							</ul>
						</li>

				

						<li>
							<a href="#">Conference Venue</a>
							<ul>
								<li><a href="{{ route('venue') }}">Venue</a></li>
								<li><a href="{{ route('accomodation') }}">Accommodation</a></li>
								<li><a href="{{ route('exhibition') }}">Exhibition & Sponsorship</a></li>
							</ul>
						</li>

									@guest
									<!--<li>
										<a href="{{ route('register') }}">Registration</a>
										<ul>
											<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
											<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
										</ul>

									</li>
									-->
									@else
									<li>
										<a  href="#">
											{{ Auth::user()->firstname }} <span class="caret"></span>
										</a>
										<ul>
											<li><a href="{{ route('home') }}">My Registration</a></li>
											<li><a  href="{{ route('logout') }}"
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a></li>
										</ul>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
								@endguest
								<li>
									<a href="#">Download</a>
									<ul>
										<!--<li><a target="_blank" href="ftp://ftp.biotrop.org/International_Conference_on_Tropical_Biology_2015/">Presentation Files</a></li>-->
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
		</header>

		@yield('content')
		<footer id="footer" class="dark">
			

			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half">
						Copyrights &copy; 2018 SEAMEO BIOTROP<br>
						
					</div>
					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
						<div class="clear"></div>
						<i class="icon-envelope2"></i> <a href="">bio-ictb@biotrop.org</a> <span class="middot">&middot;</span>
						<i class="icon-headphones"></i> +62 251 8323848 <span class="middot">&middot;</span> 
						<i class="icon-globe"></i> <a href="https://www.biotrop.org" target="_blank">www.biotrop.org</a>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div id="gotoTop" class="icon-angle-up"></div>

	<script src="{{ asset("js/jquery.js") }}"></script>
	<script src="{{ asset("js/plugins.js") }}"></script>

	<script src="{{ asset("js/functions.js") }}"></script>
	@yield('script')
</body>
</html>