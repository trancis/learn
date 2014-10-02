<?php include 'header.php'; ?>
<div class="container" style="background:#fbfbfb; width:100%;">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center ">
				<div class="font2">
					FIND ACTORS
				</div></h3>
				<center><div class="font3">
					Browse profiles of professional actors.
				</div></center>
			<br/>
			<div class="row clearfix">
				<div class="col-md-1 column">
				</div>
				<div class="col-md-10 column">
					<div class="row clearfix">
						<div class="tabbable" id="tabs">
				<ul class="nav nav-tabs">
					<li >
					<div style="display: table; margin: 0px auto;"><span style="display:block;" class="narrowlist"></span></div>
						<a href="#tab1" class="anchor font3" data-toggle="tab" style="margin-left:124px;" onclick="tabOpen()">NARROW THIS LIST</a>
					</li>
					<li >
					<div style="display: table; margin: 0px auto;"><span style="display:block;" class="searchlisticon"></span></div>
						<a href="#tab2" class="anchor font3" data-toggle="tab" style="margin-left: 138px;" onclick="tabSearchOpen()">SEARCH</a>
					</li>
					<li >
					<div style="display: table; margin: 0px auto;"><span style="display:block;" class="sorticon"></span></div>
						<a href="#tab3" class="anchor font3" data-toggle="tab" style="margin-left: 154px;"  onclick="tabSortOpen()">SORT BY:Latest profile</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane " id="tab1">
<div style="position:relative;" >
		<div id="TrSlider1" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;-moz-border-radius:5px; 
  -webkit-border-radius:5px; " >
<div class="container1">
	<div class="row clearfix">
	<div style="padding-bottom:30px;">
			 <button type="button" class="close "  >
<div class="myCloseDiv">
       <div class="font1 close1">CLOSE&nbsp;</div>
       <div class="close2 glyphicon glyphicon-remove-circle"></div>
