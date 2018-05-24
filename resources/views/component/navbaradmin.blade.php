	
											<ul class="nav-bar sf-menu">
						<li class="current">
							<a href="./">Home</a>
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
											<li><a href="{{ route('listauthor')}}">List author</a></li>

											<li><a href="{{ route('listpeserta')}}">List peserta</a></li>
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

		