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

            <div class="row collapse">
                <div class="eight columns">
                    <div class="reg_step">
                        <ul>
                            <li class="current">Identification</li>
                            <li class="current">Additional Information</li>
                            <li class="current">Application</li>
                            <li class="current">Confirmation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <p>
                Please fill in the form. All fields are required. When you are ready to submit, please check that all fields are filled. A red border indicates that the information entered does not onform with the required format, and needs to be changed. 
            </p>

            <!-- FORMS-->

            <!-- FORMS-->
            <div class="twelve columns">
                <form class="frm_regstep3" method="post" action="{{ route('storeinfo') }}" id="infoform" enctype="multipart/form-data">
                    <div class="form">

                        <fieldset>
                            <legend><h6>Other Information</h6></legend>
                            <div class="row">
                                    {{ csrf_field() }}
                                    <div class="ten columns">
                                         <label for="error" style="color:#F00; padding-bottom:5px;"></label>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

      <label>Organization</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <input type="text" name="organi" class="smoothborder"  placeholder="Organization" required value="{{ old('organi') }}"/>
                                    </div>
                                </div>

                                <label>Organization type</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        

                                    </div>
                                </div>

                                <label>Title</label>
                                <div class="row collapse">

                                    <div class="twelve columns">
                                        
                                    </div>

                                </div>

                                <label>Country</label>
                                <div class="row collapse">

                                    <div class="twelve columns">
                                        

                                    </div>
                                </div>


                                    <label>Gender</label>
                                    <div class="row collapse">
                                        <div class="four columns">
                                            <div class="six columns">
                                                <input type="radio" name="rd_gender" value="Male" id="g_male" checked/>
                                                <label for="g_male" class="label_radio">Male</label>
                                            </div>
                                            <div class="six columns">        
                                                <input type="radio" name="rd_gender" value="Female" id="g_female"/>
                                                <label for="g_female" class="label_radio">Female</label>                                                            
                                            </div>
                                        </div>
                                    </div>

                                    <label>Are you student?</label>
                                    <div class="row collapse">
                                        <div class="four columns">
                                            <div class="six columns">
                                                <input type="radio" name="rd_student" value="No" class="rd_student" checked/>
                                                <label for="n_student" class="label_radio">No</label>
                                            </div>
                                            <div class="six columns">        
                                                <input type="radio" name="rd_student" value="Yes" class="rd_student"/>
                                                <label for="y_student" class="label_radio">Yes</label>                                                          
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pic_student_id">   

                                    </div>

                                    <label>Do you have funding support for attending this conference?</label>
                                    <div class="row collapse">
                                        <div class="four columns">
                                            <div class="controls">
                                                <div class="six columns">
                                                    <input type="radio" name="rd_fundsupport" value="No" class="fundsupport"/>
                                                    <label for="n_fsupport" class="label_radio">No</label>
                                                </div>
                                                <div class="six columns">        
                                                    <input type="radio" name="rd_fundsupport" value="Yes" class="fundsupport" checked/>
                                                    <label for="y_fsupport" class="label_radio">Yes</label>                                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div id="fundsupportholder">
                                        
                                    </div>
                               <label>Do you have any food or beverage preverence or allergies? (halal, allergies to seafood, etc), <br/>If '<strong>Yes</strong>', please state here:</label>
                               <div class="row collapse">
                                <div class="seven columns">
                                    <input type="text" name="txt_foodalergies" id="txt_foodalergies" placeholder="Food or beverage allergies" value="{{ old('txt_foodalergies') }}" class="smoothborder"/>
                                </div>
                            </div>
                            
                            <!-- ------- -->                            
                        </div>
                    </div>

                    
                </fieldset>
                <input type=hidden name=type_parti value={$cms.type_of_parti}>
                <input type=hidden name=submitid value={$cms.submitid}>
                <input type=hidden name=register_id value={$cms.register_id}>
                <input type="submit" id="regstep1" class="readmore" value="Next">
            </div>
        </form>
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
