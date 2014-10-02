<?php include 'header.php';?>

<div class="container1 containerBG2">
	<div class="row clearfix" >
	<h1 class="text-center font9" style="padding:15px 0px;">
					  REVIEW YOUR CASTING NOTICE.
					</h1>
		<div class="col-md-1 column"></div>			
		<div class="col-md-10 column">
			<div class="row clearfix" style="background-color:#fbfbfb;">
      <div style="float:right;padding: 10px 10px;"> <?php if($can_view=='agents'){?><button class="myBtn button2" style="width: 238px;">EXCLUSIVELY FOR AGENTS</button><?php } ?></div>
			<div class="padding50" style="float:left;padding-top:50px;">
				<div class="font3"><?php echo $production_type; ?></div>
                 <div class="font3" style="font-size:14px;"><?php echo ucfirst($casting_title); ?></div>
                 <div class="font5 ">Robert Ballo and Heidi Dotso</div>
                 
			</div>
			<center><div class="linelightgrey" style="width:91% !important;padding-top:117px;"></div> </center><br/>

				<div class="col-md-6 column padding50" style="padding-top: 15px;width:511px;height: 241px;padding-right: 0px;">
                     <div class="tabbable" id="tabs" >
				        <ul class="nav nav-tabs font5 " style="border-color:transparent!important;">
					        <li >
						         <a  href="#tab1" class="font5 tabs anchor" data-toggle="tab" >DESCRIPTION</a>
					        </li>
					        <li >
						         <a  href="#tab2" class="font5 tabs anchor" data-toggle="tab" >DATES</a>
					        </li>
					        <li >
						         <a  href="#tab3" class="font5 tabs anchor" data-toggle="tab">PRODUCTIONINFO</a>
					        </li>
				        </ul>
                     </div>
                     <div class="tab-content">
					      <div class="tab-pane active" id="tab1"><br/><br/>
                            <div id="" class="vertical-content content font3" style="width:460px !important;height:142px; !important;border-bottom: 0px;
border-left: 0px;border-top: 0px !important"><span>STORY LINE:</span> <?php echo ucfirst($description); ?>

                            </div>
                           </div>

                           <div class="tab-pane" id="tab2"><br/><br/>
                            <div class="row-clearfix" style="width:460px !important;height:142px; !important;border:0px; !important">
                                 <div class="col-md-6 column">
                                 <div class="font2" style="float:right;">NOTICE EXPIRES ON</div>
                                 <div class="font2" style="float:right;padding-top: 15px;">INTERVIEW/AUDITION</div>
                                 <div class="font2" style="float:right;padding-top: 15px;">CALLBACKS</div>
                                 <div class="font2" style="float:right;padding-top: 15px;">SHOOT/START DATE</div>
                                 </div>
                                 <div class=" col-md-6 column">
                                 	<div class="font3" ><?php echo $exp_date; ?></div>
                                    <div class="font3" style="padding-top: 15px;"><?php echo $audition_date; ?></div>
                                    <div class="font3" style="padding-top: 15px;"><?php echo $call_back_date; ?></div>
                                    <div class="font3" style="padding-top: 15px;"><?php echo $shooting_date; ?></div>
                                 </div>
                            </div>
                                 

                            </div>
                            
                            <div class="tab-pane" id="tab3"><br/><br/>
                         <div id="" class="content vertical-content font3" style="width:460px !important;height:142px; !important;border-bottom: 0px;
