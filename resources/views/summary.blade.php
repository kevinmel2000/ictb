@extends('layouts.web')


@section('content')
<!-- SUBHEADER
    ================================================== -->
    <div id="subheader">
        <div class="row">
            <div class="twelve columns">
                <p class="left">
                   Summary
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
                <h4>Registration Summary for: {{ Auth::user()->registration_id }}</h4>
            </div>

            @if(empty($user->payment))
                @include('component/stepsclickable')

                <p>
                    Summary of all the information that you have entered earlier. Please make sure all information shown are correct before clicking on Confirmation Button.
                    <br/>
                    <strong>You can only edit on abstract and extended abstract section after you have clicked the confirmation button.</strong>
                </p>

            @else
                @include('component/stepsdisabled')

                @if(empty($user->paymentConfirmation))
                    
    <blockquote>

                    Please pay for the amount of {{ $user->payment }}, to: 
                    @if($isForeign)
                        <br/>SEAMEO BIOTROP
                        <br/>No. 0003890624
                        <br/>Bank BNI, Bogor Branch 
                        <br/>Jl. Ir. H. Juanda, Bogor 
                        <br/>West Java, Indonesia 
                        <br/>SWIFT CODE: BNINIDJABGR 
                    @else
                        <br/>BIOTROP SEAMEO
                        <br/>No. 0003893863
                        <br/>Bank BNI, Bogor Branch 
                        <br/>Jl. Ir. H. Juanda, Bogor    
                        <br/>West Java, Indonesia      
                        <br/>SWIFT CODE: BNINIDJABGR
                    @endif

                    <p>After you have completed the payment, please upload your receipt here:</p> 
                    <form class="frm_regstep3" method="post" action="{{ route('confirmPayment') }}" id="infoform" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <input type="file" id="pic_std_id" name="file_upload" multiple accept=".jpg,.jpeg,.pdf,.png"/>
                            <input type="submit" />
                    </form>
                    </blockquote>
                @else
                <h4>Thank you for your payment</h4><br/>See you at the conference<br/>
                <img src="{{ asset('storage/payment').'/'.$user->paymentConfirmation }}" />
                @endif

            @endif

            <!-- FORMS-->

            <!-- FORMS-->
            <div class="twelve columns">
                
                    <div class="form">

                        <fieldset>
                            <legend><h6>Registrant Information</h6></legend>
                            <div class="row">
                                <div class="ten columns">
                                  
                                <label>Fullname: <strong>{{ $user->title->title.' '.$user->lastname.', '.$user->firstname }}</strong></label>
                                
                                <label>Registration Code: <strong>{{ $user->registration_id }}</strong></label>

                                <label>Participant Type: <strong>{{ $user->participantType->type }}</strong></label>

                                <label>Email address: <strong>{{ $user->email }}</strong></label>

                                <label>Gender: <strong>{{ $user->gender }}</strong></label>

                                
                                <label>Organization: <strong>{{ $user->organization." (".$user->organizationType->type.")" }}</strong></label>


                                <label>Country: <strong>{{ $user->country->country_name }}</strong></label>

                                <label>Participant Category: <strong>
                                    @if($user->student == "Yes")
                                        Student | <a href="{{ asset('storage/studentid').'/'.$user->studentid }}" target="_BLANK">Proof</a>
                                    @else
                                        General
                                    @endif
                                </strong></label>


                                <label>Food allergies: <strong>{{ $user->allergies }}</strong></label>
                            <!-- ------- -->                            
                        </div>
                    </div>

                    
                </fieldset>


                     <fieldset>
                            <legend><h6>Application Information</h6></legend>
                            <div class="row">
                                <div class="ten columns">
                                  
                                <label>Application Type <strong>{{ $application->apptype->type }}</strong></label>
                                
                                <label>Theme: <strong>{{ $application->subtheme->theme->theme }}</strong></label>

                                <label>Subtheme: <strong>{{ $application->subtheme->sub_theme }}</strong></label>

                                <label>Title: <strong>{{ $application->title }}</strong></label>

                                <label>Abstract: <br/><strong>{{ $application->abstract }}</strong></label>

                                <label>Keywords: <br/><strong>{{ $application->keyword }}</strong></label>
                                
                                <label>Publication Type: <strong>{{ $application->publicationtype->type }}</strong></label>
                            <!-- ------- -->                            
                        </div>
                    </div>

                    
                </fieldset>


                @if($user->payment == NULL)
                
                <fieldset>
                            <legend><h6>Payment Information</h6></legend>
                            <div class="row">
                                <div class="ten columns">
                                @if($isStudent)
                                    <h4>Student Rate</h4>
                                @endif

                                <label>Participation as {{ $user->participantType->type }}: {{ $currency." ".number_format($participation) }}</label>
                                
                                @if($proceeding != 0)
                                    <label>Proceeding<strong>: {{ $currency." ".number_format($proceeding) }}</strong></label>
                                @endif
                                
                                <strong>Total payment: {{ $currency.' '.number_format($proceeding + $participation) }}</strong>
                                
                            <!-- ------- -->                            
                        </div>
                    </div>

                    
                </fieldset>
                <form method="POST" action="{{ route('confirm') }}">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $currency.' '.number_format($proceeding + $participation) }}" name="payment"/>
                <input type="submit" id="regstep1" class="readmore" value="Confirm Data">
                </form>
                @endif
            </div>
        
            </div>
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
        $(".rd_student").change(function()
        {
            var id=$(this).val();

            if(id == "Yes"){
                $.ajax
                ({
                    type: "GET",
                    url: "{{ route('component', 'idstudent') }}",
                    cache: false,
                    success: function(html)
                    {
                        $("#pictureid").show();
                        $("#pic_student_id").html(html);
                    }
                });
            }else{
                $("#pictureid").hide();
                $("#pic_student_id").html("");
            }

        });
        //ajax for fundsupport
        $(".fundsupport").change(function()
        {
            var id=$(this).val();

            if(id == "Yes"){
                id = "havesupport";
            }else{
                id = "nosupport";
            }

            $.ajax
            ({
                type: "GET",
                url: "{{ route('component', '') }}/"+id,
                cache: false,
                success: function(html)
                {
                    $("#fundsupportholder").html(html);
                }
            });

            $("#fundsupportholder").html("");
            

        });


        // validate on keyup and submit
        $("#infoform").validate({
            rules: {
                txt_fsupport: {
                    required: true,
                }, tx_contribution: {
                    required: true,
                }, file_upload: {
                    @if(empty($user))
                    required: true,
                    @endif
                    extension: "jpeg, jpg, png, pdf", 
                    filesize: 2300000
                }, messages:{
                    file_upload:{
                        filesize:" file size must be less than 2 MB.",
                        accept:"Please upload .jpg or .png or .pdf file of notice.",
                        required:"Please upload file."
                    }
                }, organi: {
                    required: true,
                },

            },

            //onkeyup: false,
            onblur: true
        });


        $(".fundsupport:checked").change();
        $(".rd_student:checked").change();
    });


</script>

@endsection
