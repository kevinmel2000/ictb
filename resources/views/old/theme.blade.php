@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 SUB THEMES AND TOPICS
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
    <div class="twelve columns">
        <!-- Our History-->
        <div class="sectiontitle">
            <h4>Sub Themes and Topics</h4>
        </div>


        <!-- TABLES-->
        <table>
            <thead>
            <tr>
                <th>
                </th>
                <th>
                    Sub Themes
                </th>
                <th>
                    Topics
                </th>
              </tr>
            </thead>
            
            <tbody>
            <tr>
                <td>1</td>
                <td>
                    Approaches, Techniques and Innovations in Ecological Restoration
                </td>
                <td>
                <ul class="circle">
                    <li>Restoration in parks and protected areas</li>
                    <li>Restoration in Agro-ecological and silvicultural systems</li>
                    <li>Restoration in an urban context</li>
                    <li>Restoration in mined areas</li>
                    <li>Community and Landscape Scale Restoration</li>
                </ul>
                </td>
              </tr>

            <tr>
                <td>2</td>
                <td>
                
                    Socio-economic, Cultural and Ethical Dimensions of Ecological Restoration
                </td>
                <td>
                <ul class="circle">
                    <li>Traditional ecological knowledge and community-based restoration</li>
                    <li>Monitoring and adaptive management</li>
                </ul>
                </td>
              </tr>

            <tr>
                <td>3</td>
                <td>
                Ecological Restoration, Biodiversity, and Climate Change
                </td>
                <td>
                <ul class="circle">
                    <li>Threatened and endangered species, populations and habitats</li>
                    <li>Invasive species management</li>
                    <li>The role of restoration in mitigating and adapting to climate change</li>
                </ul> 
                </td>
              </tr>

            <tr>
                <td>4</td>
                <td>
                    Ecological restoration policies and other legal frameworks 
                </td>
                <td>
                <ul class="circle">
                    <li>Planning and decision-making frameworks on ecological restoration</li>
                    <li>Effectivity & efficiency of policies and legal frameworks on ecological restoration</li>
                    <li>Science and policy interactions in determining ecological restoration options</li>
                </ul> 
                </td>
              </tr>
             
            </tbody>

        </table>

<div class="hr">
</div>

<div class="panel">
    
    <div class="row">
        <div class="twelve columns">
            <h5>Steering Committee</h5>
            <hr>
         <p>
            Dr. Irdika Mansur (SEAMEO BIOTROP Director)<br>
            Dr. Jesus C. Fernandez (SEAMEO BIOTROP Deputy Director for Program)<br>
            Dr. Arief Sabdo Yuwono (SEAMEO BIOTROP Deputy Director for Resource Management)<br>
        </p>

        </div>
    </div>
    
    <div class="row">
        <div class="twelve columns">
            <h5>Scientific Committee</h5>
            <hr>
         <p>
            Dr. Chongrak Wachrinrat (SEAMEO BIOTROP Governing Board Member from THAILAND)<br>
            Dr. Jesus C. Fernandez (SEAMEO BIOTROP Deputy Director for Program)<br>
            Dr. Ellyn K. Damayanti (BIOTROP Program Thrust Coordinator for Tropical Biology for Community Welfare)<br>
            Dr. Dewi Wulandari  (BIOTROP Program Thrust Coordinator for  Tropical Biology for Environmental Integrity)<br>
            Dr. Steven Elliot (Director of Forest Restoration Research Unit, Chiangmai University)<br>
            Dr. Ryo Kohsaka (International Union of Forest Research Organization (IUFRO) Research Group  6.10.00 Rural Development Member from Kanazawa University, Japan)<br>
            Ms. Tanja Kahkonen, M.Sc. (IUFRO Research Group 6.10.00 Rural Development Member from University of Eastern Finland, Finland)<br>
            Ms. Ana Elia R. Hidalgo, M.Sc. (IUFRO Research Group 6.10.00 Rural Development Member from University of British Columbia, Canada)<br>
        Mr. Solichin Manuri, M.Sc. (Australian National University, Australia)<br>
        </p>

        </div>
    </div>
    
      
</div>

        

</div><!-- end main content-->
</div>

<div class="hr">
</div>
@endsection
