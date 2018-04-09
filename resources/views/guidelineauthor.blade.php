@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 PARTICIPATION GUIDELINES
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
            <h4>Author Guidelines</h4>
        </div>
        <h6>Abstract Preparation</h6>
     <ul class="circle">                        
        <li>Authors should clearly indicate if their abstracts are either for oral or poster presentation or both.</li>                                                             
        <li>Authors  can submit a maximum of two abstracts for both either oral or poster  presentations.</li>                                                                  
        <li>Abstract must be written in  English.</li>                                                                  
        <li>Abstract title should be clear and contains a maximum of 15 words.</li>                                                                 
        <li>Abstracts should be within 300 words or 2500 characters describing the relevance of the research,  materials and methods used, significant results, conclusion and implications.</li>                                                                   
        <li>Abstract keywords should be limited from three to five words.</li>                  
     </ul>
     
    <h6>Abstract Submission</h6>        
    <table>
            <thead>
            <tr>
                <th>
                    Detail
                </th>
                <th>
                    1<sup>st</sup> call for abstract
                </th>
                <th>
                    2<sup>nd</sup> call for abstract
                </th>
              </tr>
            </thead>
            
            <tbody>
            <tr>
                <td>
                    Abstract can be submitted using the format given in the <a href="index.php?mode=olreg" title="Online Registration Form" target="_blank"><strong>Online Registration Form</strong></a>.
                </td>
                <td colspan="2">
                  
                  </td>
              </tr>

            <tr>
                <td>
                    Deadline for abstract submission
                </td>
                <td>
                    May 30, 2015 at 23:59 GMT+7         
                </td>
                <td>
                    June 30, 2015 at 23:59 GMT+7
                </td>
              </tr>

            <tr>
                <td>
                    Abstract review and selection 
                </td>
                <td>
                June 1 - 30, 2015 
                </td>
                <td>
                July 1 - 30, 2015
                </td>
              </tr>

            <tr>
                <td>
                    Announcement of accepted abstract for oral and poster presentation
                </td>
                <td>
                    July 7, 2015
                </td>
                <td>
                    August 7, 2015
                </td>
              </tr>
             
             <tr>
                <td>
                    Upon the acceptance of the abstract as oral or poster, the authors must prepare full paper or poster using the guidelines provided in the Full Paper Preparation and Poster Preparation provided below.
                </td>
                <td colspan="2">
                  
                  </td>
              </tr>
              
              <tr>
                <td>
                    Abstract for oral and poster presentation can only be included in the schedule when full paper is submitted and registration fee is paid by:
                </td>
                <td>
                    August 8, 2015 at 23:59 GMT+7
                </td>
                <td>
                    September 7, 2015 at 23:59 GMT+7
                </td>
              </tr>
              
             
              
            </tbody>

        </table>


    <h6>Full Paper Preparation</h6> 
    <ul class="circle">                 
        <li>Full paper must be submitted for both oral and poster presentation.</li>                                                                    
        <li>The full paper must be written in English using Microsoft Word format in Times New Roman, 11 pt font size, single spaced, no before & after space.</li>                                                                 
        <li>The full paper should not exceed 20 (twenty) A4 pages, including all tables, graphics, references and acknowledgement.</li>                                                                 
        <li>The full paper  should contain the following  sections:
        <ul class="disc">                                                                   
            <li>Title</li>                                                          
            <li>Authors' names and institutions, and contact person's e-mail address</li>                                                               
            <li>Abstract (300 words) and keyword(maximum 5 words)</li>                                                              
            <li>Introduction</li>                                                               
            <li>Material and Method</li>                                                                
            <li>Results and Discussion</li>                                                             
            <li>Conclusion</li>                                                             
            <li>Acknowledgement</li>                                                                
            <li>References</li>                                                             
            <li>Figures and illustrations</li>                                                              
            <li>Tables and captions</li>
        </ul>
        </li>
    </ul>                       
    <h6>Full Paper Submission (Oral and Poster)</h6>
    <ul class="circle">                             
        <li>Authors will be provided by username, password, and registration number when completed the online registration process and have access to edit their abstract until the deadline for abstract submission on May 30, 2015 at 23:59 GMT+7 (1<sup>st</sup> call) and June 30, 2015 at 23:59 GMT+7 (2<sup>nd</sup> call).</li>                                                                  
        <li>Upon the acceptance of their abstracts as oral or poster presentation, Authors can submit their full papers by login to their accounts.</li>                                                                    
        <li>An icon to upload their abstracts will be provided in the account.</li>                                                                 
        <li>Maximum MS Word file capacity that can be uploaded to the account is 300 KB</li>                                                                    
        <li>When the file exceeds 300 KB (because of graphics) and it is necessary to post the graphics into the full paper, please contact the <a href="mailto:bio-ictb@biotrop.org"><strong>Organizing Committee (bio-ictb@biotrop.org)</strong></a></a>. Other means to upload your full paper will be provided.</li>                                                                    
        <li>Deadline for submission of full paper and payment of registration fee is on August 8, 2015 at 23:59 GMT+7 (1<sup>st</sup> call) and September 7, 2015 at 23:59 GMT+7 (2<sup>nd</sup> call).</li>    
    </ul>                   
    <h6>Oral Presentation</h6>      
    <ul class="circle">                     
        <li>Participants whose abstracts are accepted for oral presentation will only be included in the session schedule of the Conference if they have fully paid  the registration fee.</li>                                                                 
        <li>Each presenter will have 15-minute time slot (12 minutes presentation, 3 minutes for discussion). Thus, PowerPoint file should not exceed 15 slides.</li>                                                                   
        <li>Presentation file should be prepared using Microsoft PowerPoint 2010 version or later, with standard slide size (4:3 display).</li>                                                                 
        <li>Presenters must upload their presentation files by login to their account on September 30, 2015 at 23:59 GMT+7 at the latest.</li>                                                                  
        <li>Maximum size for presentation file to be uploaded is 15 MB. Therefore, please prepare your presentation using monochrome graphics or reduce the graphic quality to 150 ppi (for screen).</li>                                                                   
        <li>When the file could not be reduced to 15 MB, please contact the <a href="mailto:bio-ictb@biotrop.org"><strong>Organizing Committee (bio-ictb@biotrop.org)</strong></a>.</li>                                                                    
        <li>Presenters are advised to bring their presentation files in flash drives or in any other appropriate format for backup.</li>                                                                    
        <li>At the day of the Conference, presenters are advised to contact the <a href="mailto:bio-ictb@biotrop.org"><strong>Organizing Committee (bio-ictb@biotrop.org)</strong></a> for validation purposes of their presentation files.</li>                                                                    
        <li>Presenters are also advised to be in their designated session room 10 minutes before their session starts and notify the session moderator of their presence.</li>      
    </ul>

    <h6>Poster Preparation</h6>     
        <blockquote>
        <h6><i>Size of the poster</i></h6>  
        <ul class="circle">                                                                                 
        <li>Each poster must be prepared as standing banner 60 x 160 cm, portrait style, and and brought on the day of the Seminar.</li>                                                                
        <li>Posters which are not a standing banner as the prescribed-size will not be allowed to be displayed.</li>                                                            
        <li>Poster must contain information on the following: poster title, names of authors, institution and e-mail address of each author, introduction, method, result & discussion, conclusion, reference, acknowledgment (if necessary).</li>                                                              
        <li>Poster must also show the Registration number of the poster, the Conference name and Theme, Conference Organizer (SEAMEO BIOTROP), and place and date of conference (SEAMEO BIOTROP, Bogor-Indonesia, 12-13 October 2015).</li>                                                             
        <li>The Organizing Committee will only provide space for standing banner, therefore the poster presenters must bring their own standing banner frames/legs.</li>                                                                
        </ul>                                                               
        <h6><i>Mounting and dismantling</i></h6>                                                                    
        <ul class="circle">
        <li>All posters must be placed in their corresponding plot. Registration Number of each poster will be posted on the plot.</li>                                                                 
        <li>Posters must be placed on the designated area on 12 October 2015 before the opening ceremony.</li>
        <li>The Organizing Committee will not provide any standing banner's frame/leg, therefore authors must bring the frame/legs themselves.</li>
        <li>Poster would be displayed throughout the Conference dates.</li> 
        <li>Posters should be removed by the presenters after the Conference is finished or will be disposed-off by the Organizing Committee.</li>
        </ul>
        </blockquote>

<h6>Poster Presentation</h6>        
    <ul class="circle">                     
        <li>Authors should attend their posters at the scheduled time slot: at lunch time and refreshment break time.</li>                                                                  
    </ul>
</div>  
</div>

<div class="hr">
</div>

@endsection
