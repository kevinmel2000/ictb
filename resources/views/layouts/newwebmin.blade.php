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
	<style>
		
.animsition-overlay,body:not(.no-transition) #wrapper{
    position:relative;
    opacity:100;
    -webkit-animation-fill-mode:both;
    animation-fill-mode:both
}
	</style>
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
				@include('component/navbar')
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


	@yield('script')
</body>
</html>