
                          <form method="post" action="{{ route('storeapp') }}" id="contactform">
                        <legend><h6>Application</h6></legend>
                        <div class="row">
                         
                            @csrf
                          
                            <div class="twelve columns">
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


                                <label>Application type</label>
                                <div class="row collapse">
                                    <div class="three columns">
                                        <select name="cb_typeappli">
                                            @foreach ($applicationType as $app)
                                            <option value="{{ $app->id }}">{{ $app->type }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <label>Theme</label>
                                <div class="row collapse">
                                    <div class="seven columns">
                                        <select name="theme" id="theme">
                                            @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}">{{ $theme->theme }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <label>Sub-Theme</label>
                                <div class="row collapse">
                                    <div class="five columns">
                                        <select name="subtheme" id="subtheme">

                                            <option selected>--SELECT SUBTHEME--</option>

                                        </select>

                                    </div>
                                </div>

                                
                                <label>Title</label>
                                <span style="font-size:1em; color:#09F"><span id="chars" style="font-weight:bold">150</span> characters left (space and punctuation included)</span>
                                <div class="row collapse">
                                    <div class="eight columns">
                                        <input type="text" name="paper_title" id="paper_title" placeholder="Title" value="{{ old('paper_title') }}" class="smoothborder" required/>

                                    </div>
                                </div>


                                <label>Abstract</label>
                                <span style="font-size:1em; color:#09F"><span id="abstract_chars" style="font-weight:bold">2500</span> characters left (space and punctuation included)</span>
                                <div class="row collapse">
                                    <div class="eight columns">
                                     <textarea name="paper_abstract" id="paper_abstract" class="smoothborder ctextarea" rows="8" placeholder="Contribution" value="{{ old('paper_abstract') }}" required></textarea>
                                 </div>
                             </div>

                             <label>Keywords</label>
                             <span style="font-size:1em; color:#09F; font-weight:bold">(separate each keyword by comma, do not enter key)</span>
                             <div class="row collapse">

                                <div class="five columns">

                                    <input type="text" name="paper_keywords" id="paper_keywords" placeholder="Keywords" value="{{ old('paper_keywords') }}" class="smoothborder" required/>

                                </div>
                            </div>


                            <label>Is it the first time this abstract has been submitted for publication?</label>
                            <div class="row collapse">
                                <div class="four columns">
                                    <div class="six columns">
                                        <input type="radio" name="rd_ftime" value="0" id="n_ftime"/>
                                        <label for="n_ftime" class="label_radio">No</label>
                                    </div>
                                    <div class="six columns">        
                                        <input type="radio" name="rd_ftime" value="1" id="y_ftime" checked/>
                                        <label for="y_ftime" class="label_radio">Yes</label>                            
                                    </div>
                                </div>
                            </div>
                            
                            <label>Which publication do you prefer for your abstract & full paper?</label>
                            @foreach ($pubType as $pub)
                            
                            <div class="row collapse">

                                <div class=" eight columns">
                                    <input type="radio" name="rd_pub" value="{{ $pub->id }}"/>
                                    <label class="label_radio">{{ $pub->type }}</label>
                                </div>
                            </div>
                            @endforeach
                            

                            <div class="row">
                                <div class="six columns">
                                    <p><br/>
                                        <input type="submit" id="submit" class="readmore" value="Submit">
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

               
            </div>
            </form>