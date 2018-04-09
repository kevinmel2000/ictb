@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 CONFERENCE SPEAKERS
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
{*
<div class="row">
    <!-- MAIN CONTENT-->
    <div class="twelve columns">
    <div class="sectiontitle">
            <h4>Conference Speakers</h4>
    </div>
    <ul class="circle">
        <h5><li>United Nations Food and Agriculture Organization (FAO)</li></h5>
        <h5><li>Ministry of Environment and Forestry, The Republic of Indonesia (MoEF)</li></h5>
        <h5><li>World Agroforestry Center (ICRAF)</li></h5>
        <h5><li>Chiangmai University Forest Restoration Research Unit</li></h5>
        <h5><li>International Union of Forestry Research Organization (IUFRO)</li></h5>
    </ul>
    </div>

</div>

<div class="hr">
</div>
*}
<!-- CONTENT 
================================================== -->
<div class="row">
<div class="twelve columns">
    <div class="sectiontitle">
        <h4>Conference Speakers</h4>
    </div>
    <h5>.: United Nations Food and Agriculture Organization (FAO)</h5>
    
    <div class="two columns">
      <h5></h5>
    <img src="templates/theme02/images/speaker/patrick_durst.png" alt="">
    <div>
        <p class="text-left">
                Dr. Patrick Durst
                        <i><br>
                        Senior Forestry Officer</i>
                </p>
    </div>
    </div>

    <div class="ten columns">
      <h5>Dr. Patrick Durst</h5>
        <p>
        Dr. Patrick Durst is Senior Forestry Officer for Asia and the Pacific, for the Food and Agriculture Organization of the United Nations (FAO), where he coordinates and supports FAO’s forestry and natural resources activities.  He was previously Coordinator for Asia and Near East Programs with the USDA Forest Service and served as a U.S. Peace Corps Volunteer Agroforestry Extensionist in the Philippines. He holds degrees in forest management and forest economics from the University of Wisconsin-Stevens Point and North Carolina State University, respectively.
    </p>
    </div>

        <!-- main content-->
</div><!-- end main content-->
</div>
<div class="row">
<div class="twelve columns">
    <h5>.: Chiangmai University Forest Restoration Research Unit</h5>
        <!-- main content-->
    <div class="two columns">
      <h5></h5>
      <img src="templates/theme02/images/speaker/sthepen_elliot.png" alt="">
    <div>
        <p class="text-left">
            Dr. Stephen Elliott
            <i><br>
            Forest Ecologist</i>
        </p>
    </div>
    </div>

    <div class="ten columns">
      <h5>Dr. Stephen Elliott</h5>
        <p>
          Dr. Stephen Elliott obtained his PhD in forest ecology from Edinburgh University in 1985. After brief post doc projects on medicinal plants in Indonesia and the nutritional ecology of lowland gorillas in Gabon, he settled as a lecturer in wildlife conservation and tropical plant ecology at the Biology Department, Chiang Mai University, northern Thailand, where he co-founded the Forest Restoration Research Unit (www.forru.org) in 1994. The unit has considerably advanced the science of tropical forest restoration over the past 20 years, has produced numerous papers and text books (the latest of which is "Restoring Tropical Forests:a practical guide") and runs frequent training programs for, villagers, NGO's, government officers and forestry professionals.
        </p>
    </div>

</div><!-- end main content-->
</div>

<div class="row">
<div class="twelve columns">
        <!-- main content-->
        <h5>.: BIOTROPICA Australia</h5>
    <div class="two columns">
      <h5></h5>
      <img src="templates/theme02/images/speaker/nigel_tucker.png" alt="">          
    <div>
        <p class="text-left">
            Mr. Nigel Tucker
              <br>
            <i>Forest Ecologist</i>
        </p>
    </div>
    </div>

    <div class="ten columns">
      <h5>Mr. Nigel Tucker</h5>
        <p>
             Mr. Tucker has been involved in tropical restoration for over 30 years working in Australia, Papua New Guinea, the Pacific Islands, and Indonesia. He developed the framework species method of rain forest restoration, which is now used across Australia, south-east Asia, Latin America and Africa. A founding board member of the Australasian chapter of the Society for Ecological Restoration, Mr. Tucker is also an Executive Board member and Commissioned Reviews editor of the journal Ecological Management and Restoration, and an Adjunct at James Cook University’s School of Tropical Biology. He is the co-author of the textbook ‘Repairing the Rainforest’ and is currently director and senior environmental scientist at Biotropica Australia.
        </p>
    </div>
</div><!-- end main content-->
</div>

