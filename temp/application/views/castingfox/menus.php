<?php include 'header.php'; ?>
<!-- Modal  id="advanceMenuModal"-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:1075px;">
    <div class="modal-content">
      <div >
        <button type="button" class="close " data-dismiss="modal" >
<div class="myCloseDiv">
        <div class="font1 close1">CLOSE&nbsp;</div>
        <div class="close2 glyphicon glyphicon-remove-circle"></div>
</div>
     </button>
        <h4 class="modal-title" id="myModalLabel" style="visibility:hidden">Modal title</h4>
      </div>
      <div class="modal-body ">
        <h3 class="font2 text-center">ADVANCED FILTERING CRITERIA.</h3>
        <div style="height:20px; display:block;"></div>
       <div class='font5 fontsize12' style="float:right;">CLEAR ALL FILTERS</div>
         <div style="height:43px; display:block;"></div>
<div class="col-md-12 column">
	<div class="row clearfix">
		<div class="col-md-3 column" style="border-right:2px solid #DDD7D7">
		<div style="padding-bottom:40px;" class="font3">RELEVANCE</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio'/><span style="display:table-cell;vertical-align:middle">&nbsp;Show all profiles</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Show bookmarks</span></div>
		<br/>
		<br/>
		</div>
		<div class="col-md-3 column" style="border-right:2px solid #DDD7D7; padding-bottom:8px;">
		<div style="padding-bottom:40px;" class="font3">GENDER</div>

       <center><div class="myRadioImg " style="display:inline;top:10px;left:100px">
	    <input  type="radio" id="male" name="cc" value="male" checked/>
	    <label for="male" class="font3"><span id="maleLabel" class="radioMaleUnCheck"></span><br/>Men</label>
   
    
	   <input  type="radio" id="female" name="cc" value="female"/>
       <label for="female"  style="padding-left: 70px;" class="font3"><span id="femaleLabel"class="radioFemaleUnCheck"></span><br/>Women</label>
      </div></center>
		</div>

		<div class="col-md-3 column" style="border-right:2px solid #DDD7D7;padding-bottom:111px;">
		<div style="padding-bottom:25px;" class="font3">AGE RANGE</div>
		<div style="position:relative;width:200px">
             <div id="slider-range"></div>

              <div id="min-value"></div><div id="max-value"></div>

       </div>

		</div>

		<div class="col-md-3 column">
		<div style="padding-bottom:25px;" class="font3">CITY</div>
		<div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Mumbai</span><input type="checkbox" id="city1" class="myCheckBox" checked />
        <label for="city1" style="float:right;margin-bottom:0px !important"><span></span> </label></div>
        <div class="linelightgrey" style="width:102%"></div>
        <div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Navi Mumbai</span><input type="checkbox" id="city2" class="myCheckBox"  />
        <label for="city2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
       <div class="linelightgrey" style="width:102%"></div>
		</div>

	</div>
	<div class="row clearfix">
		<div class="col-md-10 column" style="padding-top: 25px;">
			<div class="row clearfix">
				<div class="col-md-4 column">
				<div class="font3">ETHNIC APPEARANCE</div>
		            <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">North Indian</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">South Indian</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">North-East Indian</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Sikh</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

				</div>

				<div class="col-md-4 column">
				         <div style="display:block;height:21px; clear:both"></div>

				        <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">Nepali</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Caucasian (US/European)</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Middle Eastern</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">East Asian (e.g. Chinese)</span> <input type="checkbox" id="apperance" class="myCheckBox" checked />
                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

				</div>


				<div class="col-md-4 column">
				<div style="display:block;height:21px; clear:both"></div>
				        <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">African</span> <input type="checkbox" id="apperance1" class="myCheckBox" checked />
                      <label for="apperance1" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Mixed</span> <input type="checkbox" id="apperance2" class="myCheckBox" style="float:right"/>
                      <label for="apperance2" style="float:right ;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>        
				</div>
			</div>
		</div>
		<div class="col-md-2 column">
		</div>
