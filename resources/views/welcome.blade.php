@extends('layouts.newweb')

@section('style')
<link href='{{ asset("css/fullcalendar.min.css") }}' rel='stylesheet' />
<link href='{{ asset("css/fullcalendar.print.min.css") }}' rel='stylesheet' media='print' />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.1/jquery.qtip.min.css">
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2031713633813639');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2031713633813639&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@endsection

@section('content')
<section id="slider"  role="img" aria-label="Sambar Rusa, Photograph by Tontan Travel, www.tontantravel.com" class="slider-element slider-parallax full-screen dark" style="overflow: hidden; background: url('{{ asset("images/home4.jpg") }}') no-repeat center center;background-size: cover;">
	<div class="slider-parallax-inner">
		<div class="container clearfix vertical-middle" style="z-index: 3;">
			<div class="heading-block title-center nobottomborder not-dark" >
				{{-- big logo
				<div class="hidden-xs">
					<img src="{{ asset("images/logo-big.png") }}" class="img-responsive"/>
				</div>
				--}}
				<h1 style="color:#c02942; text-shadow: 1px 1px 1px rgba(255,255,255,.65);">3<sup>rd</sup> International Conference on<br/>Tropical Biology</h1>
				<h4 style="background-color: rgba(0,0,0,.2); color:#fff;">"Conservation, Enhancement and Sustainable Use of Indigenous Tropical Flora and Fauna"<br/>
				20 - 21 September 2018, Bogor, Indonesia</h4>
			</div>

			<div class="center topmargin-lg">
				<a href="{{ route('register') }}" class="button button-3d button-white button-light button-rounded button-xlarge">Register</a> 
			</div>
		</div>
	</div>
</section>

<div class="row nobottommargin common-height">
	<div class="col-lg-4 dark col-padding ohidden" style="background-color: rgb(26, 188, 156); height: 356.8px;">
		<div>
			<h3 class="uppercase" style="font-weight: 600;">Objectives</h3>
			<p style="line-height: 1.8;">The conference generally aims to assess successes, opportunities, and gaps in current practices, research efforts and policies associated with the conservation, enhancement and sustainable use of indigenous tropical flora and fauna. </p>
			<a href="{{ route('about') }}" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
			<i class="icon-bulb bgicon"></i>
		</div>
	</div>
	<div class="col-lg-4 dark col-padding ohidden" style="background-color: rgb(52, 73, 94); height: 356.8px;">
		<div>
			<h3 class="uppercase" style="font-weight: 600;color:#fff;">Outputs</h3>
			<p style="line-height: 1.8;color:#fff;">The conference is expected to bring about consensus among the participants on an agenda for future research and advocacy actions on the conservation, enhancement and sustainable use of indigenous flora and fauna in Southeast Asia to support the effective implementation of existing national policies.
</p>
			<a href="{{ route('about') }}" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
			<i class="icon-cog bgicon"></i>
		</div>
	</div>
	<div class="col-lg-4 dark col-padding ohidden" style="background-color: rgb(231, 76, 60); height: 356.8px;">
		<div>
			<h3 class="uppercase" style="font-weight: 600;">Themes</h3>
			<p style="line-height: 1.8;">The Conference theme, “Conservation, Enhancement and Sustainable Use of Indigenous Tropical Flora and Fauna”.
			</p>
			<a href="{{ route('theme') }}" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
			<i class="icon-thumbs-up bgicon"></i>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="section parallax skrollable skrollable-before" style="background-image: url(&quot;images/parallax/4.jpg&quot;); margin: 0px;padding: 100px 0px; background-position: 0px 100px;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
	<div class="heading-block center nobottomborder nobottommargin">
		<h2>Organized by: </h2>
		<img src="images/logo-biotrop.png" /> <img src="images/logo-50.png" />
	</div>

</div>