<div class="row">
<div class="twelve columns">
        <!-- main content-->
        <h5>.: World Agroforestry Center (ICRAF)</h5>
    <div class="two columns">
      <h5></h5>
      <img src="templates/theme02/images/speaker/sonya_dewi.png" alt="">          
    <div>
        <p class="text-left">
            Dr. Sonya Dewi
              <br>
            <i>Country Coordinator for Indonesia of the World Agroforestry Centre (ICRAF)</i>
        </p>
    </div>
    </div>

    <div class="ten columns">
      <h5>Dr. Sonya Dewi</h5>
        <p>
             Dr. Sonya Dewi is the Country Coordinator for Indonesia of the World Agroforestry Centre (ICRAF). She holds a PhD degree in Ecology, Evolution and Systematics from the Australian National University, Canberra, Australia, MSc degree in Computer Science from the University of New Brunswick, Fredericton, Canada and BSc degree in Agriculture/Soil Science from Brawijaya University, Indonesia.<br>
Throughout her professional career as a scientist, she has focused on understanding the trade-offs and integration between conservation and development agenda at the landscape level. Land use and cover dynamics have been the bases of her multi-disciplinary research works using spatial analysis to develop empirical models and tools, and derive and analyze time series of remote sensing data. In the past ten years, she  has embraced climate change mitigation issues into landscape sustainability studies, including national and sub-national level carbon accounting and monitoring, peatland strategy, carbon footprint of palm oil production, and  national level REDD+ strategy discussions. Recently, she has been actively promoting landscape approach within the integrated and inclusive spatial land use planning in rural areas for low emission development and for multiple environmental services through negotiation support tools. She now leads several research activities in green economy and low emission development pathways in five provinces in Indonesia and is involved in multiple country studies around the same issues, promoting south-south cross learning.
        </p>
    </div>
</div><!-- end main content-->
</div>

{* Prof Morag McD *}
<div class="row">
<div class="twelve columns">
        <!-- main content-->
        <h5>.: Bangor University</h5>
    <div class="two columns">
      <h5></h5>
      <img src="templates/theme02/images/speaker/prof_morag.png" alt="">          
    <div>
        <p class="text-left">
            Professor Morag McDonald
              <br>
            <i>Head, School of Environment, Natural Resources & Geography</i>
        </p>
    </div>
    </div>

    <div class="ten columns">
      <h5>Professor Morag McDonald</h5>
        <p>
             Professor McDonald holds a personal chair in ecology and catchment management at Bangor University. She is Head of the School of Environment, Natural Resources and Geography which has 400 undergraduate students, 162 masters students, 60 PhD students and 28 members of faculty. She has been an active researcher in international environmental issues for over 20 years, with broad research expertise in soil conservation and fertility; impacts of anthropogenic and natural disturbance on forest ecosystems; tropical forest regeneration; agroforestry systems, water regulating ecosystem services and forest restoration. She has field experience in 14 countries. She is a founder and consortium member of the joint European MSc programme in Sustainable Tropical Forestry (SUTROFOR), and the global PhD programme in Forest and Nature for Society (FONASO). She is an Associate of the Institute of Environmental Management and Assessment; a Fellow of the Royal Geographical Society; and a Senior Fellow of the UK Higher Education Academy. 
        </p>
    </div>
</div><!-- end main content-->
</div>
{* End of Prof. Morag *}

{* Dr. Dodik *}
<div class="row">
<div class="twelve columns">
        <!-- main content-->
        <h5>.: Bogor Agricultural University</h5>
    <div class="two columns">
      <h5></h5>
      <img src="templates/theme02/images/speaker/dodik_nurr.png" alt="">          
    <div>
        <p class="text-left">
            Dr. Dodik Ridho Nurrochmat
              <br>
            <i>Director of Strategic Studies & Agriculture Policy</i>
        </p>
    </div>
    </div>

    <div class="ten columns">
      <h5>Dr. Dodik Ridho Nurrochmat</h5>
        <p>
             Dr. Dodik Ridho Nurrochmat is currently Director of Strategic Studies & Agriculture Policy, Bogor Agricultural University (IPB) and associate professor on forest policy & economics at the same university.  He completed bachelor in forest management at IPB.  He studied master in forest economics and subsequently earned his PhD in forest policy and nature conservation from the Georg-August University of Goettingen, Germany.  He has achieved high honours throughout his academic career, and is a distinguished scholar having published numerous articles, papers and books on the subjects of forest and environment policy and socio-economics.  Since 2005, he has been appointed as member of the International Council of IUFRO (International Union of Forest Research Organiations).  He serves also as editorial advisory board member of the Journal of Forest Policy & Economics (Elsevier), editor in chief of the “Risalah Kebijakan Pertanian & Lingkungan” (the journal of Agriculture & Environment Policy Review), and member of the scientific advisories of the national board of the Association of Indonesian Forestry Scholars (DPP Persaki).  Dr. Nurrochmat has actively involved in the policy dialogues and served as invited expert in several processes of policy making in regional (ASEAN), national, and local levels. 
        </p>
    </div>
</div><!-- end main content-->
</div>
{* End of Dr.Dodik *}

<div class="row">
<div class="twelve columns">
    <h5>.: International Union of Forestry Research Organization (IUFRO)</h5>
        <!-- main content-->        
</div><!-- end main content-->
</div>

<!-- end main content-->

<div class="hr">
</div>
@endsection
