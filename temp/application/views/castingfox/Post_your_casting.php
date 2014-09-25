<?php include 'header.php'; ?>
		<script type="text/javascript">
	var json={"options":[{"option":"film","values":[{"subValue":"Feature Film","language":"1"},{"subValue":"short Film","language":"1"},{"subValue":"Student Film","language":"1"}]},{"option":"TV & Video","values":[{"subValue":"Scripted TV/Video(e.g. Balika Vadhu)","language":"1"},{"subValue":"Reality TV(e.g. Bigg Boss)","language":"1"},{"subValue":"Documentary","language":"1"},{"subValue":"Music video","language":"1"},{"subValue":"Corporate video","language":"1"},{"subValue":"Internet video","language":"1"}]},{"option":"Theatre","values":[{"subValue":"Play","language":"1"},{"subValue":"Musical","language":"1"}]},{"option":"Advertisement","values":[{"subValue":"Print ad","language":"0"},{"subValue":"TV/Video ad","language":"1"}]},{"option":" Modeling","values":[{"subValue":"Print modeling","language":"0"},{"subValue":"Event modeling","language":"0"},{"subValue":"Fashion & Runway","language":"0"}]},{"option":" Voiceover","values":[{"subValue":"","language":"1"}]},{"option":" Performing arts","values":[{"subValue":"Dancers","language":"0"},{"subValue":"Choreographers","language":"1"},{"subValue":"Singers","language":"1"},{"subValue":"Musicians/Composers","language":"1"},{"subValue":"Comedians","language":"1"},{"subValue":"Stunts/Other skills","language":"0"}]},{"option":"Team/Crew","values":[{"subValue":"Production team(e.g. Production managers, Assistant Directors, Casting, etc.)","language":"1"},{"subValue":"Technical team  (e.g. Lights, Camera, Art, Costume, Make-up, Special effects, Stunts, Sound, etc.)","language":"1"},{"subValue":"Writers","language":"1"}]}]};
  function radioChange()
  {

	  var radioIndex=$("input[type=radio]:checked").val();
	  var index=document.getElementById("selectBox").value;
	  var lan=json.options[index].values[radioIndex].language;
					if(lan=="0")
				{
					
				            $("#content3").css("display","none");	
				}
				else
				{
					
					  $("#content3").css("display","block");	
				}
 
  }   
	function SelectionChange()
	{
var flag=0;
	var str2="";
	var index=document.getElementById("selectBox").value;
	for (var i = 0; i < json.options[index].values.length; i++) {
		debugger;
		if(json.options[index].values[i].subValue==''){}
	else{
		flag=1;
		if(i==0)
		  str2+= "<div><input type=radio onchange='radioChange()' class='myRadio' name=cc value="+i+" checked><label>"+json.options[index].values[i].subValue+"</label></div>";
		else
			 str2+= "<div><input type=radio onchange='radioChange()' class='myRadio' name=cc value="+i+" ><label>"+json.options[index].values[i].subValue+"</label></div>";
		}
	}
	 if(flag==0){
  $("#content3").css("display","block");
   document.getElementById("radioBox").innerHTML="";

	 }else{
	 document.getElementById("radioBox").innerHTML=str2;
	radioChange();
}

	}