</div>
    </button>


	</div>
		<div class="col-md-3 column" style="border-right:2px solid #DDD7D7">
		<div style="padding-bottom:40px;" class="font2">RELEVANCE</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' value="all" checked /><span style="display:table-cell;vertical-align:middle">&nbsp;Show all roles</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' value="myProfile" /><span style="display:table-cell;vertical-align:middle">&nbsp;Only show roles fit for<br/> my profile</span></div>
		<br/>
		<br/>
		</div>
		
	
		<div class="col-md-3 column" style="border-right:2px solid #DDD7D7; padding-bottom:8px;">
		<div style="padding-bottom:40px;" class="font2">JOB TYPE</div>
		<span class="font3"> Show non-paying jobs?</span><div class="rounded" style="width: 55px; height: 21px;margin-left: 20px;"><input  type="radio" id="nonpaying" name="roles" value="role1"/><span style="padding: 0px 6px 0px;">Yes</span></div><br/>
		<span class="font3"> Show Reality TV roles?</span><div class="rounded" style="width: 55px; height: 21px;margin-left: 23px;"><input  type="radio" id="tv" name="roles" value="role2"/><span style="padding: 0px 6px 0px;">Yes</span></div><br/>
		<span class="font3"> Show background roles?</span><div class="rounded" style="width: 55px; height: 21px; margin-left: 12px;"><input  type="radio" id="roles" name="roles" value="role3"/><span style="padding: 0px 6px 0px;">Yes</span></div><br/>

       
		</div>

		<div class="col-md-6 column">
		<div style="padding-bottom:25px;" class="font2">PRODUCTION TYPE</div>
		<button class="myBtn button4 pull-right fontsize12" style="margin-top: -30px;"> SELECT ALL</button>
		<div class="col-md-6 column">
		<div><span style="padding-left: 10px;" class="font3">Film</span> <input type="checkbox" id="apperance1" class="myCheckBox type" value="film"/>
              <label for="apperance1" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div><br/>
              <div style="margin-top: -15px;"><span style="padding-left: 10px;" class="font3">TV & Video</span> <input type="checkbox" id="apperance2" class="myCheckBox type" value="tv&video"/>
              <label for="apperance2" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div><br/>
              <div style="margin-top: -15px;"><span style="padding-left: 10px;" class="font3">Theatre</span> <input type="checkbox" id="apperance3" class="myCheckBox type" value="threatre"/>
              <label for="apperance3" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div><br/>
              <div style="margin-top: -15px;"><span style="padding-left: 10px;" class="font3">Advertisement</span> <input type="checkbox" id="apperance4" class="myCheckBox type" value="advertisement"/>
              <label for="apperance4" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div>
        
        
        
        </div>
        <div class="col-md-6 column">
        <span style="padding-left: 10px;" class="font3">Modelling</span> <input type="checkbox" id="apperance5" class="myCheckBox type" value="modelling" checked />
               <label for="apperance5" style="float:right;"><span></span></label>
               <div class="linelightgrey" style="width:102%"></div><br/>
               <div style="margin-top: -15px;"><span style="padding-left: 10px;" class="font3">Voiceover</span> <input type="checkbox" id="apperance6" class="myCheckBox type" value="voiceover"/>
              <label for="apperance6" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div><br/>
              <div style="margin-top: -15px;"><span style="padding-left: 10px;" class="font3">Performing arts</span> <input type="checkbox" id="apperance7" class="myCheckBox type" value="performing arts"/>
              <label for="apperance7" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div><br/>
              <div style="margin-top: -15px;"><span style="padding-left: 10px;" class="font3">Team/Crew</span> <input type="checkbox" id="apperance8" class="myCheckBox type" value="team-crew"/>
              <label for="apperance8" style="float:right;"><span></span></label></div>
              <div class="linelightgrey" style="width:102%"></div><br/>
        </div>


		</div>


	</div>
	<div class="row clearfix">
		<div class="col-md-10 column" style="padding-top: 25px;">
			<div class="row clearfix">
				<div class="col-md-4 column" style="border-right:2px solid #DDD7D7;width: 29.333333% !important;">
				<div class="font2">GENDER</div>
		             <center><div class="myRadioImg " style="display:inline;top:10px;left:100px">
	    <input  type="radio" id="male" name="cc" value="male" checked/>
	    <label for="male" class="font3"><span id="maleLabel" class="radioMaleUnCheck"></span><br/>Men</label>
   
    
	   <input  type="radio" id="female" name="cc" value="female"/>
       <label for="female"  style="padding-left: 70px;" class="font3"><span id="femaleLabel"class="radioFemaleUnCheck"></span><br/>Women</label>
      </div></center>

				</div>

				<div class="col-md-4 column" style="border-right:2px solid #DDD7D7;width: 31.333333% !important;">
				<div class="font2">AGE RANGE</div>
				         <div style="display:block;height:21px; clear:both"></div>

				        <div style="position:relative;width:200px">
             <div id="slider-range"></div>

              <div id="min-value"></div><div id="max-value"></div>

       </div>
       <br/><br/><br/>
       <div><input type="checkbox" id="check" class="myCheckBox" /><label for="check"><span></span></label><span class="font5 fontsize12" >Only show roles for children</span></div>
				</div>


				<div class="col-md-4 column">
				<div class="font2">CITY</div>
				      <div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Mumbai</span><input type="checkbox" id="city" class="myCheckBox city" value="mumbai" checked />
        <label for="city" style="float:right;margin-bottom:0px !important"><span></span> </label></div>
        <div class="linelightgrey" style="width:102%"></div>
        <div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Navi Mumbai</span><input type="checkbox" id="city1" class="myCheckBox city" value="navi mumbai" />
        <label for="city1" style="float:right;margin-bottom:0px !important"><span></span></label></div>
          <div class="linelightgrey" style="width:102%"></div><br/>
          <div class='font5 fontsize12' >Coming soon: Delhi and Chennai.</div>
				</div>
			</div>
			<br/><br/>
		</div>
		<div class="col-md-2 column">
		</div>
	</div>
	