border-left: 0px;border-top: 0px !important;">
                               <div class="font2 ">PRODUCTION COMPANY:</div>
                               <div class="font3 "><?php echo ucfirst($production_company); ?></div>   
                               <div class="font2 " style="padding-top: 10px">CASTING DIRECTOR:</div>
                               <div class="font3 "><?php echo ucfirst($casting_director); ?></div>
                               <div class="font2 " style="padding-top: 10px">PRODUCTION LOCATION:</div>
                               <div class="font3 "><?php echo ucfirst($production_location);?></div>
                               <div class="font2 " style="padding-top: 10px">TEAM/PRODUCTION INFO:</div>
                               <div class="font3 "><?php echo ucfirst($casting_team_info); ?></div>
                                </div>
                           </div>


                           </div>

                            
                     </div>
               
				


				<div class="col-md-6 column padding50" style="padding-top: 15px;width:511px;height: 241px;">
				<div class="round" style="padding: 20px 20px;">
					<div >
					      <span class="font2" style="font-size:14px;">POSTED:</span><span class="font3" >&nbsp;&nbsp;2 hours ago (Thu, May 8, 2014 at 6:00PM)</span>
                          <span class="font2" style="font-size:14px;">EXPIRES:</span><span class="font3" >&nbsp;&nbsp;7 days left (<?php echo $exp_day; ?>, <?php echo $exp_date; ?> at 6:00PM)</span>
                    </div>
                    <div class="linelightgrey" style="width:100% !important;padding-top:10px;"></div>

                          <div style="padding-top:10px;">
                              <span class="font2" style="font-size:14px;">LANGUAGE:</span><span class="font3" >&nbsp;&nbsp;<?php echo ucfirst($language); ?></span><br/>
                              <span class="font2" style="font-size:14px;">SEEKING TALENT FROM:</span><span class="font3" >&nbsp;&nbsp;Mumbai</span>
                          </div>
                    <div class="linelightgrey" style="width:100% !important;padding-top:10px;"></div> 

                    <div style="padding-top:10px;"><span class="font2" style="font-size:14px;">PAY RATE:</span><span class="font3" >&nbsp;&nbsp;<?php echo ucfirst($pay_role); ?>
                    </span></div>
                   


				</div>
				
				</div>
                 <center> <div class="linelightgrey" style="width:91% !important;padding-top: 275px;"></div></center>
                          <div class="padding50" style='padding-top:30px;'>
                             <div class="font2">ROLES/JOBS:</div>
                           <?php  foreach($character as $rows)
                             {
                              $char_role_type=$rows->char_role_type;
                              $char_gender=$rows->char_gender;
                              $char_age=$rows->char_min_age."-".$rows->char_max_age;
                              $char_name=$rows->char_name;
                              $char_role_desc=$rows->char_role_desc;
                              ?>
                             <div class="round" style="width:923px;">
                             	<div class="col-md-4 column" style="padding: 23px 32px;">
                                <div style="font-weight: 600;font-size: 18px;" class="font2"><?php echo strtoupper($char_role_type); ?></div>
                                <div ><?php echo ucfirst($char_gender); ?> , <?php echo $char_age;?></div><br/>
                                <div ><?php echo ucfirst($char_name);?></div>
                              </div>
                             	<div class="col-md-5 column" style="padding: 23px 0px;">
                               <div id="" class="content vertical-content font3" style="width:411px !important;height:80px; !important;border-bottom: 0px;
border-left: 0px;border-top: 0px !important"><?php echo ucfirst($char_role_desc); ?>  </div> </div>
                                	<div class="col-md-3 column" style="padding: 23px 73px;">
                                		<button class="squarebtn button2 fontsize12 font9" style='padding: 15px 30px;border:none;background:#DDD7D7 !important'>Submit<br/> yourself</button>
                                	</div>
                             </div>
                             <?php } ?>


                          </div>
                 <center> <div class="linelightgrey" style="width:91% !important;padding: 15px 0px;"></div></center>
                 <div class="padding50" style="padding-top:35px;">
                       <div class="round" style="width:923px;padding: 25px 21px;background:#fcfcfc;">
                          <div class="font2" style='padding-bottom:22px;font-size:18px;'>Additional notes from Casting</div>
                          <div class=" font1"><?php echo ucfirst($notes_for_actor);?></div>
                       </div><br/><br/>
                       <div class="round" style="width:923px;padding: 25px 21px;background:#fcfcfc;">
                           <div class="font2" style="font-size:18px;padding-bottom:22px;">Submission instructions</div>
                           <div style="padding-bottom:18px;">Please send your submission via <?php echo $wherer_the_submit; ?>. </div>
                           <div style="padding-bottom:18px;">Submitting within the first day of the notice is highly recommended. If possible, please submit online demo clips along with your submission.</div>
                           <div style="padding-bottom:18px;">Your submission will be sent to the Casting Director of this project. If you are shortlisted, you will be contacted by the Casting Director via your Audition Fox account with further instructions. </div>
                           <div>Please keep checking the messages in your account for updates on this project.</div>
                       </div>
                 </div>
                <center> <div class="linelightgrey" style="width:91% !important;padding: 15px 0px;"></div></center>
                     <div class='text-center' style='padding-top:28px;'>
                     <button class="myBtn button2" style="width: 183px;">Edit this post</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="myBtn button1" style="width: 183px;">Publish this casting</button>
                     </div> <br/> <br/> <br/>
                     <div style="padding-left:24px;" ><button class="myBtn button4" style="color:#DDD7D7 !important;background:#fcfcfc;" ><i class="glyphicon glyphicon-circle-arrow-left" style="color:#DDD7D7 !important; "></i>&nbsp;BACK TO MY POSTING</button></div>          
	                  <br/>
                    <br/>

  		</div>
		</div>
		<div class="col-md-1 column"></div>
	</div>
</div>

  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
(function($){
      $(window).load(function(){
        
         $(".vertical-content").mCustomScrollbar({
                theme:"light-3",
                scrollButtons:{
               enable:true
                  }
      }); });
    })(jQuery);
  </script>

<?php include 'footer.php';?>
