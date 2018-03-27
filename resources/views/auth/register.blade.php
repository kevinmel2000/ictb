@extends('layouts.web')

@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 ONLINE REGISTRATION
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
<!-- SINGLE COLUMN-->
<div class="row">

    <div class="eleven columns">
    
        
        <div class="sectiontitle">
            <h4>Registration Form</h4>
        </div>

        <div class="row collapse">
        <div class="eight columns">
        
         <div class="reg_step">
                <ul>
                <li class="current">Identification</li>
                <li>Application</li>
                <li>Other Information</li>
                <li>Confirmation</li>
                </ul>
            </div>
         </div>
         </div>

        <p>
        Please fill in the form. All fields are required. When you are ready to submit, please check that all fields are filled. A red border indicates that the information entered does not onform with the required format, and needs to be changed. 
        </p>

        <!-- FORMS-->

        <div class="twelve columns">

            <form method="post" action="?mode=olreg&act=step2" id="contactform">
            <div class="form">

                <fieldset>
                <legend><h6>Identification</h6></legend>
                    <div class="row">
                    
                        <label for="error" style="color:#F00; padding-bottom:5px;">{$cms.errorlog}</label>

                        <div class="ten columns">
                            <h5>Main author, Exhibitor, or Participant Only</h5>
                            
                            <label>Registration ID <strong>(auto generated)</strong></label>
                            <div class="row collapse">
                                <div class="four columns">
                                    <input type="text" id="reg_id" name="register_id" placeholder="Registration ID" value="{$cms.id_registrasi}" class="smoothborder" autocomplete="off" readonly/>
                                </div>
                            </div>

                            <label>Type of Participant</label>

                            <div class="row collapse">

                                <div class="three columns">
                                
                                    <select name="cb_typeparti" onchange="window.location='?mode=olreg&act=step1&idtype='+this.value">
                                            <option value="{$cms.data.typeidparti}" selected>{$cms.data.type_parti}</option>
                                            {$cms.type_parti}
                                    </select>

                                </div>
                            </div>
                                                        
                            <label>Email for correspondence</label>
                            <div class="row collapse">
                                <div class="four columns">
                                    <input type="text" id="email_corr" name="email_corr" placeholder="email" value="{$cms.email_cooresponden}" class="smoothborder" autocomplete="off"/>
                                </div>
                                <div id="emailinfo"></div>
                            </div>
                            
                            

                            <label>First name</label>
                            <div class="row collapse">
                                <div class="seven columns">
                            <input type="text" name="fname" class="smoothborder" value="{$cms.fname_author1}" placeholder="First name" autocomplete="off" required/>
                            </div>
                            </div>
                            
                            <label>Last name</label>
                            <div class="row collapse">
                                <div class="seven columns">
                            <input type="text" name="lname" class="smoothborder" value="{$cms.lname_author1}" placeholder="Last name" autocomplete="off" required/>
                            </div>
                            </div>

                            <label>Organization</label>
                            <div class="row collapse">
                                <div class="seven columns">
                            <input type="text" name="organi" class="smoothborder" value="{$cms.organ_author1}" placeholder="Organization" required/>
                            </div>
                            </div>
                            
                            <label>Organization type</label>

                            <div class="row collapse">

                                <div class="three columns">

                                    <select name="cb_typeorga1">
                                            <option value="{$cms.data.typeidorga1}" selected>{$cms.data.type_orga1}</option>
                                            {$cms.type_orga1}
                                    </select>

                                </div>
                            </div>
                            
                            <label>Title</label>

                            <div class="row collapse">
                            
                                <div class="three columns">
                                    <select name="cb_title1">
                                            <option value="{$cms.data.titelid1}" selected>{$cms.data.titel1}</option>
                                            {$cms.titel1}
                                    </select>
                                </div>
                                
                            </div>
                            
                             <label>Country</label>

                            <div class="row collapse">

                                <div class="three columns">
                                    <select name="cb_country1">
                                            <option value="{$cms.data.country_id1}" selected>{$cms.data.country_name1}</option>
                                            {$cms.country_name1}
                                    </select>
                                    
                                </div>
                            </div>
                            
                            <label>Email</label>

                            <div class="row collapse">

                                <div class="three columns">

                                    <input type="text" name="email_author" placeholder="email" value="{$cms.email_author1}" class="smoothborder" autocomplete="off"/>

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="twelve columns">
                                <p>
                                
                                </p>
                                </div>
                            </div>
                            
                        {* Awal clone *}    
                        <div id="entry1" class="clonedInput">
                            
                            <h5 id="reference" name="reference" class="heading-reference">Co-Author #1</h5>

                            <label class="label_fn" for="first_name">First name</label>
                            <div class="row collapse">
                                <div class="seven columns">
                            <input type="text" id="fname2" name="ID1_fname2" class="smoothborder1" value="{$cms.fname_author2}" placeholder="First name" required/>
                            </div>
                            </div>
                            
                            <label class="label_ln" for="last_name">Last name</label>
                            <div class="row collapse">
                                <div class="seven columns">
                            <input type="text" id="lname2" name="ID1_lname2" class="smoothborder2" value="{$cms.lname_author2}" placeholder="Last name" required/>
                            </div>
                            </div>

                            <label class="label_org" for="org_name">Organization</label>
                            <div class="row collapse">
                                <div class="seven columns">
                            <input type="text" name="ID1_organi2" class="smoothborder3" value="{$cms.organ_author2}" placeholder="Organization" required/>
                            </div>
                            </div>
                            
                            <label class="label_torg" for="org_type">Organization type</label>

                            <div class="row collapse">

                                <div class="three columns">

                                    <select class="sel_torg" name="ID1_cb_typeorga2" id="cb_typeorga2">
                                            <option value="{$cms.data.typeidorga2}" selected>{$cms.data.type_orga2}</option>
                                            {$cms.type_orga2}
                                    </select>

                                </div>
                            </div>
                            
                            <label class="label_title" for="title_name">Title</label>

                            <div class="row collapse">

                                <div class="three columns">

                                    <select class="sel_title" name="ID1_cb_title2" id="cb_title2">
                                            <option value="{$cms.data.titelid2}" selected>{$cms.data.titel2}</option>
                                            {$cms.titel2}
                                    </select>

                                </div>
                            </div>
                            
                             <label class="label_country" for="country_name">Country</label>

                            <div class="row collapse">

                                <div class="three columns">

                                    <select class="sel_country" name="ID1_cb_country2" id="cb_country2">
                                            <option value="{$cms.data.country_id2}" selected>{$cms.data.country_name2}</option>
                                            {$cms.country_name2}
                                    </select>

                                </div>
                            </div>
                            
                            <label class="label_email" for="email_address">Email</label>

                            <div class="row collapse">

                                <div class="three columns">

                                    <input type="text" name="ID1_email_author2" id="email_author2" placeholder="email" value="{$cms.email_author2}" class="smoothborder4" autocomplete="off"/>

                                </div>
                            </div>
                       </div> {* Akhir clone *}
                            
                            <div class="row">
                                <div class="twelve columns"> 
                                <div id="addDelButtons">
                                    <input type="button" id="btnAdd" value="Add co-author"> <input type="button" id="btnDel" value="Remove co-author above">
                                </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>

                    
                </fieldset>
                <input type=hidden name=submitid value={$cms.submitid}>
                
                <label for="captcha"> Captcha Code:</label>
                <div>
                    <img src="captcha2.php" border="1" align="middle">
                </div>
                <div>  
                    <input style="width:100px; margin-top:5px;" type="text" id="reg_captcha" name="reg_captcha" value="{$cms.value.captcha}" autocomplete="off" required/>
                </div>
                
                <input type="submit" id="submit" class="readmore" value="Next">
            </div>
            </form>
            <div id="foo2"></div>

        </div>

    </div>