</div>
</div>
</div>

				
					</div>
					
			
					<div class="tab-pane" id="tab2">
						
                    <div style="position:relative;" >
		               <div id="TrSlider2" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;-moz-border-radius:5px; 
                        -webkit-border-radius:5px; " >
                        <div class="container1">
	                          <div class="row clearfix">
	                              <div style="padding-bottom:30px;">
			                           <button type="button" class="close "  >
                                                <div class="myCloseDiv">
                                                   <div class="font1 close1">CLOSE&nbsp;</div>
                                                     <div class="close2 glyphicon glyphicon-remove-circle"></div>
                                                </div>
                                       </button>
                                   </div>

                                   <div>
	                                   <div class='text-center'>
		                                <input type="text" id="textSubmit" class="paddingleft mytextbox topbottom font7" placeholder="Search all roles" style="width:370px; height:42px;">
		                                &nbsp;<button class="myBtn button1 " id="search" style="width: 150px;height:42px;">Search</button>
	                                  </div>
	                                  <div style="padding-left: 85px;">
	                                  <div style='padding-left:147px;padding-top:35px;'>
		                                <input type="checkbox" id="check1" class="myCheckBox name" value="casting_title" /><label for="check1"><span></span></label><span class="font3 " >Search only project name/description</span>
	                                  </div>

		                              <div style='padding-left:147px;'>
		                                <input type="checkbox" id="check2" class="myCheckBox name" value="casting_director" /><label for="check2"><span></span></label><span class="font3 " >Search only Casting Directors</span>
	                                  </div>

	                                  <div style='padding-left:147px;padding-bottom:35px;'>
		                                <input type="checkbox" id="check3" class="myCheckBox name" value="project_description" /><label for="check3"><span></span></label><span class="font3 " >Search only role descriptions</span>
	                                  </div>
	                                  </div>
                                  </div>
                              </div>    
                        </div>
                       </div>
                    </div>

					</div>


                    <div class="tab-pane" id="tab3">
						
                    <div style="position:relative;" >
		               <div id="TrSlider3" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;-moz-border-radius:5px; 
                        -webkit-border-radius:5px; " >
                        <div class="container1">
	                          <div class="row clearfix">
	                              <div style="padding-bottom:30px;">
			                           <button type="button" class="close "  >
                                                <div class="myCloseDiv">
                                                   <div class="font1 close1">CLOSE&nbsp;</div>
                                                     <div class="close2 glyphicon glyphicon-remove-circle"></div>
                                                </div>
                                       </button>
                                   </div>
                                     <div class="col-md-3 column" style="padding-left: 35px;">
		<div style="padding-bottom:25px;" class="font2">RECENCY</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio'/><span style="display:table-cell;vertical-align:middle">&nbsp;Latest roles</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Oldest roles</span></div>
		<br/>
		<br/>
		</div>
                                    <div class="col-md-3 column" >
		<div style="padding-bottom:25px;" class="font2">ALPHABETICAL</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio'/><span style="display:table-cell;vertical-align:middle">&nbsp;Project name</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Casting Director</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Producer</span></div>
		<br/>
		<br/>
		</div>
                                    <div class="col-md-3 column" >
		<div style="padding-bottom:25px;" class="font2">AUDITION DATE</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio'/><span style="display:table-cell;vertical-align:middle">&nbsp;Earliest dates</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Latest dates</span></div>
		<br/>
		<br/>
		</div>
                                    <div class="col-md-3 column" >
		<div style="padding-bottom:25px;" class="font2">PROJECT START DATE</div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio'/><span style="display:table-cell;vertical-align:middle">&nbsp;Earliest dates</span></div>
		<div class="font3" style="display:table;"><input type="radio" name="show" class='myRadio' checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Latest dates</span></div>
		<br/>
		<br/>
		</div>



                               </div> 
                        </div>
                        </div>
                    </div>
                    </div>
					









				</div>

				<div class="pull-right" style="padding-top:15px;">
                             <button type="button" class="previous"><div class="myCloseDiv" style="padding-right:44px;"><div class="glyphicon glyphicon-chevron-left" style="color:rgb(89,89,89)"></div>
                             <div class="font2 close1" style="font-size:14px !important;">&nbsp;PREVIOUS</div>
                             </div></button>
                           <span class="font1"> &nbsp; PAGE</span> <select style="padding: 5px 15px 5px 10px;"><option>1</option></select>  <span class="font1"> &nbsp;OF 29</span>
                             <button type="button" class="previous"><div class="myCloseDiv"  style="padding-right:44px;"><div class="font2 close1" style="font-size:14px !important;">&nbsp;NEXT</div>
                             <div class="glyphicon glyphicon-chevron-right" style="color:rgb(89,89,89)"></div>
                             </div></button>
                        </div>
						
			</div></div></div>
			<div class="col-md-1 column">
				</div>

							<div class="row clearfix" style="padding-top: 70px;">
							<div id="SearchContent">
							<?php foreach($result as $rows)
							{

                             $projectName=$rows->casting_title;
                             $productionType=$rows->production_type;
                             $payRate=$rows->pay_role;
                             $Producer=$rows->production_company;
                             $date=$rows->shooting_date;
                              $array=explode('-',$date);
                              $date1=mktime(0, 0, 0, $array[1], $array[2], $array[0]);
                             $startDate=date('F d,Y',$date1);
								?>
						 <div class="col-md-12 column round">
							<div class="col-md-2 column">
							2 hours ago
							</div>
							<div class="col-md-2 column">
						     <?php echo $productionType; ?>
							</div>
							<div class="col-md-2 column">
							<a href="" class="orangeanchor"><u> <?php echo strtoupper($projectName); ?></u></a>
							</div>
							<div class="col-md-2 column">
							<?php if($payRate==''){ echo 'Unpaid Role';} else echo 'Paid Role';?>
							</div>
							<div class="col-md-2 column">
							Start Date: <br>
                             <?php echo $startDate; ?>
							</div>
							<div class="col-md-2 column">
							Producer: <br>
                            <?php echo  $Producer; ?>
							</div>
						</div>

						<?php } ?>


				<!--		<div class="col-md-12 column round">
							<div class="col-md-2 column">
							2 hours ago
							</div>
							<div class="col-md-2 column">
							Documentary
							</div>
							<div class="col-md-2 column">
							<a href="" class="orangeanchor"><u>MOTHER INDIA</u></a>
							</div>
							<div class="col-md-2 column">
							Paid roles
							</div>
							<div class="col-md-2 column">
							Start Date: <br>
                            18 May, 2014
							</div>
							<div class="col-md-2 column">
							Producer: <br>
                            Mehboob Productions
							</div>

						</div>-->

						</div>
			</div>
			</div>
			</div></div></div>
