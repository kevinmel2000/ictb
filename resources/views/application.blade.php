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
                <h4>Registration Form</h4>
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
                            @include('forms.application')
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
<script type="text/javascript" src="{{asset('js/clone-form-td.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.tinylimiter.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js') }}"></script>


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

    $().ready(function() {
        // validate on keyup and submit
        $("#contactform").validate({
            rules: {
                paper_title: {
                    required: true,
                }, paper_abstract: {
                    required: true,
                }, paper_keywords: {
                    required: true,
                }, 
            },
            
            //onkeyup: false,
            onblur: true
        });
    });


    $(document).ready( function() {
        var elem = $("#chars");
        $("#paper_title").limiter(150, elem);
    });

    $(document).ready( function() {
        var elem = $("#abstract_chars");
        $("#paper_abstract").limiter(2500, elem);
    });
</script>

@endsection
