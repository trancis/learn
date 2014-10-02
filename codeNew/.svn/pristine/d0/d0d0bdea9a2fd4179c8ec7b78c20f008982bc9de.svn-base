<?php include 'header2.php' ?>
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
<form action="<?php echo base_url();?>index.php?/castingfox2/advanced_filter" method="post">
	<div class="row clearfix">
		<div class="col-md-3 column" style="border-right:2px solid #DDD7D7">
		<div style="padding-bottom:40px;" class="font3">RELEVANCE</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" value="0"  class='myRadio'/><span style="display:table-cell;vertical-align:middle">&nbsp;Show all profiles</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show"  value="1" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Show bookmarks</span></div>
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
             <div id="slider-range3"></div>

              <div name="min_age" id="min-value3" ></div><div name="max_age" id="max-value3"></div>

       </div>

		</div>

		<div class="col-md-3 column">
		<div style="padding-bottom:25px;" class="font3">CITY</div>
		<div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Mumbai</span><input type="checkbox" name="city1" value="Mumbai" id="city1" class="myCheckBox" checked />
        <label for="city1" style="float:right;margin-bottom:0px !important"><span></span> </label></div>
        <div class="linelightgrey" style="width:102%"></div>
        <div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Navi Mumbai</span><input type="checkbox" name="city2" value="Navi Mumbai" id="city2" class="myCheckBox"  />
        <label for="city2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
       <div class="linelightgrey" style="width:102%"></div>
		</div>

	</div>
	<div class="row clearfix">
		<div class="col-md-10 column" style="padding-top: 25px;">
			<div class="row clearfix">
				<div class="col-md-4 column">
				<div class="font3">ETHNIC APPEARANCE</div>
		            <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">North Indian</span> <input type="checkbox" name="address[]" value="North-Indian" id="north_ind" class="myCheckBox" checked />
                      <label for="north_ind" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">South Indian</span> <input type="checkbox" name="address[]" value="South-Indian" id="south_ind" class="myCheckBox" checked />
                      <label for="south_ind" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">North-East Indian</span> <input type="checkbox" name="address[]" value="North-East-Indian" id="north_e" class="myCheckBox" checked />
                      <label for="north_e" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Sikh</span> <input type="checkbox" name="address[]" value="Sikh" id="s" class="myCheckBox" checked />
                      <label for="s" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

				</div>

				<div class="col-md-4 column">
				         <div style="display:block;height:21px; clear:both"></div>

				        <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">Nepali</span> <input type="checkbox" name="address[]" value="Nepali" id="nepali2" class="myCheckBox" checked />
                      <label for="nepali2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Caucasian (US/European)</span> <input type="checkbox" name="address[]" value="Caucasian-(US/European)" id="caucasian2" class="myCheckBox" checked />
                      <label for="caucasian2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Middle Eastern</span> <input type="checkbox" name="address[]" value="Middle-Eastern" id="middle_east2" class="myCheckBox" checked />
                      <label for="middle_east2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">East Asian (e.g. Chinese)</span> <input type="checkbox" name="address[]" value="East-Asian-(e.g. Chinese)" id="east_asian2" class="myCheckBox" checked />
                      <label for="east_asian2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

				</div>


				<div class="col-md-4 column">
				<div style="display:block;height:21px; clear:both"></div>
				        <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">African</span> <input type="checkbox" name="address[]" value="African" id="african2" class="myCheckBox" checked />
                      <label for="african2" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                       <div class="linelightgrey" style="width:102%"></div>

                       <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Mixed</span> <input type="checkbox" name="address[]" value="Mixed" id="mixed2" class="myCheckBox" style="float:right"/>
                      <label for="mixed2" style="float:right ;margin-bottom:0px !important"><span></span></label></div>
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
                                              <div style="padding-top: 10px;" ><input type="checkbox" name="eng" value="address1[]" id="eng" class="myCheckBox" /><label for="eng" class="font3" ><span></span></label><span class="font3">&nbsp;English</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Hindi" id="hindi" class="myCheckBox" /><label for="hindi" class="font3" ><span></span></label><span class="font3">&nbsp;Hindi</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Bengali/Bangla" id="bengali" class="myCheckBox" /><label for="bengali" class="font3" ><span></span></label><span class="font3">&nbsp;Bengali/Bangla</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Telugu" id="telugu" class="myCheckBox" /><label for="telugu" class="font3" ><span></span></label><span class="font3">&nbsp;Telugu</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Marathi" id="marathi" class="myCheckBox" /><label for="marathi" class="font3" ><span></span></label><span class="font3">&nbsp;Marathi</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Tamil" id="tamil" class="myCheckBox" /><label for="tamil" class="font3" ><span></span></label><span class="font3">&nbsp;Tamil</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Urdu" id="urdu" class="myCheckBox" /><label for="urdu" class="font3" ><span></span></label><span class="font3">&nbsp;Urdu</span></div>
                                   </div>
                                   <div class="col-md-6 column">
                                             <div style="padding-top: 10px;"><input type="checkbox" name="address1[]" value="Gujarati" id="gujrati" class="myCheckBox" /><label for="gujrati" class="font3" ><span></span></label><span class="font3">&nbsp;Gujarati</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Kannada" id="kannad" class="myCheckBox" /><label for="kannad" class="font3" ><span></span></label><span class="font3">&nbsp;Kannada</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Punjabi" id="punjabi" class="myCheckBox" /><label for="punjabi" class="font3" ><span></span></label><span class="font3">&nbsp;Punjabi</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Malayalam" id="malayalam" class="myCheckBox" /><label for="malayalam" class="font3" ><span></span></label><span class="font3">&nbsp;Malayalam</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Oriya" id="oriya" class="myCheckBox" /><label for="oriya" class="font3" ><span></span></label><span class="font3">&nbsp;Oriya</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Bhojpuri" id="bhojpuri" class="myCheckBox" /><label for="bhojpuri" class="font3" ><span></span></label><span class="font3">&nbsp;Bhojpuri</span></div>
                                          <div ><input type="checkbox" name="address1[]" value="Rajasthani" id="rajasthani" class="myCheckBox" /><label for="rajasthani" class="font3" ><span></span></label><span class="font3">&nbsp;Rajasthani</span></div>
                                   </div>





                            </div>  
                            <div class="col-md-6 column">
                              <div style="display:block;height:21px; clear:both"></div>
                               <div class="font3 text-center" style="padding-top:30px;padding-bottom:10px;">International</div>
                               <div class="linelightgrey" style="width:100%;"></div>   
                                   <div class="col-md-6 column">
                                           <div style="padding-top: 10px;" ><input type="checkbox" name="address2[]" value="Sign-language" id="signlang" class="myCheckBox" /><label for="signlang" class="font3" ><span></span></label><span class="font3">&nbsp;Sign language</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="Arabic" id="arabic" class="myCheckBox" /><label for="arabic" class="font3" ><span></span></label><span class="font3">&nbsp;Arabic</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="Cantonese/Mandarin" id="mandarin" class="myCheckBox" /><label for="mandarin" class="font3" ><span></span></label><span class="font3">&nbsp;Cantonese/Mandarin</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="French" id="french" class="myCheckBox" /><label for="french" class="font3" ><span></span></label><span class="font3">&nbsp;French</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="German" id="german" class="myCheckBox" /><label for="german" class="font3" ><span></span></label><span class="font3">&nbsp;German</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="Italian" id="italian" class="myCheckBox" /><label for="italian" class="font3" ><span></span></label><span class="font3">&nbsp;Italian</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="Japanese" id="japanese" class="myCheckBox" /><label for="japanese" class="font3" ><span></span></label><span class="font3">&nbsp;Japanese</span></div>

                                   </div>
                                   <div class="col-md-6 column">
                                          <div style="padding-top: 10px;"><input type="checkbox" name="address2[]" value="Nepali" id="nepali" class="myCheckBox" /><label for="nepali" class="font3" ><span></span></label><span class="font3">&nbsp;Nepali</span></div>                                                                            
                                          <div ><input type="checkbox" name="address2[]" value="Pashto" id="pashto" class="myCheckBox" /><label for="pashto" class="font3" ><span></span></label><span class="font3">&nbsp;Pashto</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="Russian" id="russian" class="myCheckBox" /><label for="russian" class="font3" ><span></span></label><span class="font3">&nbsp;Russian</span></div>
                                          <div ><input type="checkbox" name="address2[]" value="Spanish" id="spanish" class="myCheckBox" /><label for="spanish" class="font3" ><span></span></label><span class="font3">&nbsp;Spanish</span></div>
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
                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Photos</span> <input type="checkbox" name="photo" value="1" id="photo" class="myCheckBox" />
                                      <label for="photo" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Video Files</span> <input type="checkbox" name="video_files" value="1" id="video_files" class="myCheckBox"  />
                                      <label for="video_files" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>


                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Audio Files</span> <input type="checkbox" name="audio_files" value="1" id="audio_files" class="myCheckBox" />
                                      <label for="audio_files" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>
                                      <br/>
                                      <br/>
                                      <br/>
                                      <br/>
                                    
                          </div>

                          <div class="col-md-4 column" style="border-right:2px solid #DDD7D7;padding: 0px 25px;">
                                 <div class="font3" style="padding-top:10px;padding-bottom:30px;">OTHER FILTERS</div>
                                      <div style="padding-top: 5px;"><input type="checkbox" id="passport" name="passport" value="1" class="myCheckBox" /><label for="passport" class="font3" ><span></span></label><span class="font3">&nbsp;Only show actors with a valid passport.</span></div>
                                      <div style="padding-top: 5px;"><input type="checkbox" id="piercing" name="piercing" value="1" class="myCheckBox" /><label for="piercing" class="font3" ><span></span></label><span class="font3">&nbsp;Only show actors with visible piercings.</span></div>
                                      <div  style="padding-top: 5px;"><input type="checkbox" id="tattoo" name="tattoo" value="1" class="myCheckBox" /><label for="tattoo" class="font3" ><span></span></label><span class="font3">&nbsp;Only show actors with visible tattoos.</span></div>
                                      <br/>
                                      <br/>
                            
                                      
                          </div>
                      
                          <div class="col-md-4 column" style="padding: 0px 25px;">
                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">COMPLEXION</div>
                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">White (US/European)</span> <input type="checkbox" name="address3[]" value="White-(US/European)" id="white" class="myCheckBox" />
                                      <label for="white" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Fair (Kareena Kapoor)</span> <input type="checkbox" name="address3[]" value="Fair-(Kareena Kapoor)" id="fair" class="myCheckBox"  />
                                      <label for="fair" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>


                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Wheatish (Sonakshi Sinha)</span> <input type="checkbox" name="address3[]" value="Wheatish-(Sonakshi Sinha)" id="wheatish" class="myCheckBox" />
                                      <label for="wheatish" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Dusky (Bipasha Basu)</span> <input type="checkbox" name="address3[]" value="Dusky-(Bipasha Basu)" id="dusky" class="myCheckBox" />
                                      <label for="dusky" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>

                                      <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Dark brown (African)</span> <input type="checkbox" name="address3[]" value="Dark-brown-(African)" id="dark_brown" class="myCheckBox"  />
                                      <label for="dark_brown" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                      <div class="linelightgrey" style="width:102%"></div>


                                    
                          </div>
                       </div>


                        <div style="display:block;height:30px; clear:both"></div> 
                                <div class="row clearfix">
                                    <div class="col-md-4 column" style="border-right:2px solid #DDD7D7;padding: 0px 25px;">
                                         <div class="font3" style="padding-top:10px;padding-bottom:65px;">HEIGHT RANGE</div>
                                                <div style="position:relative;width:200px">
                                                   <div id="slider-range1"></div>
                                                      <div id="min-value1" name="h_min_value"></div><div id="max-value1" name="h_max_value"></div>

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
                                                      <div id="min-value2" name="w_min_value" ></div><div id="max-value2" name="w_max_value"></div>

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
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Thin/Slender</span> <input type="checkbox" name="address4[]" value="Thin/Slender" id="thin" class="myCheckBox" />
                                                  <label for="thin" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Athletic/Toned</span> <input type="checkbox" name="address4[]" value="Athletic/Toned" id="athletic" class="myCheckBox"  />
                                                  <label for="athletic" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Curvy</span> <input type="checkbox" name="address4[]" value="Curvy" id="curvy" class="myCheckBox" />
                                                  <label for="curvy" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Average</span> <input type="checkbox" name="address4[]" value="Average" id="average" class="myCheckBox" />
                                                  <label for="average" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Heavyset/Stocky</span> <input type="checkbox" name="address4[]" value="Heavyset/Stocky" id="heavyset" class="myCheckBox"  />
                                                  <label for="heavyset" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Plus-size</span> <input type="checkbox" name="address4[]" value="Plus-size" id="plussize" class="myCheckBox"  />
                                                  <label for="plussize" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Muscular/Body builder</span> <input type="checkbox" value="Muscular/Body-builder" name="address4[]" id="muscular" class="myCheckBox"  />
                                                  <label for="muscular" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>                     
                                    </div>
                                </div>         
                              <div style="display:block;height:30px; clear:both"></div>
                                 <div class="row clearfix">
                                    <div class="col-md-4 column" style="padding: 0px 25px 6px 25px;border-right:2px solid #DDD7D7;">
                                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">HAIR LENGTH</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Bald (total)</span> <input type="checkbox" value="Bald-(total)" name="address5[]" id="bald_total" class="myCheckBox" />
                                                  <label for="bald_total" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Bald on top</span> <input type="checkbox" value="Bald-on-top" name="address5[]" id="bald_top" class="myCheckBox"  />
                                                  <label for="bald_top" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Receding hairline</span> <input type="checkbox" value="Receding-hairline" name="address5[]" id="receding" class="myCheckBox" />
                                                  <label for="receding" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Short hair</span> <input type="checkbox" value="Short-hair" name="address5[]" id="short_hair" class="myCheckBox" />
                                                  <label for="short_hair" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Ear-length</span> <input type="checkbox" value="Ear-length" name="address5[]" id="ear_leng" class="myCheckBox"  />
                                                  <label for="ear_leng" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Chin-length</span> <input type="checkbox" value="Chin-length" name="address5[]" id="chin_length" class="myCheckBox"  />
                                                  <label for="chin_length" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Shoulder-length</span> <input type="checkbox" value="Shoulder-length" name="address5[]" id="shoulder_leng" class="myCheckBox"  />
                                                  <label for="shoulder_leng" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Below shoulder</span> <input type="checkbox" value="Below-shoulder" name="address5[]" id="below_should" class="myCheckBox"  />
                                                  <label for="below_should" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  
                                                  <br/>
                                                  <br/>
                                                  <br/>

                                    </div>

                                     <div class="col-md-4 column" style="padding: 0px 25px;border-right:2px solid #DDD7D7;">
                                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">HAIR COLOUR</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Bald</span> <input type="checkbox" value="Bald" name="address6[]" id="bald_color" class="myCheckBox" />
                                                  <label for="bald_color" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Black</span> <input type="checkbox" value="Black" name="address6[]" id="black" class="myCheckBox"  />
                                                  <label for="black" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Dark brown</span> <input type="checkbox" value="Dark-brown" name="address6[]" id="dark_brown" class="myCheckBox" />
                                                  <label for="dark_brown" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Light brown</span> <input type="checkbox" value="Light-brown" name="address6[]" id="light_brown" class="myCheckBox" />
                                                  <label for="light_brown" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Salt and pepper</span> <input type="checkbox" value="Salt-and-pepper" name="address6[]" id="salt_pepper" class="myCheckBox"  />
                                                  <label for="salt_pepper" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Grey</span> <input type="checkbox" value="Grey" name="address6[]" id="grey" class="myCheckBox"  />
                                                  <label for="grey" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                   <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">White/Silver</span> <input type="checkbox" value="White/Silver" name="address6[]" id="white_silver" class="myCheckBox"  />
                                                  <label for="white_silver" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  

                                                    <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Blonde/Yellow</span> <input type="checkbox" value="Blonde/Yellow" name="address6[]" id="blonde_yellow" class="myCheckBox"  />
                                                  <label for="blonde_yellow" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  

                                                    <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Red</span> <input type="checkbox" value="Red" name="address6[]" id="red" class="myCheckBox"  />
                                                  <label for="red" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>  

                                                    <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Mixed/Other</span> <input type="checkbox" value="Mixed/Other" name="address6[]" id="mixed_other" class="myCheckBox"  />
                                                  <label for="mixed_other" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>                     
                                    </div>


                                      <div class="col-md-4 column" style="padding: 0px 25px;">
                                                <div class="font3" style="padding-top:10px;padding-bottom:30px;">EYE COLOUR</div>
                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Black</span> <input type="checkbox" name="address7[]" value="Black" id="black_eye" class="myCheckBox" />
                                                  <label for="black_eye" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Brown</span> <input type="checkbox" value="Brown" name="address7[]" id="brown_eye" class="myCheckBox"  />
                                                  <label for="brown_eye" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>


                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Hazel</span> <input type="checkbox" value="Hazel" name="address7[]" id="hazel" class="myCheckBox" />
                                                  <label for="hazel" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Grey</span> <input type="checkbox" value="Grey" name="address7[]" id="grey_eye" class="myCheckBox" />
                                                  <label for="grey_eye" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                  <div style="padding-top:5px;padding-bottom:5px;"><span style="padding-left: 10px;" class="font3">Green</span> <input type="checkbox" value="Green" name="address7[]" id="green_eye" class="myCheckBox"  />
                                                  <label for="green_eye" style="float:right;margin-bottom:0px !important"><span></span></label></div>
                                                  <div class="linelightgrey" style="width:102%"></div>

                                                                     
                                    </div>
                                </div>

                                <div class="text-center" style="padding:80px 0px;">  <button type="submit" id="submit" class="myBtn button1 "style="width: 250px;">Update</button></div>
              </form>

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
    $( "#slider-range3" ).slider({
      range: true,
      min: 10,
      max: 80,
      values: [ 20, 70 ],
      slide: function( event, ui ) {
        $( "#min-value3" ).html(ui.values[ 0 ]);
        $( "#max-value3" ).html(ui.values[ 1 ]);
      }
      
    /*  change: function( event, ui ) {
        $( "#min-value3" ).html(ui.values[ 0 ]);
        $( "#max-value3" ).html(ui.values[ 1 ]);
        var min_age_1=ui.values[ 0 ];
                  var max_age_1=ui.values[ 1 ];

    

                 $.ajax({
                             type: "post",
                              url: "<?php echo base_url();?>index.php?/castingfox2/advanced_filter",
                            // dataType: 'html',
                             data:"min_age="+min_age_1+"max_age="+max_age_1,
                               success:function(responseData1)
                               { 
                                alert(responseData1);
                                
                                                                                   
                                    },
                                   error: function()
                                   {
                                       alert('failure');
                                   }
                       });                                
                     

      }*/
    });
    $( "#min-value3" ).html($( "#slider-range3" ).slider( "values", 0));
     $( "#max-value3" ).html($( "#slider-range3" ).slider( "values", 1));

  });

   $(function() {
    $( "#slider-range1" ).slider({
      range: true,
      min: 10,
      max: 80,
      values: [ 20, 70 ],
      slide: function( event, ui ) {
        $( "#min-value1" ).html(ui.values[ 0 ]);
        $( "#max-value1" ).html(ui.values[ 1 ]);
    }
       
    });
    $( "#min-value1" ).html($( "#slider-range1" ).slider( "values", 0));
     $( "#max-value1" ).html($( "#slider-range1" ).slider( "values", 1));
  });

    $(function() {
    $( "#slider-range2" ).slider({
      range: true,
      min: 10,
      max: 80,
      values: [ 20, 70 ],
      slide: function( event, ui ) {
        $( "#min-value2" ).html(ui.values[ 0 ]);
        $( "#max-value2" ).html(ui.values[ 1 ]);

      },
      
    });
    $( "#min-value2" ).html($( "#slider-range2" ).slider( "values", 0));
     $( "#max-value2" ).html($( "#slider-range2" ).slider( "values", 1));
  });

 </script>


                 <!--<script type="text/javascript">
            
                  $("#submit").click(function(){
                  var min_age_1=$("#min-value").val();
                  var max_age_1=$("#max-value").val();

    

                 $.ajax({
                             type: "post",
                              url: "<?php //echo base_url();?>index.php?/castingfox2/advanced_filter",
                            // dataType: 'html',
                             data:"min_age="+min_age_1+"max_age="+max_age_1,
                               success:function(responseData1)
                               { 
                                alert(responseData1);
                                
                                                                                   
                                    },
                                   error: function()
                                   {
                                       alert('failure');
                                   }
                       });                                
 

                    

  });

</script>-->

<?php include 'footer.php' ?>