<script>
$(function () { $("[data-toggle='tooltip']").tooltip(); });


function tabOpen()
{

            if ($("#TrSlider1").hasClass("TrSlideUp"))
                $("#TrSlider1").removeClass("TrSlideUp").addClass("TrSlideDown1");
            else
                $("#TrSlider1").removeClass("TrSlideDown1").addClass("TrSlideUp");
}
function tabSearchOpen()
{

            if ($("#TrSlider2").hasClass("TrSlideUp"))
                $("#TrSlider2").removeClass("TrSlideUp").addClass("TrSlideDown");
            else
                $("#TrSlider2").removeClass("TrSlideDown").addClass("TrSlideUp");
}
function tabSortOpen()
{

            if ($("#TrSlider3").hasClass("TrSlideUp"))
                $("#TrSlider3").removeClass("TrSlideUp").addClass("TrSlideDown");
            else
                $("#TrSlider3").removeClass("TrSlideDown").addClass("TrSlideUp");
}

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

      },

     change: function(event, ui) {
                $("#min-value1").html(ui.values[0]);
                $("#max-value1").html(ui.values[1]);
                var height_min_range = ui.values[0];
                var height_max_range = ui.values[1];
                var gender = $("input[name=cc]:checked").val();
                var revelance = $("input[name=show]:checked").val();
                var data = new Array();
                var type = new Array();

                $('.city:checked').each(function() {
                    data.push(this.value);
                });

                 $('.type:checked').each(function() {
                    type.push(this.value);
                });
                 
               



        $.ajax({
                    type: "post",
                    url: "<?php echo base_url();?>index.php?/auditionfox/narrowList",
                    datpType:"text",
                    data: "min_age=" + height_min_range + "&max_age=" + height_max_range + "&gender=" + gender + "&revelance=" + revelance + "&data=" + data+ "&type="+type ,
                    success: function(responseData1) {
                 //  alert(responseData1);
                            $("#SearchContent").html(responseData1);

                    },
                    error: function() {
                        alert('failure');
                    }
                }); 
            }




    });
    $( "#min-value" ).html($( "#slider-range" ).slider( "values", 0));
     $( "#max-value" ).html($( "#slider-range" ).slider( "values", 1));
  });




/*------------------------------------------search option -------------------------------*/
$("#search").click(function(){
	var name = $("#textSubmit").val();
	var data = new Array();
	 $('.name:checked').each(function() {
                    data.push(this.value);
                });
	
             $.ajax({
            type: "post",
            url: "<?php echo base_url();?>index.php?/auditionfox/search/",
            data: "name=" + name+"&data="+data,
            success: function(data) {
                   $("#SearchContent").html(data);
                // alert(data);
            },

            error: function() {
                alert('failure');
            },
        });


		});

</script>

<?php include 'footer.php'; ?>



