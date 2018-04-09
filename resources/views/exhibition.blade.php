@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 EXHIBITION AND SPONSORSHIP
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
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
    <!-- MAIN CONTENT-->
    <div class="eleven columns">
        <!-- Our History-->
        <div class="sectiontitle">
            <h4>Exhibition and Sponsorship</h4>
        </div>
    <h5>Exhibition</h5>
        <ul class="circle">             
    <li>Registration can be made through <a href="index.php?mode=olreg" title="Online Registration Form" target="_blank"><strong>Online Registration Form</strong></a>.</li>                        
    <li>Deadline for exhibitor registration is June 15, 2015 at 23:59 GMT+7 7 (1<sup>st</sup> call) and July 30, 2015 at 23:59 GMT+7 (2<sup>nd</sup> call).</li>
        <li>Organizing Committee will contact the applicant by e-mail to submit their exhibition concept and product.</li>
        <li>Due to limitation in exhibition space, selection of exhibitor will be conducted.</li>
        <li>Announcement of accepted exhibitors is July 30, 2015 (1<sup>st</sup> call) and August 30, 2015 (2<sup>nd</sup> call).</li>
        <li>Exhibitors name and space will be announced in the program only after the registration for exhibitor is paid.</li>
        <li>Deadline of payment for exhibition is August 30, 2015 (1<sup>st</sup> call) and September 15, 2015 (2<sup>nd</sup> call), based on the <a href="index.php?mode=guideline#registration_fee" title="Registration Fee" target="_blank"><strong>Registration Fee</strong></a> table.</li>
    </ul>

    </div>  
</div>
 
<div class="row">
    <!-- MAIN CONTENT-->
    <div class="eleven columns">
    <h5>Sponsorship</h5>
    <p>
    SEAMEO BIOTROP welcomes partnership and sponsorship with various relevant institutions in the implementation of this Conference in the following forms:
    </p>
    <ul class="circle">             
        <li>Direct funding support for the overall implementation.</li>                     
        <li>Convening specific Conference Sessions</li>
        <li>Support for attendance of resource persons and oral & poster presenters.</li>
        <li>Other in-kind support: conference materials and equipment, lunches and dinners of participants, etc.</li>
    </ul>
    <div class="hr"></div>
        <p><a href="templates/theme02/images/proposal_2nd_ICTB_2015.pdf" title="Proposal of Conference"><strong>Click here</strong></a> for details on sponsorship arrangements.</p>

    <div class="hr">
    </div>
    <div class="six columns">
    <div class="panel" style="font-size:1.1em">
    <p>
    For sponsorship, please contact:
    </p>
    <blockquote>
    <strong>Dr. Jess C. Fernandez</strong><br>
    Office of the Deputy Director for Program<br>
    SEAMEO BIOTROP<br>
    Jl. Raya Tajur Km 6, Bogor 16134, West Java, INDONESIA<br>
    Tel: +62-251-8323848<br>
    Fax: +62-251-8326851<br>
    E-mail: j.fernandez@biotrop.org<br>
    
    </blockquote>
    </div>
    </div>
    
    </div>  
</div>

<div class="hr">
</div>

@endsection