<section id="content">

		<div class="section nobottommargin notopmargin">
			<!-- partner -->
		
	<div class="container clearfix">

				<div class="heading-block center">
					<h3><span>Partners</span></h3>
				</div>
				<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel bottommargin-sm carousel-widget" data-margin="30" data-loop="true" data-nav="true" data-autoplay="2000" data-pagi="true" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-align-items="center" data-items-xl="6">
					<div class="oc-item"><a target="_BLANK" href="https://clsu.edu.ph/"><img src="images/clients/clsu.png" alt="Central Luzon State University"></a></div>
					<div class="oc-item"><a target="_BLANK" href="http://www.upm.edu.my"><img src="images/clients/upm.png" alt="University Putra Malaysia (UPM)"></a></div>
					
					<div class="oc-item"><a href="https://ipb.ac.id/"><img src="images/clients/ipb.png" alt="Institut pertanian Bogor"></a></div>
					
					<div class="oc-item"><a href="http://www.pertanian.go.id/"><img src="images/clients/pertanian.png" alt="Ministry of Agriculture of Republic of Indonesia"></a></div>
					
					<div class="oc-item"><a href="http://www.menlhk.go.id/"><img src="images/clients/klhk.png" alt="Ministry of Environment and Forestry of Republic of Indonesia"></a></div>
					<div class="oc-item"><a href="https://id.fsc.org/id-id/"><img src="images/clients/fsc.png" alt="Forest Stewardship Council"></a></div>

					<div class="oc-item"><a href="http://lipi.go.id/"><img src="images/clients/lipi.png" alt="Lembaga Ilmu Pengetahuan Indonesia"></a></div>

					<div class="oc-item"><a href="http://psau.edu.ph/"><img src="images/clients/psau.png" alt="Pampanga State Agricultural University"></a></div>

					<div class="oc-item"><a href="http://www.nus.edu.sg/"><img src="images/clients/nus.png" alt="National University of Singapore"></a></div>

					<div class="oc-item"><a href="https://ciat.cgiar.org/"><img src="images/clients/ciat.png" alt="International Center for Tropical Agriculture"></a></div>

					<div class="oc-item"><a href="http://www.csu.edu.ph"><img src="images/clients/csu.png" alt="Cagayan State University"></a></div>

					<div class="oc-item"><a href="http://www.burung.org"><img src="images/clients/burung.png" alt="Burung Indonesia"></a></div>
					{{--
						<!--<div class="oc-item"><a href="https://aseanbiodiversity.org/"><img src="images/clients/asean biodiversity.png" alt="ASEAN Centre for Biodiversity"></a></div>
					
						
					
					<div class="oc-item"><a href="https://www.iucn.org"><img src="images/clients/iucn.png" alt="International Union for Conservation of Nature and Natural Resources (IUCN)"></a></div>
					<div class="oc-item"><a href="https://www.wwf.or.id/en/"><img src="images/clients/wwf.png" alt="World Wide Fund (WWF) Indonesia"></a></div>
					<div class="oc-item"><a href="https://www.nature.or.id/"><img src="images/clients/tnc.png" alt="The Nature Conservancy (TNC) Indonesia"></a></div>
					<div class="oc-item"><a href="www.conservation.org/global/indonesia/Pages/beranda.aspx"><img src="images/clients/ci.png" alt="Conservation International (CI) Indonesia"></a></div>
					<div class="oc-item"><a href="https://www.bioversityinternational.org"><img src="images/clients/bi.png" alt="Bioversity International"></a></div>
				-->
				--}}
			</div>
		</div>
	</div>		
	<div class="content-wrap">

		<div class="container clearfix">

			<div class="heading-block center">
				<h2>Conference Speakers</h2>
				<span>Hear from the experts</span>
			</div>

			<div class="col_one_fourth nobottommargin">
				<div class="team">
					<div class="team-image">
						<img src="images/team/mzakaria.jpg" alt="Prof. Dr. Mohamed Zakaria Hussin">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Prof. Dr. Mohamed Zakaria Hussin</h4><span>/ Faculty of Forestry, UPM</span></div>

					</div>
				</div>
			</div>

			
			<div class="col_one_fourth nobottommargin">
				<div class="team">
					<div class="team-image">
						<img src="images/team/ani.jpg" alt="Dr Muladno">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Prof. Dr. Ir. Ani Mardiastuti, M.Sc</h4><span>/ Head of Ecology and Wildlife Management Division, <small>Department of Forest Resources Conservation and Ecotourism, Faculty of Forestry, IPB</small></span></div>
					</div>
				</div>
			</div>
			
			
		<div class="col_one_fourth nobottommargin">
				<div class="team">
					<div class="team-image">
						<img src="images/team/chew.jpg" alt="Prof Alison Martin">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr Chew Fook Tim</h4><span>/ Associate Professor (Biological Sciences), Vice Dean (Faculty of Science), <small>Department of Biological Sciences, Functional Genomics Laboratories, National University of Singapore, Singapore</small>
