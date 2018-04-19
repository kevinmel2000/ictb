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
            <h4>Registration</h4>
        </div>
        <h5>How to Register</h5>
        <p>
     Registration can only be made online. Before clicking this <a href="index.php?mode=olreg" title="Online Registration Form" target="_blank"><strong>Online Registration Form</strong></a>, please read the following instructions:  
     <ul class="circle">                        
        <li>First, provide your e-mail address for correspondence and your personal participant account.</li>                   
        <li>There are three types of participants, namely: author, exhibitor, and participant only. Choose the one that is appropriate to you. Next information box will appear.</li>                   
     </ul>
     
    <h6>Identification  </h6>       
    <ul class="circle">             
        <li>Provide all information required in all the boxes.  </li>                       
        <li>When you choose "Author", you can "add co-author" after completion of your personal identification. Maximum number of "co-author" permitted is 10 persons. When your co-authors are more than 10 persons, the last author information boxes can be filled with "et al." and provide the main author's e-mail address. Organizing Committee will follow-up with an e-mail requesting for the complete names of the authors.  </li>                       
    </ul>
    <h6>Application </h6>   
    <ul class="circle">                 
        <li>Provide all information required in all the boxes.</li>
    </ul>                       
    <h6>Other Information</h6>
    <ul class="circle">                             
        <li>Provide all information required in all the boxes.</li>     
    </ul>                   
    <h6>Submission</h6>     
    <ul class="circle">                     
        <li>Please check all boxes to ensure that they are completely filled up, before you click "Submit".</li>                            
        <li>Author can return to the registration page and revise the information on abstract until the deadline of abstract submission date on June 30, 2015.</li>
    </ul>
    </p>

<div class="hr">
</div>

<h5 id="registration_fee">Registration Fees</h5>                    
    <p>
    To be eligible as author, exhibitor, and regular participant, registration must be completed with payment of registration fee, as follows:
      </p>

      <!-- TABLES-->
      <div class="row">
        <div class="ten columns">
        <table>
            <thead>
            <tr>
                <th>
                    Rate
                </th>
                <th>
                    Early bird rate<br>(before 15 August 2015)
                </th>
                <th>
                    Regular rate<br>(15 August - 15 Sept 2015)
                </th>
              </tr>
            </thead>
            
            <tbody>
            <tr>
                <td>
                    <h6>Foreign Participants</h6>
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
              </tr>

            <tr>
                <td>
                    Presenter(oral, poster)
                </td>
                <td>
                    USD 100
                </td>
                <td>
                    -
                </td>
              </tr>

            <tr>
                <td>
                    General(no paper)
                </td>
                <td>
                    USD 70
                </td>
                <td>
                    USD 100
                </td>
              </tr>

            <tr>
                <td>
                    Student
                </td>
                <td>
                    USD 50
                </td>
                <td>
                    USD 75
                </td>
              </tr>
             
             <tr>
                <td>
                    <h6>Indonesian Participants</h6>
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
              </tr>

            <tr>
                <td>
                    Presenter(oral, poster)
                </td>
                <td>
                    IDR 300,000
                </td>
                <td>
                    -
                </td>
              </tr>

            <tr>
                <td>
                    General(no paper)
                </td>
                <td>
                    IDR 250,000
                </td>
                <td>
                    IDR 350,000
                </td>
              </tr>

            <tr>
                <td>
                    Student
                </td>
                <td>
                    IDR 100,000
                </td>
                <td>
                    IDR 150,000
                </td>
              </tr>
              
              <tr>
                <td>
                    <h6>Exhibitor</h6>
                </td>
                <td>
                    IDR 2,000,000
                </td>
                <td>
                    IDR 3,000,000
                </td>
              </tr>
              
              <tr>
                <td>
                    <h6>Proceeding</h6>
                </td>
                <td>
                    IDR 200,000
                </td>
                <td>
                    IDR 300,000
                </td>
              </tr>
              
          </tbody>

        </table>
        <cite>
        <ul class="circle">
        <li>
Registration fee for participant covers admission to all conference sessions and exhibitions, conference kit, certificate of attendance, a copy of conference materials (in a CD or a link for download), and daily refreshments and meals (i.e., 4 refreshments, 2 lunches, and 1 special dinner) during the Conference.
</li>   
<li>
 Registration fee for exhibitor covers an exhibition space, daily refreshments and meals (i.e., 4 refreshments, 2 lunches, and 1 special dinner), conference kit for two staffs of exhibitor's organization, a certificate of participation for the exhibitor's organization, and promotion of the exhibition in the Conference website.
</li>
<li>
Indonesian nationality who is currently studying abroad and would like to use the foreign university as his/her institution in the registration, please apply for the Foreign Participant (student).
</li>
<li>
{*
Proceeding will be shipped to participant on 15 December 2015
*}
Proceedings fee for author who’s interested to include their full paper in the Proceedings, includes full paper processing fee and printing. Proceeding will be shipped to participant on 15 December 2015, with additional shipping rates, based on shipping address.
</li>
<li>
After making payment, please make a confirmation at the bottom of this page.
</li>
    </ul>
        </cite>
        
    </div>  
    </div>
  
  <div class="hr">
