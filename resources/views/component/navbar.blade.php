	
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
									<li>
										<a href="{{ route('register') }}">Abstract Submission</a>
										<ul>
											<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
											<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
										</ul>

									</li>
									
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
											{{ csrf_field() }}
										</form>
									</div>
								</li>
								@endguest
								{{--
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
								--}}
							</ul>

		