</div>

@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/clone-form-td.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js') }}"></script>
<script>
    $().ready(function() {
        // validate on keyup and submit
        $("#contactform").validate({
            rules: {
                
                email_corr: {
                    required: true,
                    email: true,
                    remote: {
                        url: "check-email.php",
                        type: "post",
                        data: {
                          email: function() {
                            return $( "#email_corr" ).val();
                          }
                        }
                      }
                },
                email_author: {
                    required: true,
                    email: true
                },
                ID1_email_author2: {
                    required: true,
                    email: true
                },
                ID2_email_author2: {
                    required: true,
                    email: true
                },
                ID3_email_author2: {
                    required: true,
                    email: true
                },
                ID4_email_author2: {
                    required: true,
                    email: true
                },
                ID5_email_author2: {
                    required: true,
                    email: true
                },
                ID6_email_author2: {
                    required: true,
                    email: true
                },
                ID7_email_author2: {
                    required: true,
                    email: true
                },
                ID8_email_author2: {
                    required: true,
                    email: true
                },
                ID9_email_author2: {
                    required: true,
                    email: true
                }
                
            },
            messages: {
                email_corr: {
                    remote:"Email address is alredy exist."
                },
                email_author: "Please enter a valid email address",
                ID1_email_author2: "Please enter a valid email address",
                ID2_email_author2: "Please enter a valid email address",
                ID3_email_author2: "Please enter a valid email address",
                ID4_email_author2: "Please enter a valid email address",
                ID5_email_author2: "Please enter a valid email address",
                ID6_email_author2: "Please enter a valid email address",
                ID7_email_author2: "Please enter a valid email address",
                ID8_email_author2: "Please enter a valid email address",
                ID9_email_author2: "Please enter a valid email address"
            },
            //onkeyup: false,
            onblur: true
        });
    });
    </script>
    
<script>
/*
    $(document).ready(function() {
        function disableBack() { window.history.forward() }
        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
*/
</script>

@endsection
