@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 ABOUT THE CONFERENCE
            </p>
            <p class="left">
            {if $smarty.session.login}
            <div class="welcomeuser">Welcome: {$cms.login_name} | <a class="readmore1" href="index.php?mode=logout&id={$smarty.session.uid}">Logout</a></div>
            {/if}
            </p>
        </div>
    </div>
</div>
<!-- CONTENT 
================================================== -->
<div class="background_content">
<div class="hr">
</div>

<div class="row">
    <!-- MAIN CONTENT-->
    <div class="twelve columns">
        <!-- Our History-->
        <div class="sectiontitle">
            <h4>Introduction</h4>
        </div>
      <h5>Rationale</h5>
        <p>
             The economic value of intact, fully functioning ecosystems, as providers of both natural products and environmental services, is now well established. However, once they become degraded, the stream of benefits flowing from such kind of ecosystems is considerably reduced often for long periods since natural regeneration is slow and restoration is both expensive and time-consuming.      </p>
        <p>
          The recent rapid economic development of most Asian countries, particularly in Southeast Asia, has been considered impressive but it has been achieved at the expense of the environment, undermining delivery of natural products and ecosystem services.  A 2012 working paper by the Asian Development Bank Institute reported that Asia is “confronted by serious environmental problems that threaten to undermine future growth, food security, and regional stability.”  The region now faces the “prospect of a dwindling supply of environmental capital to support the growing demands of a rapidly growing and urbanized population.”
      </p>
        <p>
          Aside from rapid population growth, ecosystem degradation is caused by various factors including increasing market demands for forest products, over cultivation of agricultural lands, poor governance, etc. In its 2011 report, the Food and Agriculture Organization estimated that about 40 percent of land in two-thirds of ASEAN nations (excluding Singapore) suffers from either severe or very severe degradation due to human activities.   Thus, ASEAN countries already recognize the importance of effectively implementing policies for environmentally sustainable growth (ASEAN 2007).  
</p>
      <p>
          The science and practice of ecological restoration could have a significant impact on the abovementioned problems as it improves natural resources management and biodiversity conservation, encourages use of traditional ecological knowledge, enhances climate change mitigation and adaptation, and builds sustainable livelihoods. It is becoming increasingly important worldwide as a way to regain the integrity of ecosystems while simultaneously enhancing human welfare.</p>
        <p>
Globally, several past ecological restoration schemes by governments and nongovernmental organizations have been successful.  Lessons learned from these experiences are critical for redefining environmental policies, determining and prioritizing research needs, and charting concerted efforts from all sectors of society towards a sustainable and integrated development of the ASEAN region. </p>

<h5>Objective</h5>
        <p>The Conference will provide a forum for scientists and practitioners to share useful lessons, address challenges, and generate commitments to strengthen policy decisions and work collaboratively towards ecological restoration for sustainable and integrated regional development in Southeast Asia along global biodiversity and other conservation goals.</p>

<h5>Expected Output</h5>
        <p>The quorum of conference participants will identify gaps in our knowledge of restoration and identify new approaches to both policies and practices that will form an agenda to guide the future direction of research and development in this field.</p>

<div class="hr">
</div>
<div class="panel" id="org_committee">    
    <div class="row">
        <div class="twelve columns">
            <h5>Organizing Committee</h5>
            <hr>
        </div>
    </div>
    
    <div class="row">

    <div class="six columns">
        <p>
    <h6>Conference Coordinators</h6>
    Dr. Ellyn K. Damayanti (Technical Coordinator)<br>
    Dr. Dewi Wulandari (Resource Management Coordinator)<br>
    </p>

            <p>
                <h6>Program and Reception</h6>
                Dewi Suryani, MM. (<i>Team Leader</i>)<br>
        Slamet Widodo Sugiarto, S.Si.<br>
                Armaiki Yusmur, S.Si.<br>
                Rizkia Tirtani<br>
                Anidah, S.Si<br>
        Ryna<br>
        Saiful Bachri, S.Si<br>
                
                <h6>Promotion & Exhibition</h6>
                Ir. Sri Widayanti (<i>Team Leader</i>)<br>
                Woro Kanti Darmastuti, M.Si<br>
                Aan Darwati, A.Md.<br>
                Rizkia Tirtani<br>
        Dani Yudi Trisna, AMd<br>
                
                <h6>Invitation, registration, and Secretariat</h6>
                Lidia Defita, S.Kom. (<i>Team Leader</i>)<br>
                Dewanti Pratiwi, S.Hut.<br>
                Risa Rosita, S.Si.<br>
                Yunita, SP.<br>
                Kania Dewi Rahayu, S.Si.<br>
                
                <h6>Audio-visual & General Logistics</h6>
                Alfi Dwi Nugroho, A.Md (<i>Team Leader</i>)<br>
                Riza Fadli Assegaf<br>
                Lukman Haris, S.Si<br>
            </p>
        </div>
    
        <div class="six columns">
            <p>
                <h6>Documentation and Proceedings</h6>
        Tika Tresnowati, M.Si. (<i>Team Leader</i>)<br>
                Sri Ismawati Soerianegara, M.Sc.<br>
                Maya Masita Novianti, M.Si.<br>
                Asep Saepudin<br>
                Dr. Dewi Wulandari<br>
                Dr. Ellyn K. Damayanti<br>
        Indah, S.Si<br>
        Nijma Nurfadila, S.Si<br>
        Siti Sulastri Rangkuty, S.Si<br>
        Syifa, S.Si<br>
        Saiful Bachri, S.Si<br>
        Perry Siantuni<br>
        Haritz Cahya Nugraha, S.ST<br>
                
                <h6>Finance</h6>
                Herman Apriyadi, SE (<i>Team Leader</i>)<br>
                Ira Mutiara<br>
                
                <h6>Food and Accommodation</h6>
                Hj. Wati Madyawati (<i>Team Leader</i>)<br>
                Tenny Wahyuni, A.Md<br>
                Riana Hartati, S.Si.<br>
                
                <h6>Transportation</h6>
                Fitri Junaedy, SEI (<i>Team Leader</i>)<br>
                Drs. Arman R. Haryono<br>
                Kuswandi<br>
            </p>
        </div>
    </div>
    
      
</div>
</div><!-- end main content-->
</div>

<div class="hr">
</div>
@endsection
