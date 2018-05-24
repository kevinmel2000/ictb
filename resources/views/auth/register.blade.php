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


            <p>
                Please fill in the form. All fields are required. When you are ready to submit, please check that all fields are filled. A red border indicates that the information entered does not conform with the required format, and needs to be changed. 
            </p>

            <!-- FORMS-->

            <div class="twelve columns">


                <div class="form">

                    <fieldset>
                        <legend><h6>Identification</h6></legend>
                        <div class="row">
                         <form method="post" action="{{ route('register') }}" id="contactform">
                            {{ csrf_field() }}
                            <label for="error" style="color:#F00; padding-bottom:5px;"></label>
                             <div class="twelve columns">
                                <h5>Main author, Exhibitor, or Participant Only</h5>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="five columns">
                               

                                <label>Type of Participant</label>

                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <select name="typeparti">
                                            @foreach ($participantType as $pt)
                                                @if($pt->id < 4)
                                                <option value="{{ $pt->id }}" selected>{{ $pt->type }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <label>First name</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <input type="text" name="fname" class="smoothborder" placeholder="First name" autocomplete="off" autofocus="" value="{{ old('fname') }}"/>
                                    </div>
                                </div>

                                <label>Last name</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <input type="text" name="lname" class="smoothborder" placeholder="Last name" autocomplete="off" required value="{{ old('lname') }}"/>
                                    </div>
                                </div>

                                <label>Email address</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <input type="text" id="email" name="email" placeholder="email" class="smoothborder" autocomplete="off" required value="{{ old('email') }}"/>
                                    </div>
                                    <div id="emailinfo"></div>
                                </div>

                                <label>Password</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <input type="password" id="password" name="password" placeholder="password" class="smoothborder" required />
                                    </div>
                                </div>

                                <label>Password Confirmation</label>
                                <div class="row collapse">
                                    <div class="twelve columns">
                                        <input type="password" data-rule-equalTo="#password" id="password_confirmation" name="password_confirmation" placeholder="password" class="smoothborder" required/>
                                    </div>
                                </div>
                                  <label>Type the following: </label> {!! captcha_img() !!}
                                <p><input type="text" name="captcha"></p>
                                <input type="submit" id="submit" class="readmore" value="Submit">

                                
                                <div class="row">
                                    <div class="six columns">
                                        <p>

                                        </p>
                                    </div>
                                </div>
                               
                        </div>
                        <div class="six columns">
                      
                            </form>

                        </div>
                       
                    </fieldset>

                </div>

                <div id="foo2"></div>

            </div>

        </div>

    </div>

    @endsection

    @section('script')
    <script type="text/javascript" src="{{asset('old/js/clone-form-td.js') }}"></script>
    <script type="text/javascript" src="{{asset('old/js/jquery.validate.min.js') }}"></script>
    <script>
        $().ready(function() {
        // validate on keyup and submit
        $("#contactform").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "{{ route('checkmail') }}",
                        type: "post",
                        data: {
                          email: function() {
                            return $( "#email" ).val();
                        }
                    }
                }
            }, fname: {
                required: true,
            }, lname: {
                required: true,
            }, password: {
                required: true,
                minlength: 5,
            }, 
        },
        messages: {
            email: {
                remote:"Email address is alredy exist."
            },
        },
            //onkeyup: false,
            onblur: true
        });
    });
</script>


@endsection
