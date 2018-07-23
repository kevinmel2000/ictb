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
                <h4>Application Form for: {{ Auth::user()->registration_id }}</h4>
            </div>

            <div class="row collapse">
                <div class="eight columns">
                    <div class="reg_step">
                        <ul>
                            <li class="current">Identification</li>
                            <li class="current">Additional Information</li>
                            <li class="current">Application</li>
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


                <div class="form">

                    <fieldset>
                        @if(empty($application))
                            @include('forms.applicationdisable')
                        @else
                            @include('forms.application_edit')
                        @endif

                    </fieldset>

                </div>

                <div id="foo2"></div>

            </div>

        </div>

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('old/js/clone-form-td.js') }}"></script>
<script type="text/javascript" src="{{asset('old/js/jquery.validate.min.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function()
    {
        $("#theme").change(function()
        {
            var id=$(this).val();
            var dataString = 
            @if(!empty($application))
                'selected={{ $application->subtheme_id }}&'+
            @endif

            'id='+ id;

            $.ajax
            ({
                type: "POST",
                url: "{{ route('checksubtheme') }}",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    $("#subtheme").html(html);
                }
            });

        });


        $("#theme").change();
    });

/*
 * 
 * Textarea Word Count Jquery Plugin 
 * Version 1.0
 * 
 * Copyright (c) 2008 Roshan Bhattarai
 * website : http://roshanbh.com.np
 * 
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * 
*/

    $().ready(function() {
        // validate on keyup and submit
        $("#contactform").validate({
            rules: {
                paper_title: {
                    required: true,
                }, paper_abstract: {
                    @if(!isset($application))
                    required: true,
                    @endif
                    extension: "doc, docx", 
                    filesize: 5300000
                }, messages:{
                    file_upload:{
                        filesize:" file size must be less than 2 MB.",
                        accept:"Please upload .doc or .docx abstract file.",
                        required:"Please upload extended abstract file."
                    }
                }, paper_keywords: {
                    required: true,
                }, 
            },
            
            //onkeyup: false,
            onblur: true
        });
    });


  
   $(function() {
    var maxWords = 15;
    var wordCounts = {};
    $("#paper_title").keyup(function() {
        var matches = this.value.match(/\b/g);
        wordCounts[this.id] = matches ? matches.length / 2 : 0;
        var finalCount = 0;
        $.each(wordCounts, function(k, v) {
            finalCount += v;
        });
        $('#chars').text(15-finalCount);
        console.log(finalCount);
        if(finalCount > maxWords){
            $("#paper_title").val(paper_title.value.slice(0,-2));
        };
    }).keyup();
});

</script>

@endsection
