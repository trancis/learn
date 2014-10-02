<?php include 'header.php'; ?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3 class="text-center ">
				<div class="font2">
					FIND ACTORS
				</div></h3>
            <center>
                <div class="font3">
                    Browse profiles of professional actors.
                </div>
            </center>
            <br/>
            <div class="row clearfix">
                <div class="col-md-1 column">
                </div>
                <div class="col-md-10 column">
                    <div class="row clearfix">
                        <div class="tabbable" id="tabs">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#tab1" class="anchor font3" data-toggle="tab" style="margin-left:124px;" onclick="tabOpen()">NARROW THIS LIST</a>
                                </li>
                                <li>
                                    <a href="#tab2" class="anchor font3" data-toggle="tab" style="margin-left: 138px;" onclick="tabSearchOpen()">SEARCH</a>
                                </li>
                                <li>
                                    <a href="#tab3" class="anchor font3" data-toggle="tab" style="margin-left: 154px;" onclick="tabSortOpen()">SORT BY:Latest profile</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane " id="tab1">
                                    <div style="position:relative;">
                                        <div id="TrSlider1" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;-moz-border-radius:5px; 
  -webkit-border-radius:5px; ">
                                            <div class="container1">
                                                <div class="row clearfix">
                                                    <div style="padding-bottom:30px;">
                                                        <button type="button" class="close ">
                                                            <div class="myCloseDiv">
                                                                <div class="font1 close1">CLOSE&nbsp;</div>
                                                                <div class="close2 glyphicon glyphicon-remove-circle"></div>
                                                            </div>
                                                        </button>


                                                    </div>
                                                    <div class="col-md-3 column" style="border-right:2px solid #DDD7D7">
                                                        <div style="padding-bottom:40px;" class="font3">RELEVANCE</div>
                                                        <div class="font3" style="display:table;">
                                                            <input type="radio" name="show" class='myRadio' value="all" /><span style="display:table-cell;vertical-align:middle">&nbsp;Show all profiles</span>
                                                        </div>
                                                        <div class="font3" style="display:table;">
                                                            <input type="radio" name="show" class='myRadio' value="bookmark" checked/><span style="display:table-cell;vertical-align:middle">&nbsp;Show bookmarks</span>
                                                        </div>
                                                        <br/>
                                                        <br/>
                                                    </div>
                                                    <div class="col-md-3 column" style="border-right:2px solid #DDD7D7; padding-bottom:8px;">
                                                        <div style="padding-bottom:40px;" class="font3">GENDER</div>

                                                        <center>
                                                            <div class="myRadioImg " style="display:inline;top:10px;left:100px">
                                                                <input type="radio" id="male" name="cc" value="male" checked/>
                                                                <label for="male" class="font3"><span id="maleLabel" class="radioMaleUnCheck"></span>
                                                                    <br/>Men</label>


                                                                <input type="radio" id="female" name="cc" value="female" />
                                                                <label for="female" style="padding-left: 70px;" class="font3"><span id="femaleLabel" class="radioFemaleUnCheck"></span>
                                                                    <br/>Women</label>
                                                            </div>
                                                        </center>
                                                    </div>

                                                    <div class="col-md-3 column" style="border-right:2px solid #DDD7D7">
                                                        <div style="padding-bottom:25px;" class="font3">AGE RANGE</div>
                                                        <div style="position:relative;width:200px">
                                                            <div id="slider-range"></div>

                                                            <div id="min-value"></div>
                                                            <div id="max-value"></div>

                                                        </div>
                                                        <br/>
                                                        <br/>
                                                        <br/>
                                                        <div>
                                                            <input type="checkbox" id="check" class="myCheckBox" />
                                                            <label for="check"><span></span>
                                                            </label><span class="font5 fontsize12">Only show roles for children</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 column">
                                                        <div style="padding-bottom:25px;" class="font3">CITY</div>
                                                        <div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Mumbai</span>
                                                            <input type="checkbox" name="city[]" id="mumbai" value="Mumbai" class="myCheckBox city" checked />
                                                            <label for="mumbai" style="float:right;margin-bottom:0px !important"><span></span> 
                                                            </label>
                                                        </div>
                                                        <div class="linelightgrey" style="width:102%"></div>
                                                        <div style="padding-top:5px;padding-bottom:8px;"><span class="font3">Navi Mumbai</span>
                                                            <input type="checkbox" name="city[]" id="navimumbai" value="Navi Mumbai" class="myCheckBox city" />
                                                            <label for="navimumbai" style="float:right;margin-bottom:0px !important"><span></span>
                                                            </label>
                                                        </div>
                                                        <div class="linelightgrey" style="width:102%"></div>
                                                        <br/>
                                                        <div class='font5 fontsize12'>Coming soon: Delhi and Chennai.</div>
                                                    </div>

                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-md-10 column" style="padding-top: 25px;">
                                                        <div class="row clearfix">
                                                            <div class="col-md-4 column">
                                                                <div class="font3">ETHNIC APPEARANCE</div>
                                                                <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">North Indian</span> 
                                                                    <input type="checkbox" name="apperance[]" value="North Indian" id="north_indian" class="myCheckBox appearance" checked />
                                                                    <label for="north_indian" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">South Indian</span> 
                                                                    <input type="checkbox" name="apperance[]" value="South Indian" id="south_indian" class="myCheckBox appearance" checked />
                                                                    <label for="south_indian" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">North-East Indian</span> 
                                                                    <input type="checkbox" name="apperance[]" value="North-East Indian" id="north_east" class="myCheckBox appearance" checked />
                                                                    <label for="north_east" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Sikh</span> 
                                                                    <input type="checkbox" name="apperance[]" value="Sikh" id="sikh" class="myCheckBox appearance" checked />
                                                                    <label for="sikh" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                            </div>

                                                            <div class="col-md-4 column">
                                                                <div style="display:block;height:21px; clear:both"></div>

                                                                <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">Nepali</span> 
                                                                    <input type="checkbox" name="apperance[]" value="Nepali" id="nepali" class="myCheckBox appearance" checked />
                                                                    <label for="nepali" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Caucasian (US/European)</span> 
                                                                    <input type="checkbox" name="apperance[]" value="Caucasian (US/European)" id="caucasian" class="myCheckBox appearance" checked />
                                                                    <label for="caucasian" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Middle Eastern</span> 
                                                                    <input type="checkbox" name="apperance[]" value="Middle Eastern" id="middle_east" class="myCheckBox appearance" checked />
                                                                    <label for="middle_east" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">East Asian (e.g. Chinese)</span> 
                                                                    <input type="checkbox" name="apperance[]" value="East Asian (e.g. Chinese)" id="east_asian" class="myCheckBox appearance" checked />
                                                                    <label for="east_asian" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                            </div>


                                                            <div class="col-md-4 column">
                                                                <div style="display:block;height:21px; clear:both"></div>
                                                                <div style="padding-top:28px;padding-bottom:10px;"><span style="padding-left: 10px;" class="font3">African</span> 
                                                                    <input type="checkbox" name="apperance[]" value="African" id="african" class="myCheckBox appearance" checked />
                                                                    <label for="african" style="float:right;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>

                                                                <div style="padding-top:5px;padding-bottom:8px;"><span style="padding-left: 10px;" class="font3">Mixed</span> 
                                                                    <input type="checkbox" name="apperance[]" value="Mixed" id="mixed" class="myCheckBox appearance" style="float:right" />
                                                                    <label for="mixed" style="float:right ;margin-bottom:0px !important"><span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="linelightgrey" style="width:102%"></div>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <br/>
                                                    </div>
                                                    <div class="col-md-2 column">
                                                    </div>
                                                </div>
                                                <div class="font5 " style="padding-left: 20px;"><a href="" class="anchor" data-toggle="modal" data-target="#advanceMenuModal">Show advanced filtering criteria</a>
                                                </div>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="tab-pane" id="tab2">

                                    <div style="position:relative;">
                                        <div id="TrSlider2" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;-moz-border-radius:5px; 
                        -webkit-border-radius:5px; ">
                                            <div class="container1">
                                                <div class="row clearfix">
                                                    <div style="padding-bottom:30px;">
                                                        <button type="button" class="close ">
                                                            <div class="myCloseDiv">
                                                                <div class="font1 close1">CLOSE&nbsp;</div>
                                                                <div class="close2 glyphicon glyphicon-remove-circle"></div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <div class='text-center'>
                                                            <form method="post" onsubmit="return false;">
                                                                <input type="text" id="textSubmit" class="paddingleft mytextbox topbottom font7" placeholder="Search all actors" style="width:370px; height:42px;">&nbsp;
                                                                <button id="getImages" class="myBtn button1 " style="width: 150px;height:42px;">Search</button>
                                                        </div>
                                                        <div style='padding-left:147px;padding-top:35px;'>
                                                            <input type="checkbox" id="check" class="myCheckBox" />
                                                            <label for="check"><span></span>
                                                            </label><span class="font3 ">Search actor names</span>
                                                        </div>

                                                        <div style='padding-left:147px;padding-bottom:35px;'>
                                                            <input type="checkbox" id="check" class="myCheckBox" />
                                                            <label for="check"><span></span>
                                                            </label><span class="font3 ">Search resumes</span>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane" id="tab3">

                                    <div style="position:relative;">
                                        <div id="TrSlider3" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;-moz-border-radius:5px; 
                        -webkit-border-radius:5px; ">
                                            <div class="container1">
                                                <div class="row clearfix">
                                                    <div style="padding-bottom:30px;">
                                                        <button type="button" class="close ">
                                                            <div class="myCloseDiv">
                                                                <div class="font1 close1">CLOSE&nbsp;</div>
                                                                <div class="close2 glyphicon glyphicon-remove-circle"></div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <center>
                                                            <div style="height:170px; display:table">
                                                                <span class="font3" style="display: table-cell;vertical-align: middle;"><input type="radio" name="sort" class='myRadio'/><span style="padding-right: 55px;">&nbsp;Latest profiles</span></span>
                                                                <span class="font3" style="display: table-cell;vertical-align: middle;"><input type="radio" name="sort" class='myRadio'/><span style="padding-right: 55px;" >&nbsp;Name (Alphabetically)</span></span>
                                                                <span class="font3" style="display: table-cell;vertical-align: middle;"><input type="radio" name="sort" class='myRadio'/><span  >&nbsp;Random</span></span>
                                                            </div>
                                                        </center>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div id="search">
                                <div style="" align="right">
                                    <button type="button" class="previous">
                                        <div class="myCloseDiv" style="padding-right:44px;">
                                            <div class="glyphicon glyphicon-chevron-left" style="color:rgb(89,89,89)"></div>
                                            <div class="font2 close1" style="font-size:14px !important;">&nbsp;PREVIOUS</div>
                                        </div>
                                    </button>
                                    <span class="font1"> &nbsp; PAGE</span> 
                                    <select style="padding: 5px 15px 5px 10px;">
                                        <option>1</option>
                                    </select> <span class="font1"> &nbsp;OF 29</span>
                                    <button type="button" class="previous">
                                        <div class="myCloseDiv" style="padding-right:44px;">
                                            <div class="font2 close1" style="font-size:14px !important;">&nbsp;NEXT</div>
                                            <div class="glyphicon glyphicon-chevron-right" style="color:rgb(89,89,89)"></div>
                                        </div>
                                    </button>
                                </div>
                                <div class="row clearfix" style="padding-left:30px;">
                                    <?php foreach($data as $row){
                                     $name=$row->actor_name;
                                     $id=$row->id;
                                      foreach($pic as $rows)
                                        { $actor_id=$rows->actor_id;
                                         $current_profile=$rows->current_profile;
                                          $image=$rows->image_name; 
                                          if($id==$actor_id && $current_profile==1){ ?>
                                    <div class="img">
                                        <img class="lazy" src="<?php echo base_url(); ?>assets/img/uploads/<?php echo $image; ?>" alt="actorImage" width="160" height="160" />
                                        <div class="desc" style="background:black;padding-top:5px;">
                                            <div class="text-center" style="color:rgb(255,166,105)"><u><a href="<?php echo base_url();?>index.php?/castingfox/profile/<?php echo $id; ?>" target="_blank"  class="anchor" data-placement="top" data-toggle="tooltip"   title="View Profile" class="tooltip"><?php echo $name; ?></a></u>
                                            </div>
                                            <div style="color:white;padding: 5px 0px;">
                                                <a href="" class="anchor1" data-toggle="tooltip" data-placement="top" title="Add to bookmark" class="tooltip" style="padding-right:10px;"><i class="glyphicon glyphicon-star" ></i></a>
                                                <a href="<?php echo base_url();?>index.php?/castingfox/actorphotos/<?php echo $id; ?>" target="_blank" class="anchor1" data-toggle="tooltip" data-placement="top" title="More Photos" class="tooltip" style="padding-right:10px;"> <i class="glyphicon glyphicon-picture"></i>
                                                </a>
                                                <a href="" class="anchor1" data-toggle="tooltip" data-placement="top" title="See videos" class="tooltip" style="padding-right:10px;"> <span> <span class="recorder" style="display:inline-block;margin-top:-3px;"></span></span>
                                                </a>
                                                <a href="" class="anchor1" data-toggle="tooltip" data-placement="top" title="See resume" class="tooltip" style="padding-right:10px;"> <i class="glyphicon glyphicon-file"></i>
                                                </a>
                                                <a href="<?php echo base_url();?>index.php?/castingfox/actorContact/<?php echo $id; ?>" target="_blank" class="anchor1" data-toggle="tooltip" data-placement="top" title="send message" class="tooltip" style="padding-right:1px;"><i class="glyphicon glyphicon-phone-alt" ></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center fontsize11 font5" style="padding-top: 5px;">Audition Fox</div>
                                    </div>
                                    <?php }}}?>



                                </div>
                                <div align="right">
                                    <button type="button" class="previous">
                                        <div class="myCloseDiv" style="padding-right:44px;">
                                            <div class="glyphicon glyphicon-chevron-left" style="color:rgb(89,89,89)"></div>
                                            <div class="font2 close1" style="font-size:14px !important;">&nbsp;PREVIOUS</div>
                                        </div>
                                    </button>
                                    <span class="font1"> &nbsp; PAGE</span> 
                                    <select style="padding: 5px 15px 5px 10px;">
                                        <option>1</option>
                                    </select> <span class="font1"> &nbsp;OF 29</span>
                                    <button type="button" class="previous">
                                        <div class="myCloseDiv" style="padding-right:44px;">
                                            <div class="font2 close1" style="font-size:14px !important;">&nbsp;NEXT</div>
                                            <div class="glyphicon glyphicon-chevron-right" style="color:rgb(89,89,89)"></div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 column">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });


    function tabOpen() {

        if ($("#TrSlider1").hasClass("TrSlideUp"))
            $("#TrSlider1").removeClass("TrSlideUp").addClass("TrSlideDown1");
        else
            $("#TrSlider1").removeClass("TrSlideDown1").addClass("TrSlideUp");
    }

    function tabSearchOpen() {

        if ($("#TrSlider2").hasClass("TrSlideUp"))
            $("#TrSlider2").removeClass("TrSlideUp").addClass("TrSlideDown");
        else
            $("#TrSlider2").removeClass("TrSlideDown").addClass("TrSlideUp");
    }

    function tabSortOpen() {

        if ($("#TrSlider3").hasClass("TrSlideUp"))
            $("#TrSlider3").removeClass("TrSlideUp").addClass("TrSlideDown");
        else
            $("#TrSlider3").removeClass("TrSlideDown").addClass("TrSlideUp");
    }

    $(document).ready(function() {

        radioImage();

        $(".myRadioImg input[name='cc']").change(function() {

            radioImage();

        });

    });


    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 10,
            max: 80,
            values: [20, 70],
            slide: function(event, ui) {
                $("#min-value").html(ui.values[0]);
                $("#max-value").html(ui.values[1]);

            },
            change: function(event, ui) {
                $("#min-value1").html(ui.values[0]);
                $("#max-value1").html(ui.values[1]);
                var height_min_range = ui.values[0];
                var height_max_range = ui.values[1];
                var gender = $("input[name=cc]:checked").val();
                var revelance = $("input[name=show]:checked").val();
                var data = new Array();
                var appearance = new Array();

                $('.city:checked').each(function() {
                    data.push(this.value);
                });

                $('.appearance:checked').each(function() {
                    appearance.push(this.value);
                });




                $.ajax({
                    type: "post",
                    url: "<?php echo base_url();?>index.php?/castingfox/searchByAge",
                    datpType:"text",
                    data: "min_age=" + height_min_range + "&max_age=" + height_max_range + "&gender=" + gender + "&revelance=" + revelance + "&data=" + data + "&appearance=" + appearance,
                    success: function(responseData1) {
                   // alert(responseData1);
                             $("#search").html(responseData1);

                    },
                    error: function() {
                        alert('failure');
                    }
                });
            }
        });
        $("#min-value").html($("#slider-range").slider("values", 0));
        $("#max-value").html($("#slider-range").slider("values", 1));
    });

    $("#getImages").click(function() {
        var name = $("#textSubmit").val();
        $.ajax({
            type: "post",
            url: "<?php echo base_url();?>index.php?/castingfox/search/",
            data: "name=" + name,
            success: function(data) {
                /*  if(data == "")
                  {
                      alert('No user data on record');  
                  }
                  else
                  { */
                //just alert the data for now
                $("#search").html(data);
                //}
            },

            error: function() {
                alert('failure');
            },
        });


    });

    /*$(function() {
        $("img.lazy").lazyload();
    });*/


    /*$(document).ready(function(){
    $("#slider-range").click(function(){
    	var min_age_1=$("#min-value").val();
    	var max_age_1=("#max_value").val();
    	$.ajax({
                                  type: "post",
                                 url: "<?php echo base_url();?>index.php?/castingfox/advanced_filter",

                                 data:"min_age="+min_age_1+"max_age="+max_age_1,
                                   success:function(responseData1)
                                   { 
                                   	//alert(responseData1);
                                   	$a=$this->input->post('min_age');
                                   	$b=$this->input->post('max_age');
                                   	<?php print_r($a);
                                   	print_r($b);?>

                                   	
                                      if(responseData1==0)
                                      {
                                        $.ajax({
                                        type: "post",
                                        url: "<?php echo base_url();?>index.php?/castingfox/newsletter/", 
                                        data:"email="+email,
                                        success: 
                                        function(data)
                                        {

                                       $("#newsLetter").fadeOut(function(){
                                       $("#thankingNewsLetter").fadeIn();
                                       });
                                  
                                        },
    		                               error: function()
    		                               {
    		                                   alert('failure');
    		                               }
                           });                                
     

                                      }

                                      else{
                                      	$("#getMessage").html('You have already registered!!');
                                      }
                                  
                                   },
                                   error: function()
                                   {
                                       alert('failure');
                                   }
                           });
    });*/
</script>

<?php include 'footer.php'; ?>