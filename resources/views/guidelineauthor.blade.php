@extends('layouts.newweb')


@section('content')

<section id="page-title">
  <div class="container clearfix">
    <h1>Author Guidelines</h1>
    
  </div>
</section>

<section id="content">
  <div class="content-wrap">

    <div class="container clearfix">

     <p></p>
      <div class="fancy-title title-double-border">
        <h4><span>Requirements for Extended Abstract Preparation</span></h4>
      </div>
      <ul  style="margin-left: 30px">
        <li>Must be written in English, preferably American  English<strong></strong></li>
        <li>Must have a clear title that contains maximum of 15  words<strong></strong></li>
        <li>Must contain a minimum of 500 and maximum of 800 words describing the  relevance of the research, materials and methods used, significant results,  conclusion and implications; the  references are not included in the word count.</li>
        <li>Must  be typewritten using Microsoft Word format, Arial, 11-point font size,  single spaced, with indented paragraphs in A4 page size with 2.5 cm margin from the right, left, top and bottom.</li>
        <li>Must  not exceed 3 pages, including all tables, graphics, references and  acknowledgement; pages must not be  numbered</li>
        <li>Must  have a maximum of two tables and two graphics/figures only and centered in the  pages. Graphics/Figures should  be numbered and  headers should be placed  under;  tables must also be numbered and header should  be  placed at the top. References (if any) of the tables, figures and images should  be presented right under the tables, figures and images in the form of author  surname and publication date.</li>
        <li>Must have maximum of five (5) keywords<strong></strong></li>
      </ul>
      

      <a href="{{ route('download', 'abstracttemplate') }}" class="button button-3d button-green button-rounded button-medium">Download Extended Abstract Template</a>
      <p></p>
      <div class="fancy-title title-double-border">
        <h4><span>Requirements for Submission of Extended Abstract</span></h4>
      </div>
      
      <ul style="margin-left: 30px;">
        <li>When submitting extended abstracts, authors should clearly indicate if they are either for oral or poster presentation or both.</li>
        <li>Authors can submit a maximum of two abstracts for both either oral or poster presentations.</li>
        
        <li>Authors are required to complete the online registration process before they can  submit their extended abstracts. Once completed, authors will be given a  username, password, and registration number. The authors will have access to submit and edit their extended abstracts using username, password and registration number  given to them until the deadline submission on 10 August 2018 at 23:59 GMT+7. An icon to  upload their extended abstracts will be provided in the account.</li>
      </ul>


 

       <table class="table table-bordered table-striped">
      <thead>
        <th>
         <strong>Detail</strong></th>
         <th><strong>Date</strong></th>
       </thead>
     
      <tr>
        <td><strong>Call for, Submission and Selection of Extended Abstracts for Oral/Poster  Presentations</strong></td>
        <td><strong>&nbsp;</strong></td>
      </tr>
      <tr>
        <td>Call  for extended  abstracts</td>
        <td>16 May – 5 July 2018</td>
      </tr>
      <tr>
        <td>Deadline for submission of extended abstracts</td>
        <td>6 July 2018</td>
      </tr>
      <tr>
        <td>Evaluation and selection of extended abstracts </td>
        <td>7 - 30 July 2018</td>
      </tr>
      <tr>
        <td>Announcement of accepted extended abstracts for oral/poster presentations</td>
        <td>31 July 2018</td>
      </tr>
      <tr>
        <td>Submission of final versions of extended  abstracts for inclusion in the printing of the Conference Book of Abstracts</td>
        <td>10 August 2018</td>
      </tr>

      <tr>
        <td><strong>Conference</strong></td>
        <td><strong>20-21 September 2018</strong></td>
      </tr>
    </table>

      <a href="{{ route('register') }}" class="button button-3d button-red button-rounded button-xlarge">Submit Your Abstract Now</a>
      <p></p>

      <div class="fancy-title title-double-border">
        <h4><span>Oral Presentation</span>  </h4>
      </div>

      <ul style="margin-left:30px">
        <li>Participants whose extended abstracts are accepted for oral  presentation will only be included in the session schedule of the Conference if  they have fully paid the registration fee.</li>
        <li>Each presenter will have 15-minute time slot (12  minutes presentation, 3 minutes for discussion). Thus, PowerPoint file should  not exceed 15 slides.</li>
        <li>Presentation file should be prepared using  Microsoft PowerPoint 2010 version, with standard slide size (4:3 display).</li>
        <li>Presenters must upload their presentation files  by login to their account on or before 3 September 2018 at 23:59 GMT+7.</li>
        <li>Maximum size for presentation file to be  uploaded is 15 MB. Therefore, presentation  files must use monochrome graphics or reduce the graphic quality to 150  ppi (for screen).</li>
        <li>If the file could not be reduced to 15 MB,  please contact the Organizing Committee (bio-ictb@biotrop.org).</li>
        <li>Presenters are advised to bring their  presentation files in flash drives or in any other appropriate format for  backup.</li>
        <li>At the day of the Conference, presenters are  advised to contact the Organizing Committee (bio-ictb@biotrop.org) for  validation purposes of their presentation files.</li>
        <li>
          Presenters are also advised to be in their  designated session room 10 minutes before their session starts and notify the  session moderator of their presence.
        </li>
      </ul>

      <div class="fancy-title title-double-border">
        <h4>Poster Preparation, Mounting and Dismantling, and Presentation</h4>
      </div>

      <ul style="margin-left: 30px">
        <li>Each poster must be prepared in A0 size or 841 x 1189 mm, portrait style, and brought on the day of the Seminar.</li>
        <li>Posters which are not in the correct size as the  prescribed-size will not be allowed to be displayed.</li>
        <li>Poster must contain information on the following: poster title, names of authors, institution and e-mail address of  each author, introduction, method, result &amp; discussion, conclusion, reference, acknowledgment (if necessary).</li>
        <li>Poster must also show the Registration number of the poster, the Conference name and Theme, Conference Organizer (SEAMEO  BIOTROP), and place and date of conference (SEAMEO BIOTROP, Bogor-Indonesia, 20-21 September 2018).</li>
        <li>The Organizing Committee will only provide space for standing banner, therefore the poster presenters must bring their own  standing banner frames/legs.</li>
        <li>All posters must be placed in their corresponding plot. Registration Number of each poster will be posted on the  plot.</li>
        <li>Posters must be placed on the designated area on  19 September 2018 before the opening ceremony.</li>
        <li>Poster would be displayed throughout the Conference dates.</li>
        <li>Posters should be removed by the presenters after the Conference is finished or will be disposed-off by the Organizing  Committee.</li>
        <li>Authors should attend their posters at the scheduled time slot: at lunch time and refreshment break time.</li>
      </ul>

      <div class="fancy-title title-double-border">
        <h4><span>Full Paper Submission</span> (only for extended abstracts accepted for oral presentation)</h4>
      </div>
      
      <ul style="margin-left:30px;">
        <li>Authors who presented orally during the conference are encouraged to submit their  full papers if they want them to be considered for publication in SEAMEO  BIOTROP&rsquo;s Scopus-Indexed International Journal, BIOTROPIA. </li>
        <li>SEAMEO  BIOTROP will publish a thematic issue of BIOTROPIA specifically on theme of the  conference in December 2018.</li>
        <li>Authors  are advised to read the BIOTROPIA Guidelines for Authors in preparing their  full papers. To submit their full papers, they are advised to access  BIOTROPIA&rsquo;s online submission through SEAMEO BIOTROP website (<a href="http://journal.biotrop.org/index.php/biotropia" target="_blank">http://journal.biotrop.org/index.php/biotropia</a>)</li>
        <li>The  full papers would be subjected to experts review process as part of  BIOTROPIA&rsquo;s  requirement for publication.</li>
      </ul>
      <p>
        
        
      </p>

    </div>

  </div>
</section>
@endsection
