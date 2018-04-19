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
                            <li>Application</li>
                            <li>Confirmation</li>
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
                @if(empty($user))
                    @include('forms.information')
                @else
                    @include('forms.information_edit')
                @endif

            </div>
        </div>

        <div id="foo2"></div>

    </div>

</div>

</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/clone-form-td.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js') }}"></script>


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
