@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 CONFERENCE VENUE
            </p>
            <p class="left">
            {if $smarty.session.login}
            <div class="welcomeuser">Welcome: {$cms.login_name} | <a class="readmore1" href="index.php?mode=logout&id={$smarty.session.uid}">Logout</a></div>
            {/if}
            </p>
        </div>
    </div>
</div>
<div class="background_content">
<!-- CONTENT 
================================================== -->
<div class="row">
        <div class="seven columns">
            <h4>Venue:</h4>
            <p>
            <div class="" style="font-size:1.1em">
            <strong>SEAMEO BIOTROP Convention Hall, Jl. Raya Tajur Km. 6, Bogor, Indonesia</strong>
            </div>
            </p>
            <img src="templates/theme02/images/foto_biotrop.jpg" alt="BIOTROP"> 
        </div>
        {*
        <div class="six columns">
            <h4>Secretariat of SEAMEO BIOTROP 2<sup>nd</sup> International Conference on Tropical Biology</h4>
            <p>
            <div class="" style="font-size:1.1em">
            <strong><a href="http://www.biotrop.org" title="SEAMEO BIOTROP" target="_blank">SEAMEO BIOTROP</a></strong><br />
            Jl.Raya Tajur Km. 6 Bogor 16134, INDONESIA<br />
            E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br />
            Tel: +62-251-8323848<br />
            Fax: +62-251-8326851<br />
            </div>
            </p>
        </div> 
        *}
    
    <div class="twelve columns">
        <div class="hr"></div>

        <div class="centersectiontitle">
        <h4>How to get there..</h4>
        </div>
    </div>
    <div class="six columns">
        {*
        <iframe class="gmap" frameborder="0" style="border:0" 
        src="https://www.google.com/maps/embed/v1/place?q=SEAMEO%20BIOTROP&key=AIzaSyBkIORzgpv_xxMkwmTcx3DaWuBRCPJHBLA"></iframe>
        *}
        <iframe class="gmap" frameborder="0" style="border:0" 
        src="https://www.google.com/maps/embed/v1/directions?origin=Soekarno%20Hatta%20International%20Airport%2C%20Pajang%2C%20Banten%2C%20Indonesia&destination=SEAMEO%20BIOTROP&key=AIzaSyBkIORzgpv_xxMkwmTcx3DaWuBRCPJHBLA">
        </iframe>
        
        {*<div id="mapcanvas" style="clear: both; height:400px; width:100%"></div>*}
    </div>
    <div class="six columns">
        <img src="templates/theme02/images/lokasi_conference.png" alt="How to get there"> </div>
    <div class="twelve columns">
        <div class="hr"></div>
        <p><a href="templates/theme02/images/infopack_2nd_ictb_2015.pdf" target="Info Pack"><strong>CLICK HERE</strong></a> TO DOWNLOAD INFO PACK FOR YOUR GUIDANCE.</p>
    </div>

    </div> 
    
    
<div class="hr"></div>

<div class="row">
    <!-- MAIN CONTENT-->
    <div class="seven columns">
    <div class="panel">
    
    <div style="font-size:1.1em">
        <strong>Secretariat of SEAMEO BIOTROP 2<sup>nd</sup> International Conference on Tropical Biology</strong><br /><br />
        <strong><a href="http://www.biotrop.org" title="SEAMEO BIOTROP" target="_blank">SEAMEO BIOTROP</a></strong><br />
        Jl.Raya Tajur Km. 6 Bogor 16134, INDONESIA<br />
        E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br />
        Tel: +62-251-8323848<br />
        Fax: +62-251-8326851<br />
    </div>
    
    </div>
    </div>  
</div>

<div class="hr">
</div>


@endsection