</script>
<div class="container1 containerBG2">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="text-center font9" style="padding: 15px 0px" >
				POST YOUR CASTING.
			</h2></div>
			<div class="col-md-1 column"></div>
			<div class="col-md-10 column">			
			<div class="row clearfix" style="background:#fcfcfc;">
				<br/><br/>
					<div class="text-center ">
						<h5 style="font-weight:bolder; !important; font-size: 22px; " class='font2'>ENTER CASTING DETAILS.</h5>
						<span class="font3 ">Your casting will be posted within 24 hours (post verification).</span>
					</div>
					
					<div class="text-center">
						<span class="font5 fontsize11">Call (+91) 900 407 4435 for urgent verification.</span>
					</div><br/><br/>
					<center><div class="linelightgrey"></div></center><br/><br/>

		        <form action="<?php echo base_url(); ?>castingfox/postCasting" method="post">
				<div class="padding25 font3"><h5>Production details</h5></div>
				
					<div class="row clearfix">
						<div class="col-md-12 column" ><br/><br/>
						<div class="padding50">
							<div> <span class="font3" >Production title/ Project name</span><br/>
							 <input type="text" class="width  paddingtopbottom font3" name="projectname" placeholder="e.g Mother India" requireVal="true" /></div> 
							
							
							<div> <div class=" font3" style="padding-top:20px;" >Production type</div>
							 <select onchange="SelectionChange()" name="productionType" class=" paddingtopbottom width font3" id="selectBox" name="productionType" >
										 </select>
							<div id="radioBox"></div>
									<script type="text/javascript">
                                     var str="";
                                     for (var i = 0; i < json.options.length; i++) {
	                                 str+= "<option value="+i+" >"+json.options[i].option+"</option>";
    	                                }

                                     document.getElementById("selectBox").innerHTML=str;
                                     SelectionChange();
                                     
                                     </script>
							 </div> 

				
		                  <div id="radiobox" style="padding-top:20px;" ></div>					
							<div class="row clearfix">
								<div id="content3" class="col-md-3 column"  style='padding-top:20px;margin-left:-15px;'>
									 <div class=" font3" >Language</div>
									 <input type="text" name='language' class="paddingtopbottom font3" placeholder="" requireVal="true"/>
								</div>

								<div class="col-md-6 column" style='padding-top:20px;'>
									 <div class=" font3"  >Production Company</div>
									  <input type="text" name="production company" class="paddingtopbottom font3" placeholder="e.g Mehboob productions" requireVal="true" style="width:430px;"/>
								</div>

								<div class="col-md-3 column" style='padding-top:20px;padding-left:63px;'>
									 <div class=" font3" >Casting Director</div>
									  <input type="text" name="castingDirector" class="paddingtopbottom font3" placeholder="e.g Nazir Ahmed" style="width: 170px;" requireVal="true"/>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-md-6 column"  style='padding-top:20px;margin-left:-15px;'>
									  <div class=" font3" >Project description/synopsis <span class="font5"><a href="" class="anchor"><u>(view example)</u></a></span></div>
									  <textarea rows="5" cols="65" name="description" class="paddingtopbottom font3" requireVal="true"></textarea>
									  <div class=" font3"  style='padding-top:20px;'>Production Location(s)</div>
									  <input type="text" class="paddingtopbottom font3" name="productionLocation" placeholder="e.g Mumbai Umra Village(Gujarat) " style="width:427px;" requireVal="true"/>
								</div>
								<div class="col-md-6 column" style='padding-top:20px;float:right;'>
									<div class="font3" >Team/ production info (optional)</div>
									<textarea rows="5" cols="65" name="teamInfo" class="paddingtopbottom font3 " requireVal="true" placeholder="e.g. Written by:Mehboob Khan, Wajahat Mirza Cinematography:Faredoon Irani Studio:Mehboob Productions"></textarea>
								</div>
							</div> <br/><br/>
							</div>
							<div class="linelightgrey" style="width:99% !important"></div><br/>
                            <div class="padding25 font3"><h5>Manage submissions</h5></div>
                            <div class='padding50'>
							 <div class="font3" style='padding-top:20px;'>Who can view this casting notice?</div>							
							
								<div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="view" value="agents and actors" /><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;Agents and actors </span><span class="font5 font3" style="display: table-cell;vertical-align: middle;">(use this if you want more submissions)</span></div>
							
							
								<div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="view" value="agents"/><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp; Only agents</span>
								<span class="font5 font3" style="display: table-cell;vertical-align: middle;">(use this if your casting is highly confidential)</span></div>

							    <div class="font3" style="padding-top:20px;" >Where the agents/actors should submit their submissions</div>                				
								<div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="whereSubmit" value="casting account"/><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;To my casting fox account.</span><span class="font5 font3" style="display: table-cell;vertical-align: middle;">(free tool to manage portfolios,shortlist actors and schedule auditions)</span></div>
							
							
								<div style='display:table;padding-left:10px;padding-bottom:20px;'><input type="radio" name="whereSubmit" class='myRadio' value="office address/email/website" name="whereSubmit"/><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;To my office address/email/website.</span>
							    </div>
							    <div style="margin-left:20px;padding-bottom: 35px;">
							       <div><span class="font3">Specify submission instructions</span><span class="font5 font3"><a href="" class="anchor"><u>(view example)</u></a></span></div>
                                    <textarea rows="5" cols="135" class="paddingtopbottom font3" placeholder=""  requireVal="true"></textarea>     
							    </div>
							  </div>  
						<div class="linelightgrey" style="width:99% !important"></div><br/>
                             <div class="padding25 "><h5>Dates and Compensation </h5></div>	  
							 <div class='padding50'>
							    <div class="font3" style='padding-top:20px;'>When does the listing expire</div>				
							    <div class="row clearfix" style='padding-top:1px;'>
										<div class="col-md-1 column">
											 <input type="text" name="dd" class="paddingtopbottom font3" placeholder="DD" requireVal="true" style="width:50px;">
										</div>
										<div class="col-md-1 column" style='padding-left:0px;'>
											  <input type="text" name="mm" class="paddingtopbottom font3 " placeholder="MM"  requireVal="true" style="width:50px;">
										</div>
										<div class="col-md-1 column" style='margin-left:-30px;'>
											  <input type="text" name="yy" class="paddingtopbottom font3" placeholder="YYYY"  requireVal="true" style="width:70px;">
										</div>
										<div class="col-md-1 column">
										</div>
										<div class="col-md-8 column">
										</div>
							    </div>
							    <div class="row clearfix">
										<div class="col-md-4 column">
											 <div class="font3" style='padding-top:20px; margin-left: -15px;'>Interview/audition date<span class="font5 font3">(Optional)</span></div>
											  <input type="text" class="paddingtopbottom font3 width" name="auditionDate" placeholder=" e.g. August 20-25th" requireVal="true"/> 
										</div>
										<div class="col-md-4 column">
											<div style='padding-top:16px;'><span class="font3" >Call back date </span><span class="font5 font3">(Optional)</span></div>
										    <div> <input type="text" class="paddingtopbottom font3 width" name="callBackDate" placeholder="e.g. September 5-10th 2014" requireVal="true"/></div>
										</div>
										<div class="col-md-4 column">
											 <div class="font3" style='padding-top:18px;'>Shoot/Start Date</div>
											  <input type="text" class="paddingtopbottom font3 width" name="shootingDate" placeholder="e.g. October 1st 2014" requireVal="true"/>
										</div>
								</div>
								<div class="row clearfix">
										<div class="col-md-6 column" style="padding-top: 20px;margin-left: -15px;">
											 <span class="font3">Will you give monetary payment to actors?</span>
											<div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="payment" value="yes"/><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;Yes</span></div>
										    <div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="payment" value="no"/><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;No</span></div>											
										</div>
										<div class="col-md-6 column" style="padding-top: 20px;">
											 <span class="font3">Pay rate/Compensation rate</span>
											 <textarea rows="5" cols="64" class="paddingtopbottom font3" requireVal="true" name="payRate" placeholder="e.g Rs.12 lakh for 6 months of shooting. Will provide travel and expenses. Will give screen credit and DVD copy"></textarea>
										</div>
									</div>
									<div style='padding-top:20px;padding-bottom:35px;'>
									   <div><span class='font3' > Additional Notes for actors </span><span class='font5 font3'>&nbsp;(Optional)</span></div>
                                       <textarea rows="5" cols="139" name='notesForActor' requireVal="true" class="paddingtopbottom font3" placeholder="e.g. Attach videos of your past performance. Submit photos that match the “look” of the character. Reply with your
                                        availability during shooting dates. Be prepared to sing in the audition."></textarea>
                                    </div>

                             </div>
                          <div class="linelightgrey" style="width:99% !important"></div><br/>
                             <div class="padding25 "><h5>Character descriptions </h5></div>  
                             <div class='padding50'> 
                             	<div> <span class="font3">Does the project require nudity?</span>
                                 <div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="requires_nudity" value="no" /><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;There are no nude or semi-nude scenes in this project</span></div>
                                 <div style='display:table;padding-left:10px;'><input type="radio" class='myRadio' name="requires_nudity" value="yes"/><span class="font3" style="display: table-cell;vertical-align: middle;">&nbsp;&nbsp;Yes, there is nudity in this project</span></div>
                                </div>

                                <div style="padding-top:20px;padding-bottom:30px;">
                                     <span class="font3">Which cities/regions do you need actors/performers from?</span>
                                     <div style='display:table;padding-left:10px;'><input type="checkbox" id="city" name="city" class="myCheckBox" value="mumbai"/><label for="city" class="font3" style="font-weight:500 !important;"><span></span>&nbsp;Mumbai</label></div>
                                     <div style='display:table;padding-left:10px;'><input type="checkbox" id="city1"   name="city1" class="myCheckBox" value='navi Mumbai' /><label for="city1" class="font3" style="font-weight:500 !important;"><span></span>&nbsp; Navi Mumbai</label></div>
                                     <span class="font3 font5">(Coming soon: Delhi and Chennai)</span>   
                                </div>

                                 <div class="font3 " style="padding-bottom:10px;">Enter descriptions for each character:</div> 
                                 <div>
                                 <div class="col-md-12 column round" style="background:#f2f2f2;padding-top:10px;">
                                 	<div class="row clearfix">
												<div class="col-md-4 column">
												   <div class="font3">Character1</div>
												   <input type='text' class="paddingtopbottom font3" name="characterName" style="width:250px;height:26px;" requireVal="true" placeholder="e.g.Radha" />
												</div>
												<div class="col-md-2 column">
												   <div class="font3">Gender</div>
												   <select name="gender" class=" paddingtopbottom font7" style="width:115px;height:26px;" >
							                          <option >Select</option>
							                           <option >Male</option>
							                           <option >Female</option>
							                           <option >Any</option>
							                          

							                       </select>
							
												</div>
												<div class="col-md-3 column">
												   <div class="font3">Age Range</div>
												   <input name="age" type='text' class="paddingtopbottom font3" style="width:180px;height:26px;" requireVal="true" placeholder="e.g. 20-30" />
												</div>
												<div class="col-md-3 column">
												    <div class="font3">Type of role</div>
												     <select name="typeOfRole" class=" paddingtopbottom  font7" style="width:174px;height:26px;" >
							                           <option >Select</option>
							                           <option >Lead</option>
							                           <option >Supporting</option>
							                           <option >Chorus/Group</option>
							                           <option >Background role</option>
							                           <option >(Not applicable)</option>                       
							                         </select>
												</div>
										</div>
                                   <div style="padding-left:15px;padding-top:10px;"> <div id="id" class="font3">Role desciption/Note <span class="font5"><a href="" id="element" class="anchor"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="6767676767666666666" ><u>(view example)</u></a></span></div>
                                     <textarea name="roleDescription" rows="5" cols="133" class="paddingtopbottomfontsize11" requireVal="true" placeholder=""></textarea></div> 
                                  <br/>
                                  <div class="text-center" style="padding-left:15px;">
                                  <span style="float:left;display:table;"><input type="checkbox" id="nudity" class="myCheckBox" name="nudity" value="1" /><label for="nudity" class="font3" style="font-weight:500 !important;"><span></span>&nbsp;&nbsp; Requires Nudity</label></span>
                                  	 <button class="myBtn button4 font3" style="color:#333333 !important;background:#f2f2f2 !important" ><div class="moveUp" style="display:inline-block;margin-top:-6px;color:rgb(89,89,89) !important"></div><span>&nbsp;Move up</span></button>
                                  	  <button class="myBtn button4 font3" style="color:#333333 !important;background:#f2f2f2 !important" ><div class="moveDown" style="display:inline-block;color:rgb(89,89,89) !important"></div><span>&nbsp;Move down</span></button>
                                  	   <span><button class="myBtn button4 font3" style="color:#333333 !important;background:#f2f2f2 !important" ><i class="glyphicon glyphicon-trash" style="color:rgb(89,89,89) !important;"></i>&nbsp;Delete</button></span>
                                  </div>
                                  <br/>
                                 </div>
                                 </div>
                                 </div>
                                 <div class='text-center' style="padding-bottom:35px;padding-top:20px;"> <button class="myBtn button4" style="color:#333333 !important;background:#fcfcfc;" ><i class="glyphicon glyphicon-plus-sign" style="color:rgb(89,89,89) !important; "></i>&nbsp;ADD ANOTHER ROLE</button></div>
                                   <div class="linelightgrey" style="width:99% !important"></div><br/>
                                      <div class="padding25 "><h5>Instructions for the Casting fox team </h5></div>  
                                       <div class='padding50'> 
                                       <div class="font3">Any notes/clarifications for Casting fox  (i.e. not for actors)<span class="font5">&nbsp;(optional)</span></div>
                                       <textarea rows="5" cols="167" name="noteCastingFox"class="padding10 fontsize11" placeholder=""></textarea>
                                       </div><br/><br/>
                                       <div class="linelightgrey" style="width:99% !important"></div><br/>
                                       <div class="text-center">  <button type="submit" class="myBtn button1 font3" style="width: 235px;">Preview your casting notice</button><br><br><br><br><br></div>
                                         </form>
                                         <!-- <button type="button" id='element' class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="6767676767666666666">
  Popover on left
</button>-->

			<div class="col-md-1 column"></div>
		</div>
	</div>
</div><br/><br/><br/>
</div>
</div>
</div>
<script>
$("button").click(function(){
    var valid=1;
var validate=$("input[requireVal='true']");  
for(var i=0;i<validate.length;i++)
{
    if($(validate[i]).val()==''){   
    $(validate[i]).addClass("error");
        valid=0;
    }
    else
    {
        if(  $(validate[i]).hasClass("error"))
          $(validate[i]).removeClass("error");    
        }

}
    if(!valid)
        return false;
    else
    return true;


});
//$("#commentForm").validate();
</script>

		


<?php include 'footer.php'; ?>


