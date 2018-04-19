 <form class="frm_regstep3" method="post" action="{{ route('storeinfo') }}" id="infoform" enctype="multipart/form-data">
                    <div class="form">

                        <fieldset>
                            <legend><h6>Other Information</h6></legend>
                            <div class="row">
                                    @csrf
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
                                        <select name="typeorga">
                                            @foreach ($organizationType as $org)
                                            <option value="{{ $org->id }}">{{ $org->type }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <label>Title</label>
                                <div class="row collapse">

                                    <div class="twelve columns">
                                        <select name="title" class="form-control">
                                            @foreach ($titles as $title)
                                            <option value="{{ $title->id }}">{{ $title->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <label>Country</label>
                                <div class="row collapse">

                                    <div class="twelve columns">
                                        <select name="country">
                                            @foreach ($countries as $country)
                                            @if($country->id == 1)
                                            <option value="{{ $country->id }}" selected>{{ $country->country_name }}</option>
                                            @else
                                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                            @endif
                                            @endforeach
                                        </select>

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
                               <label>Do you have any food or beverage allergies? If '<strong>Yes</strong>', please state here:</label>
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