</div>
                <div class="row clearfix">
                      <div class="col-md-11 column" style="padding-top: 40px;">
                      <div class="row clearfix">
                           <div class="col-md-6 column">
                              <div class="font3">FLUENT LANGUAGES</div>
                              <div class="font3 text-center" style="padding-top:30px;padding-bottom:10px;">Indian</div>
                               <div class="linelightgrey" style="width:100%;"></div>   
                                   <div class="col-md-6 column">
                                          <div style="padding-top: 10px;" ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;English</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Hindi</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Bengali/Bangla</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Telugu</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Marathi</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Tamil</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Urdu</span></div>

                                   </div>
                                   <div class="col-md-6 column">
                                          <div style="padding-top: 10px;"><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Gujarati</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Kannada</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Punjabi</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Malayalam</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Oriya</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Bhojpuri</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Rajasthani</span></div>
                                   </div>





                            </div>  
                            <div class="col-md-6 column">
                              <div style="display:block;height:21px; clear:both"></div>
                               <div class="font3 text-center" style="padding-top:30px;padding-bottom:10px;">International</div>
                               <div class="linelightgrey" style="width:100%;"></div>   
                                   <div class="col-md-6 column">
                                          <div style="padding-top: 10px;" ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Sign language</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Arabic</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Cantonese/Mandarin</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;French</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;German</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Italian</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Japanese</span></div>

                                   </div>
                                   <div class="col-md-6 column">
                                          <div style="padding-top: 10px;"><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Nepali</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Pashto</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Russian</span></div>
                                          <div ><input type="checkbox" id="lang1" class="myCheckBox" /><label for="lang1" class="font3" ><span></span></label><span class="font3">&nbsp;Spanish</span></div>
                                   </div>

                            </div>
                      </div>      
                      </div>
                      <div class="col-md-1 column"></div>
                </div>     
                   <div style="display:block;height:30px; clear:both"></div>

                       <div class="row clearfix">
                          <div class="col-md-4 column" style="border-right:2px solid #DDD7D7;padding: 0px 25px;">
                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">ONLY SHOW PROFILES WITH</div>
                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Photos</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Video Files</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>


                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Audio Files</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>
                                      <br/>
                                      <br/>
                                      <br/>
                                      <br/>
                                    
                          </div>

                          <div class="col-md-4 column" style="border-right:2px solid #DDD7D7;padding: 0px 25px;">
                                 <div class="font3" style="padding-top:10px;padding-bottom:30px;">OTHER FILTERS</div>
                                      <div style="padding-top: 5px;"><input type="checkbox" id="filter1" class="myCheckBox" /><label for="filter1" class="font3" ><span></span></label><span class="font3">&nbsp;Only show actors with a valid passport.</span></div>
                                      <div style="padding-top: 5px;"><input type="checkbox" id="filter2" class="myCheckBox" /><label for="filter2" class="font3" ><span></span></label><span class="font3">&nbsp;Only show actors with visible piercings.</span></div>
                                      <div  style="padding-top: 5px;"><input type="checkbox" id="filter3" class="myCheckBox" /><label for="filter3" class="font3" ><span></span></label><span class="font3">&nbsp;Only show actors with visible tattoos.</span></div>
                                      <br/>
                                      <br/>
                            
                                      
                          </div>
                      
                          <div class="col-md-4 column" style="padding: 0px 25px;">
                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">COMPLEXION</div>
                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">White (US/European)</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Fair (Kareena Kapoor)</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>


                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Wheatish (Sonakshi Sinha)</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Dusky (Bipasha Basu)</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Dark brown (African)</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                      <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>


                                    
                          </div>
                       </div>


                        <div style="display:block;height:30px; clear:both"></div> 
                                <div class="row clearfix">
                                    <div class="col-md-4 column" style="border-right:2px solid #DDD7D7;padding: 0px 25px;">
                                         <div class="font3" style="padding-top:10px;padding-bottom:65px;">HEIGHT RANGE</div>
                                                <div style="position:relative;width:200px">
                                                   <div id="slider-range1"></div>
                                                      <div id="min-value"></div><div id="max-value"></div>

                                                </div>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                    </div>

                                    <div class="col-md-4 column" style="border-right:2px solid #DDD7D7;padding: 0px 25px;">
                                         <div class="font3" style="padding-top:10px;padding-bottom:65px;">WEIGHT RANGE</div>
                                                  <div style="position:relative;width:200px">
                                                   <div id="slider-range2"></div>
                                                      <div id="min-value"></div><div id="max-value"></div>

                                                </div>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                                  <br/>
                                    </div>

                                    <div class="col-md-4 column" style="padding: 0px 25px;">
                                         <div class="font3" style="padding-top:10px;padding-bottom:30px;">BODY TYPE</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Thin/Slender</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Athletic/Toned</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Curvy</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Average</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Heavyset/Stocky</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Plus-size</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Muscular/Body builder</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>                     
                                    </div>
                                </div>         
                              <div style="display:block;height:30px; clear:both"></div>
                                 <div class="row clearfix">
                                    <div class="col-md-4 column" style="padding: 0px 25px 6px 25px;border-right:2px solid #DDD7D7;">
                                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">HAIR LENGTH</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Bald (total)</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Bald on top</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Receding hairline</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Short hair</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Ear-length</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Chin-length</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Shoulder-length</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Below shoulder</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  
                                                  <br/>
                                                  <br/>
                                                  <br/>

                                    </div>

                                     <div class="col-md-4 column" style="padding: 0px 25px;border-right:2px solid #DDD7D7;">
                                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">HAIR COLOUR</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Bald</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Black</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Dark brown</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Light brown</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Salt and pepper</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Grey</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">White/Silver</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  

                                                    <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Blonde/Yellow</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  

                                                    <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Red</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  

                                                    <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Mixed/Other</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>                     
                                    </div>


                                      <div class="col-md-4 column" style="padding: 0px 25px;">
                                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">EYE COLOUR</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Black</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Brown</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Hazel</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Grey</span> <input type="checkbox" id="apperance" class="myCheckBox" />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Green</span> <input type="checkbox" id="apperance" class="myCheckBox"  />
                                                  <label for="apperance" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                                     
                                    </div>
                                </div>

                                <div class="text-center" style="padding:80px 0px;">  <button class="myBtn button1 "style="width: 250px;">Update</button></div>






