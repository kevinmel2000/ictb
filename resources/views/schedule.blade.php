@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 SCHEDULE AND PROGRAM
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
            <h4>Schedule and Program</h4>
        </div>
        <h5>Important Dates</h5>
            <table>
        <thead>
          <tr>
            <th>Detail</th>
            <th>1<sup>st</sup> call for abstract</th>
            <th>2<sup>nd</sup> call for abstract</th>
          </tr>
         </thead>
         <tbody>
          <tr>
            <td>Call for abstracts</td>
            <td colspan="2">February 2015</td>
           </tr>
          <tr>
            <td>Registration for participants and exhibitors starts</td>
            <td colspan="2">March 2015</td>
           </tr>
          <tr>
            <td>Deadline for abstract submissions</td>
            <td>30 May 2015</td>
            <td>30 June 2015</td>
          </tr>
          <tr>
            <td>Selection of abstracts</td>
            <td>1 - 30 June 2015</td>
            <td>1-30 July 2015</td>
          </tr>
          <tr>
            <td>Registration deadline for exhibitors</td>
            <td>15 June 2015</td>
            <td>30 July 2015</td>
          </tr>
          <tr>
            <td>Announcement of accepted abstracts for oral and poster presentations</td>
            <td>7 July 2015</td>
            <td>7 August 2015</td>
          </tr>
          <tr>
            <td>Announcement of accepted exhibitors</td>
            <td>30 July 2015</td>
            <td>30 August 2015</td>
          </tr>
          <tr>
            <td>Deadline for registration, payment &amp; submission of full papers for oral and poster presenters</td>
            <td>8 August 2015</td>
            <td>7 September 2015</td>
          </tr>
          <tr>
            <td>Deadline for early bird registration and payments (participants only)</td>
            <td colspan="2">15 August 2015</td>
           </tr>
          <tr>
            <td>Deadline of payment for exhibition</td>
            <td>30 August 2015</td>
            <td>15 September 2015</td>
          </tr>
          <tr>
            <td>Deadline for regular registration and payment (participants only)</td>
            <td colspan="2">16 August– 15 September 2015</td>
           </tr>
          <tr>
            <td>Deadline for uploading oral presentation files</td>
            <td colspan="2">30 September 2015</td>
           </tr>
         </tbody>
        </table>
 
        <!-- TABLES-->
        <h5>Conference Program</h5>
        {*<table>
            <thead>
            <tr>
                <th>
                    Times
                </th>
                <th>
                    12-Oct
                </th>
                <th>
                    13-Oct
                </th>
              </tr>
            </thead>
            
            <tbody>
            <tr>
                <td>
                    8.00
                </td>
                <td>
                    Registration
                </td>
                <td>
                    Registration
                </td>
              </tr>

            <tr>
                <td>
                    9.00
                </td>
                <td>
                    <strong>Opening Program </strong>           
                </td>
                <td>
                    <strong>Plenary Session 2</strong>:  Panel Discussion on Future Directions on Ecosystem Restoration in Southeast Asia
                </td>
              </tr>

            <tr>
                <td>
                    10.00
                </td>
                <td>
                <ul class="circle">
                    <li>Coffee/Tea Break</li>
                    <li>Poster Presentations & Exhibit Viewing</li>
                </ul> 
                </td>
                <td>
                <ul class="circle">
                    <li>Coffee/Tea Break</li>
                    <li>Poster Presentations & Exhibit Viewing</li>
                </ul> 
                </td>
              </tr>

            <tr>
                <td>
                    10.30
                </td>
                <td>
                    <strong>Plenary Session 1</strong>:  Keynote Speeches and Open Discussions on Gains and Challenges in Ecosystem Restoration in Southeast Asia
                </td>
                <td>
                    <strong>Parallel Session 3</strong>:  Ecological Restoration, Biodiversity, and Climate Change
                </td>
              </tr>
             
             <tr>
                <td>
                    12.30
                </td>
                <td>
                <ul class="circle">
                    <li>
                    Lunch
                    </li>
                    <li>Poster Presentations & Exhibit Viewing
                    </li>
                </ul>
                </td>
                <td>
                <ul class="circle">
                    <li>
                    Lunch
                    </li>
                    <li>Poster Presentations & Exhibit Viewing
                    </li>
                </ul>
                </td>
              </tr>
              
              <tr>
                <td>
                    1.30
                </td>
                <td>
                    <strong>Parallel Session 1</strong>:  Approaches, Techniques and Innovations in Ecological Restoration
                </td>
                <td>
                    <strong>Parallel Session 4</strong>:  Ecological restoration policies and other legal frameworks
                </td>
              </tr>
              
              <tr>
                <td>
                    3.15
                </td>
                <td>
                <ul class="circle">
                    <li>Coffee/Tea Break</li>
                    <li>Poster Presentations & Exhibit Viewing</li>
                </ul> 
                </td>
                <td>
                <ul class="circle">
                    <li>Coffee/Tea Break</li>
                    <li>Poster Presentations & Exhibit Viewing</li>
                </ul> 
                </td>
              </tr>
              
              <tr>
                <td>
                    3.45
                </td>
                <td>
                    <strong>Parallel Session 2</strong>:  Socio-economic, Cultural and Ethical Dimensions of Ecological Restoration
                </td>
                <td>
                    <strong>Conference Synthesis & Closing Program</strong>
                </td>
              </tr>
              
              <tr>
                <td>
                    5.30
                </td>
                <td>
                    <strong>Networking</strong>
                </td>
                <td>
                    
                </td>
              </tr>
              
              <tr>
                <td>
                    7.00
                </td>
                <td>
                <ul class="circle">
                    <li>Welcome Dinner</li>
                    <li>Launching of the Society for Ecological Restoration in Southeast Asia</li>
                </ul> 
                </td>
                <td>
                    
                </td>
              </tr>
              
            </tbody>

        </table>
        *}

        <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td width="20" valign="top" nowrap="nowrap"><p align="center"><strong>Time</strong></p></td>
    <td width="26%" colspan="4" valign="top" nowrap="nowrap"><p align="center"><strong>Monday,     October 12, 2015</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap"><p>08.00-09.00<strong></strong></p></td>
    <td nowrap="nowrap" colspan="4"><p><strong>On-site Registration Confirmation</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>09.00-10.00<strong></strong></p></td>
    <td colspan="4" valign="top"><p align="left"><strong>Opening    Program</strong></p>
      <ul>
        <li>Indonesian    National Anthem<strong></strong></li>
        <li>SEAMEO Colors<strong></strong></li>
        <li>Report from    Conference Technical Coordinator<strong></strong></li>
        <li>Welcome    remarks from SEAMEO BIOTROP Director<strong></strong></li>
        <li>Opening    remarks from FAO Representative<strong></strong></li>
        <li>Group photo<strong></strong></li>
      </ul></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>10.00-10.30<strong></strong></p></td>
    <td nowrap="nowrap" colspan="4" valign="top"><p><strong>Coffee/Tea Break; Poster &amp;    Exhibition Viewing; Press Conference</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>10.30-12.00<strong></strong></p></td>
    <td colspan="4" valign="top"><p align="left"><strong>Plenary    Session 1</strong><br />
      &quot;Gains and Challenges in Ecosystem Restoration in Southeast Asia&quot;<br />
      Moderator: Dr. Stephen Elliot, FORRU-CMU, Chiangmai University<br />
      Main rapporteur: Mr. Solichin Manuri, Australian National University<strong></strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>10.30-11.00<strong></strong></p></td>
    <td colspan="4" valign="top"><p align="left"><strong>Keynote    1</strong><br />
      &ldquo;Overview on forest restoration in the    Asia-Pacific region&rdquo;<br />
      Patrick Durst, FAO Senior Forestry Officer<strong></strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap"><p>11.00-11.15<strong></strong></p></td>
    <td colspan="4"><p><strong>Keynote 1 discussion</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>11.15-11.45<strong></strong></p></td>
    <td colspan="4" valign="top"><p align="left"><strong>Keynote    2</strong><br />
      &ldquo;A Spectrum of Restoration Options for West Java&rdquo;<br />
      Nigel Tucker, Biotropica Australia</p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>11.45-12.00<strong></strong></p></td>
    <td colspan="4" valign="top"><p><strong>Keynote 2 discussion</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>12.00-13.00<strong></strong></p></td>
    <td colspan="4" valign="top"><p><strong>Lunch; Poster &amp; Exhibition    Viewing</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>13.00-13.30<strong></strong></p></td>
    <td colspan="4" valign="top"><p align="left"><strong>Preparation    for Parallel Session</strong> <br />
      All presenters gather at designated room 30    minutes before the session starts; regular participants can choose to    participate selected the sub-theme/ presentation title and go to designated    room<strong></strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" rowspan="4" valign="top"><p>13.30-15.15<strong></strong></p></td>
    <td nowrap="nowrap" colspan="4" valign="top"><p align="center"><strong>Parallel    Session 1</strong></p></td>
  </tr>
  <tr>
    <td width="23%"><p align="center"><strong>Sub-theme    1 <br />
      [Conference Hall]</strong></p></td>
    <td width="23%"><p align="center"><strong>Sub-theme    3<br />
      [MIT-A]</strong></p></td>
    <td colspan="2"><p align="center"><strong>Side    Event<br />
      [Jati Room]</strong></p></td>
  </tr>
  <tr>
    <td width="23%" valign="top"><p align="left">Moderator: <br />
      Dr. Chongrak Wachrinrat</p></td>
    <td width="23%" valign="top"><p align="left">Moderator:<br />
      Dr. Himlal Baral</p></td>
    <td colspan="2" rowspan="9" valign="top"><p align="left">&ldquo;Restoring Land and Water Bodies Impacted By    Mining Activities to Support Livestock Production&rdquo;<br />
      Moderator:<br />
      Prof. Bambang Purwantara<br />
      Main    Rapporteur:<br />
      Dr. Paula Roberts</p></td>
  </tr>
  <tr>
    <td width="23%" valign="top"><p align="left">Main Rapporteur: <br />
      Ms. Maya Masita, M.Si.<strong></strong></p></td>
    <td width="23%" valign="top"><p align="left">Main Rapporteur:<br />
      Mr. Sutomo<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>13.30-13.45<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-01 (OR-0019)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST3-O-01 (OR-0022)<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>13.45-14.00<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-02 (OR-0027)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST3-O-02 (OR-0026)<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>14.00-14.15<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-03 (OR-0068)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST3-O-03 (OR-0006)<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>14.15-14.30<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-04 (OR-0029)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST3-O-04 (OR-0049)<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>14.30-14.45<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-05 (OR-0056)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST3-O-05 (OR-0065)<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>14.45-15.00<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-06 (OR-0060)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">&nbsp;<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>15.00-15.15<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S1ST1-O-07 (OR-0067)<strong></strong></p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">&nbsp;<strong></strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>15.15-15.45<strong></strong></p></td>
    <td nowrap="nowrap" colspan="4" valign="top"><p><strong>Coffee Break; Poster &amp; Exhibition    Viewing</strong></p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" rowspan="4" valign="top"><p>15.45-17.30</p></td>
    <td nowrap="nowrap" colspan="4" valign="top"><p align="center"><strong>Parallel    Session 2</strong></p></td>
  </tr>
  <tr>
    <td width="23%"><p align="center"><strong>Sub-theme    1 <br />
      [Conference Hall]</strong></p></td>
    <td width="23%"><p align="center"><strong>Sub-theme    2 &amp; 4<br />
      [MIT-A]</strong></p></td>
    <td colspan="2"><p align="center"><strong>Side    Event </strong><br />
      <strong>[Jati    Room]</strong></p></td>
  </tr>
  <tr>
    <td width="23%" valign="top"><p align="left">Moderator:<br />
      Dr. Chongrak Wachrinrat</p></td>
    <td width="23%" valign="top"><p align="left">Moderator:<br />
      Dr. Dodik R. Nurrochmat</p></td>
    <td colspan="2" rowspan="9" valign="top"><p align="left">Moderator:<br />
      Dr. Irdika Mansur<br />
      Main rapporteur: <br />
      Dr. Morag McDonald</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="23%" valign="top"><p align="left">Main Rapporteur:<br />
      Wheni Haslinawati, M.Si</p></td>
    <td width="23%" valign="top"><p align="left">Main Rapporteur:<br />
      Mr. Solichin Manuri</p></td>
  </tr>
  <tr>
    <td valign="top"><p>15.45-16.00</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST1-O-08 (OR-0015)</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST2-O-06 (OR-0009)</p></td>
  </tr>
  <tr>
    <td valign="top"><p>16.00-16.15</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST1-O-09 (OR-0030)</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST4-O-07 (OR-0011)</p></td>
  </tr>
  <tr>
    <td valign="top"><p>16.15-16.30</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST1-O-10 (OR-0061)</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST4-O-08 (OR-0028)</p></td>
  </tr>
  <tr>
    <td valign="top"><p>16.30-16.45</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST1-O-11 (OR-0012)</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST4-O-09 (OR-0033)</p></td>
  </tr>
  <tr>
    <td valign="top"><p>16.45-17.00</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST1-O-12 (OR-0062)</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST4-O-10 (OR-0038)</p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>17.00-17.15</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">S2ST1-O-13 (OR-0034)</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">Wrap-up ST2</p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p>17.15-17.30</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">Wrap-up ST1</p></td>
    <td width="23%" nowrap="nowrap" valign="top"><p align="left">&nbsp;</p></td>
  </tr>

  <tr>
    <td width="16%" rowspan="18" valign="top" nowrap="nowrap"><p><strong>17.30-19.00</strong></p></td>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p><strong>Networking (poster presentation)</strong></p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-01    (OR-0014)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-02    (OR-0016)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-03    (OR-0004)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-04    (OR-0037)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-05(OR-0055)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-06    (OR-0063)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-07    (OR-0017)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST1-P-08    (OR-0021)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST2-P-09    (OR-0023)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-10    (OR-0018)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-11(OR-0020)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-12    (OR-0044)&nbsp;</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-13    (OR-0053)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-14    (OR-0036)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-15    (OR-0050)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-16    (OR-0052)</p></td>
  </tr>
  <tr>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p>NST3-P-20    (OR-0010)&nbsp;</p></td>
  </tr>
  <tr>
    <td nowrap="nowrap" valign="top"><p><strong>19.00-21.00</strong></p></td>
    <td width="84%" nowrap="nowrap" valign="top" colspan="3"><p><strong>Welcome dinner</strong></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p align="center"><strong>Time</strong></p></td>
    <td width="76%" nowrap="nowrap" valign="top"><p align="center"><strong>Tuesday,     October 13, 2015</strong></p></td>
  </tr>
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p>08.00-08.30</p></td>
    <td width="76%" valign="top"><p align="left"><strong>On-site    Registration Confirmation</strong></p></td>
  </tr>
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p>08.30-10.00</p></td>
    <td width="76%" valign="top"><p align="left"><strong>Plenary    Session 2: Panel Discussion</strong> <br />
      &quot;Future Directions on Ecosystem Restoration in Southeast Asia&quot;<br />
      Panelists:<br />
      Dr. Stephen Elliot, FORRU-CMU<br />
      Dr. Morag McDonald, Bangor University<br />
      Dr. Dodik R. Nurrochmat, IPB<br />
      Dr. Sonya Dewi, ICRAF<br />
      Moderator: Dr. Jesus C. Fernandez, SEAMEO BIOTROP<br />
      Main rapporteur: Mr. Solichin Manuri, ANU</p></td>
  </tr>
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p>10.00-11.00</p></td>
    <td width="76%" valign="top"><p align="left"><strong>Coffee/Tea    Break; Poster &amp; Exhibition Viewing; Networking</strong></p></td>
  </tr>
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p>11.00-12.00</p></td>
    <td width="76%" valign="top"><p align="left"><strong>Conference    Synthesis</strong></p></td>
  </tr>
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p>12.00-12.30</p></td>
    <td width="76%" valign="top"><p align="left"><strong>Closing    Program</strong></p></td>
  </tr>
  <tr>
    <td width="23%" nowrap="nowrap" valign="top"><p>12.30-13.30</p></td>
    <td width="76%" nowrap="nowrap" valign="top"><p align="left"><strong>Lunch</strong></p></td>
  </tr>
</table>
</p>        

</div><!-- end main content-->
</div>

<div class="hr">
</div>
@endsection
