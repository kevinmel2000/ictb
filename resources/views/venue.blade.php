@extends('layouts.newweb')



@section('content')

<section id="page-title">
    <div class="container clearfix">
        <h1>Conference Venue</h1>
        
    </div>
</section>

<section id="content">
    <div class="content-wrap">

        <div class="container clearfix">
            <div class="fancy-title title-double-border">
                <h4><span>Venue</span></h4>
            </div>

            <img src="images/foto_biotrop.jpg" />

            <div class="divider divider-rounded divider-center"><i class="icon-map-marker"></i></div>

            <div class="fancy-title title-double-border">
                <h4><span>How to Get There</span></h4>
            </div>
            <div id="google-map4" style="height: 300px;" class="gmap bottommargin"></div> 
            <div class="divider"><i class="icon-circle"></i></div>
            <div class="titleblock">

                <div style="font-size:1.1em">
                    <strong>Secretariat of SEAMEO BIOTROP 2<sup>nd</sup> International Conference on Tropical Biology</strong><br><br>
                    <strong><a href="http://www.biotrop.org" title="SEAMEO BIOTROP" target="_blank">SEAMEO BIOTROP</a></strong><br>
                    Jl.Raya Tajur Km. 6 Bogor 16134, INDONESIA<br>
                    E-mail: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a><br>
                    Tel: +62-251-8323848<br>
                    Fax: +62-251-8326851<br>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('script')

<script src="https://maps.google.com/maps/api/js?key=AIzaSyBSRvB11h-a_4t5-lRmC5SWpQdoZOdoKQk"></script>
<script src="{{ asset("js/jquery.gmap.js") }}"></script>


<script>
    $('#google-map4').gMap({
        address: 'SEAMEO BIOTROP, Bogor',
        maptype: 'ROADMAP',
        zoom: 13,
        markers: [
        {
            address: "SEAMEO BIOTROP, Bogor",
            html: "<a href='https://goo.gl/maps/EkcVKwMZfS72' target='_BLANK'>Direction to SEAMEO BIOTROP, Bogor</a>"
        }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true

        }
    });
</script>
@endsection