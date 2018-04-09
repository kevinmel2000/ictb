@extends('layouts.web')

@section('style')
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

@endsection

@section('content')
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
                                                  
                                                            </div>
                                                            <div class="minipause">
                                                            </div>
                                                            {{-- SUBHEADER      ================================================== --}}
                                                            <div id="subheader">
                                                                <div class="row">
                                                                    <div class="twelve columns">
                                                                        <p class="text-center">
                                                                            <span style="font-size:1.3em; color:#FF0">3<sup>rd</sup> International Conference on Tropical Biology</span><br>
                                                                            Theme: "Conservation, Enhancement and Sustainable Use of Indigenous Tropical Flora and Fauna"

                                                                            <div style=" text-align:center; color:#FF0; font-weight:bold">September 24 - 25, 2015</div>
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

@endsection

@section('script')

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


@endsection