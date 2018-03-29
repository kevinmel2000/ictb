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
                            <li class="current">Application</li>
                            <li>Additional Information</li>
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
                        <legend><h6>Application</h6></legend>
                        <div class="row">
                         <form method="post" action="{{ route('register') }}" id="contactform">
                            @csrf
                            <label for="error" style="color:#F00; padding-bottom:5px;"></label>
                            <div class="twelve columns">

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif


                                <label>Application type</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <select name="typeorga">
                                            @foreach ($applicationType as $app)
                                            <option value="{{ $app->id }}">{{ $app->type }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <label>Theme</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <select name="theme" id="theme">
                                            @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}">{{ $theme->theme }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <label>Sub-Theme</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <select name="subtheme" id="subtheme">

                                            <option selected>--SELECT SUBTHEME--</option>

                                        </select>

                                    </div>
                                </div>

                                
                            <label>Title</label>
                            <span style="font-size:1em; color:#09F"><span id="chars" style="font-weight:bold">150</span> characters left (space and punctuation included)</span>

                            <input type="text" name="paper_title" id="paper_title" placeholder="Title" value="{$cms.paper_title}" class="smoothborder" required/>
                                <label>Abstract</label>
                                <div class="row collapse">
                                    <div class="four columns">
                                       <textarea name="tx_contribution" id="tx_contribution" class="smoothborder ctextarea" rows="8" placeholder="Contribution" value="{$cms.your_contribution}" required></textarea>
                                    </div>
                                </div>

                             <label>Keywords</label>
                            <span style="font-size:1em; color:#09F; font-weight:bold">(separate each keyword by comma, do not enter key)</span>
                             <div class="row collapse">

                                <div class="seven columns">

                                    <input type="text" name="paper_keywords" id="paper_keywords" placeholder="Keywords" value="{$cms.paper_keyword}" class="smoothborder" required/>

                                </div>
                            </div>


                            <label>Is it the first time this abstract has been submitted for publication?</label>
                            <div class="row collapse">
                            <div class="four columns">
                                    <div class="six columns">
                                    <input type="radio" name="rd_ftime" value="No" id="n_ftime"/>
                                    <label for="n_ftime" class="label_radio">No</label>
                                    </div>
                                    <div class="six columns">        
                                    <input type="radio" name="rd_ftime" value="Yes" id="y_ftime" checked/>
                                    <label for="y_ftime" class="label_radio">Yes</label>                            
                                    </div>
                            </div>
                            </div>
                            
                            <label>Which publication do you prefer for your abstract & full paper?</label>
                            
                            <div class="row collapse">
                            
                                <div class=" eight columns">
                                    <input type="radio" name="rd_pub" value="pbook" id="pbook"/>
                                    <label for="pbook" class="label_radio">Program book (abstract only)</label>
                                </div>
                            </div>
                            
                             <div class="row collapse">     
                                <div class="eight columns">        
                                    <input type="radio" name="rd_pub" value="proceeding" id="procedding" checked/>
                                    <label for="procedding" class="label_radio">Program book and proceeding</label>       
                                </div>
                              </div>
                            </div>
                            
                            <input type="submit" id="submit" class="readmore" value="Submit">
                        </form>
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <p>

                            </p>
                        </div>
                    </div>
                </fieldset>

            </div>

            <div id="foo2"></div>

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
            var dataString = 'id='+ id;

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