</div>
</div>
</div>
</div>
</div></div>

















<script type="text/javascript">

 $(document).ready(function(){

 radioImage();

$(".myRadioImg input[name='cc']").change(function(){
  
   radioImage();
 
});

});


  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 10,
      max: 80,
      values: [ 20, 70 ],
      slide: function( event, ui ) {
        $( "#min-value" ).html(ui.values[ 0 ]);
        $( "#max-value" ).html(ui.values[ 1 ]);

      }
    });
    $( "#min-value" ).html($( "#slider-range" ).slider( "values", 0));
     $( "#max-value" ).html($( "#slider-range" ).slider( "values", 1));
  });

   $(function() {
    $( "#slider-range1" ).slider({
      range: true,
      min: 10,
      max: 80,
      values: [ 20, 70 ],
      slide: function( event, ui ) {
        $( "#min-value" ).html(ui.values[ 0 ]);
        $( "#max-value" ).html(ui.values[ 1 ]);

      }
    });
    $( "#min-value" ).html($( "#slider-range" ).slider( "values", 0));
     $( "#max-value" ).html($( "#slider-range" ).slider( "values", 1));
  });

    $(function() {
    $( "#slider-range2" ).slider({
      range: true,
      min: 10,
      max: 80,
      values: [ 20, 70 ],
      slide: function( event, ui ) {
        $( "#min-value" ).html(ui.values[ 0 ]);
        $( "#max-value" ).html(ui.values[ 1 ]);

      }
    });
    $( "#min-value" ).html($( "#slider-range" ).slider( "values", 0));
     $( "#max-value" ).html($( "#slider-range" ).slider( "values", 1));
  });
 

 </script>