</span></div>
						<!--<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia eum rerum at voluptatibus saepe totam possimus.</div>-->
					</div>
				</div>
			</div>
			
		<div class="col_one_fourth nobottommargin col_last">
				<div class="team">
					<div class="team-image">
						<img src="images/team/campilan.jpg" alt="Dr Campilan Dindo">
					</div>
					<div class="team-desc">
						<div class="team-title"><h4>Dr. Campilan Dindo</h4><span>/ International Centre for Tropical Agriculture (CIAT), CGIAR</span></div>

					</div>
				</div>
			</div>
		

			<div class="clear"></div>
		</div>

		<div class="container clearfix">
			<div class="clear" style="margin-top: 60px"></div>
			<div class="col_one_third bothsidebar nobottommargin">
				<div class="fancy-title title-border">
					<h4>Events Calendar</h4>
				</div>
				<div id="calendar"></div>
				<div class="fancy-title title-border">
					<h4>Countdown</h4>
				</div>
				<div id="countdown-ex1" class="countdown countdown-small coming-soon divcenter bottommargin" style="max-width:700px;"></div>
			</div>
			<div class="col_one_third nobottommargin rightsidebar">

				<div class="fancy-title title-border">
					<h4>Conference Locations</h4>
				</div>
				<div id="google-map4" style="height: 300px;" class="gmap bottommargin"></div>
				
				
			</div>


			<div class="col_one_third nobottommargin col_last">

<div class="fancy-title title-border">
					<h4>Gallery</h4>
				</div>
				<div class="col_full masonry-thumbs grid-4 clearfix" data-lightbox="gallery">
					<a href="images/events/1.jpg" data-lightbox="gallery-item" title="Bogor Palace"><img class="image_fade" src="images/events/thumbs/1.jpg" alt="Bogor Palace"></a>
					<a href="images/events/2.jpg" data-lightbox="gallery-item" title="Kebun Raya Bogor"><img class="image_fade" src="images/events/thumbs/2.jpg" alt="Gallery Thumb 2"></a>
					<a href="images/events/3.jpg" data-lightbox="gallery-item" title="Lawang Salapan"><img class="image_fade" src="images/events/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
					<a href="images/events/4.jpg" data-lightbox="gallery-item" title="Tea Plantation in Puncak"><img class="image_fade" src="images/events/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
					<a href="images/events/5.jpg" data-lightbox="gallery-item" title="BIOTROP Dormitory"><img class="image_fade" src="images/events/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
					<a href="images/events/6.jpg" data-lightbox="gallery-item" title="BIOTROP Dormitory"><img class="image_fade" src="images/events/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
					<a href="images/events/7.jpg" data-lightbox="gallery-item" title="BIOTROP Building"><img class="image_fade" src="images/events/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
					<a href="images/events/8.jpg" data-lightbox="gallery-item" title="Pararrel Session Venue"><img class="image_fade" src="images/events/thumbs/8.jpg" alt="Gallery Thumb 8"></a>
				</div>

				<div class="fancy-title title-border">
					<h4>Awards</h4>
				</div>