</div>
<div id="payment_method"> </div>
<h5>Payment Method</h5>
<div class="row" id="payment">      
<div class="six columns">
   <div class="panel"> 
        <h6>IDR Account</h6>
        <p class="clear authortext">
        BIOTROP SEAMEO<br>
        No. 0003893863<br>  
            Bank BNI, Bogor Branch  <br>
            Jl. Ir. H. Juanda, Bogor    <br>
            West Java, Indonesia    <br>
            SWIFT CODE: BNINIDJABGR <br>
        </p>
   </div>  
 </div>

 <div class="six columns">
   <div class="panel">
                <h6>USD Account</h6>
                <p class="clear authortext">
        SEAMEO BIOTROP<br>
            No. 0003890624<br>    
            Bank BNI, Bogor Branch      <br>
            Jl. Ir. H. Juanda, Bogor    <br>
            West Java, Indonesia        <br>
            SWIFT CODE: BNINIDJABGR     <br>
        </p>
   </div>  
 </div>

</div>

<h6>After a successful transfer, please <a id="modal_trigger" href="#modal">make a confirmation here</a></h6>
                
<div class="row">
    <div class="seven columns">
        <!-- FORMS-->
      <div id="modal" class="popupContainer" style="display:none;">
        <header class="popupHeader">
            <span class="header_title">BANK TRANSFER CONFIRMATION FORM</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>

        <form method="post" action="index.php?mode=said_thanks" id="confirmation_form" style="margin:15px 15px 15px 15px;">
            <div class="form">
            <div>
            <label for="error" style="color:#F00; padding-bottom:5px;">{$cms.errorlog}</label>
            </div>
            <div id="submit1">
            <label for="captcha"> Captcha Code:</label>
            <div>
               <img src="captcha1.php" border="1" align="middle">
           </div>
            <div>  
               <input style="width:100px; margin-top:5px;" type="text" id="paid_captcha" name="paid_captcha" value="{$cms.value.captcha}" autocomplete="off" required/>
            </div>  
            
            <input type="submit" name="submit" id="submit" class="readmore" value="Submit">
            <input type=hidden name="submitid" id="idsubmit" value="{$cms.submitid}">
            </div>
            <fieldset>
                <div class="row">
                    <div class="twelve columns">
                        
                            <div class="row collapse">
                                <div class="six columns">
                                <label>Registration Number</label>
                                <input type="text" name="regnumber" id="reg_number" class="smoothborder" value="{$cms.regnumber}" 
                               placeholder="Registration number" autocomplete="off" tabindex="14" required/>
                                
                                </div>

                                <div class="six columns"> 
                                <label>Email (automatically filled)</label>
                                <input type="text" id="email_author" name="email_author" placeholder="Email" value="{$cms.email_author}" class="smoothborder" autocomplete="off" required readonly/>
                                </div>
                                <div id="emailinfo"></div>
                            </div>
                                                        
                            <div class="row collapse">
                            <div class="six columns">
                            <label>First Name (automatically filled)</label>
                            <input type="text" name="fname" id="f_name" class="smoothborder" value="{$cms.fname}" placeholder="First name" autocomplete="off" required readonly/>
                            </div>
                            <div class="six columns">
                            <label>Last name (automatically filled)</label>
                            <input type="text" name="lname" id="l_name" class="smoothborder" value="{$cms.lname}" placeholder="Last name" autocomplete="off" required readonly/>
                            </div>
                            </div>

                            <div class="row collapse">
                            <div class="six columns">
                            <label>Bank Name</label>
                            <input type="text" name="bankname" class="smoothborder" value="{$cms.bankname}" placeholder="Bank name" required/>
                            </div>
                            <div class="six columns">
                            <label>Account No.</label>
                            <input type="text" name="bank_account" id="bank_account" class="smoothborder" value="{$cms.bank_account}" placeholder="Account number" required/>
                            </div>
                            </div>
                                                        
                            
                            <div class="row collapse">
                            <div class="six columns">
                            <label>Name of Bank Account Holder</label>
                            <input type="text" name="account_holder" class="smoothborder" value="{$cms.account_holder}" placeholder="Name of bank account holder" required/>
                            </div>
                            <div class="six columns">
                            <label>Amount Transferred</label>
                            <input type="text" name="amount_transfer" class="smoothborder" value="{$cms.amount_transfer}" placeholder="Amount transferred" required/>
                            <label><cite>Please put the currency and the number without punctuation, e.g. USD 100; IDR 250000</cite></label>
                            </div>
                            </div>

                            
                            <div class="row collapse">
                            <div class="twelve columns">
                            <textarea name="tx_amount_transfer" id="tx_amount_transfer" class="smoothborder ctextarea" rows="4" placeholder="Notes" value="{$cms.note_amount_transfer}" required></textarea>
                            <label><cite>Please put brief notes on the amount transferred, e.g. Author fee (1 person), proceeding (1 book)</cite></label>
                            </div>
                            </div>
                            
                </div>
                </div>
            </fieldset>
            </div>
        </form>
    </div>  
 </div>
</div>

<!--- end of pop up -->
</div>
</div>

<div class="hr">
</div>
@endsection