The best presenter for oral presentation, the best paper and poster will be awarded. 

			</div>
		</div>

	</div>
</section>

@endsection

@section('script')

<script src='{{ asset("js/moment.min.js") }}'></script>
<script src='{{ asset("js/fullcalendar.min.js") }}'></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyBSRvB11h-a_4t5-lRmC5SWpQdoZOdoKQk"></script>
<script src="{{ asset("js/jquery.gmap.js") }}"></script>


<script src="http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js"></script>


<script>
	jQuery(document).ready( function($){
		var newDate = new Date(2018, 8, 20);
		$('#countdown-ex1').countdown({until: newDate});
	});


	$('#calendar').fullCalendar({

		header: {
			left: '',
			center: 'prev title next',
			right: ''
		},
		editable: false,
		eventLimit: true,
		events: [{
			title: 'Call for extended abstracts',
			url: '{{ route('guidelineauthor') }}',
			start: '2018-05-01',
			end: '2018-07-05'
		},
		{
			title: 'Registration starts',
			url: '{{ route('register') }}',
			start: '2018-05-16'
		},
		{
			title: 'Extended abstract submissions deadline',
			url: '{{ route('schedule') }}',
			start: '2018-07-05'
		},
		{
			title: 'Accepted abstracts announcements',
			url: '{{ route('schedule') }}',
			start: '2018-07-31'
		},
		{
			title: 'Participants early bird registration deadline',
            url: '{{ route('schedule') }}',
            start: '2018-07-31'
        },
        {
        	title: 'Registration deadline for exhibitors',
        	url: '{{ route('schedule') }}',
        	start: '2018-08-10'
        },
        
        {
        	title: 'Deadline for registration and payment for paper and poster presenters',
        	url: '{{ route('schedule') }}',
        	start: '2018-08-16'
        },
        {
        	title: 'Deadline of payment for exhibition ',
        	url: '{{ route('schedule') }}',
        	start: '2018-08-24'
        },
        {
        	title: 'Deadline for regular registration and payment (for general participants only)',
        	url: '{{ route('schedule') }}',
        	start: '2018-09-07'
        },
        {
        	title: 'Deadline for uploading oral presentation files',
        	url: '{{ route('schedule') }}',
        	start: '2018-09-03'
        },
        {
        	title: 'Conference',
        	url: '{{ route('schedule') }}',
        	start: '2018-09-20',
        	end: '2018-09-21'
        },
        ],
        loading: function(bool) {
        	$('#loading').toggle(bool);
        },
        eventClick: function(event, element) {
        	$(this).css('border-color', 'red');
        	event.url;
        },
        eventDragStart: function(event, element, ui) {
        	$(this).qtip("hide");
        	$(this).qtip("disable");
        },
        eventDragEnd: function(event, element, ui) {
        	$(this).qtip("enable");
        },
        eventRender: function(event, element) {
        	var tipContent = "<strong>" + event.title + "</strong><br/>";
        	$(element).qtip({
        		content: tipContent,
        		position: {
        			corner: {
        				target: 'leftMiddle',
        				tooltip: 'leftMiddle'
        			}
        		},
        		border: {
        			radius: 4,
        			width: 3
        		},
        		style: {
        			name: 'green',
        			tip: 'leftMiddle'
        		}
        	});
        }
    });


	$('#google-map4').gMap({
		address: 'SEAMEO BIOTROP, Bogor',
		maptype: 'ROADMAP',
		zoom: 13,
		markers: [
		{
			address: "SEAMEO BIOTROP, Bogor",
			html: "SEAMEO BIOTROP, Bogor"
		}
		],
		doubleclickzoom: false,
		controls: {
			panControl: true,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		}
	});
</script>
@endsection
