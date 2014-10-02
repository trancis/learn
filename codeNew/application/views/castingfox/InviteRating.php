<?php include 'header.php'; ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-1 column">
				</div>
			
				<div class="col-md-10 column">

				<div style="padding: 30px 0px;" >
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="width: 55px; height: 35px;"><input type="checkbox" id="ab" class="myCheckBox" ><label for="ab"><span></span></label><span class="caret"></span></button>
                          <ul class="dropdown-menu">
                           <li>
                             <a href="#">All on this page</a>
                           </li>
                           <li>
                             <a href="#">None</a>
                           </li>
                           <li>
                              <a href="#">All with 0 auditions</a>
                           </li>
                           <li>
                               <a href="#">All with 1 audition</a>
                           </li>
                           <li>
                               <a href="#">All with 2 auditions</a>
                           </li>

                           </ul>
                    </div>


                            <span style='padding-left:423px;'> <button type="button" class="previous" ><div class="myCloseDiv" style="padding-right:44px;"><div class="glyphicon glyphicon-chevron-left" style="color:rgb(89,89,89)"></div>
                             <div class="font2 close1" style="font-size:14px !important;">&nbsp;PREVIOUS</div>
                             </div></button>
                           <span class="font1"> &nbsp; PAGE</span> <select style="padding: 5px 15px 5px 10px;"><option>1</option></select>  <span class="font1"> &nbsp;OF 29</span>
                             <button type="button" class="previous"><div class="myCloseDiv"  style="padding-right:44px;"><div class="font2 close1" style="font-size:14px !important;">&nbsp;NEXT</div>
                             <div class="glyphicon glyphicon-chevron-right" style="color:rgb(89,89,89)"></div>
                             </div></button></span>
                        </div>


                      <div class="col-md-3 column">
							<div class="text-center"><img alt="140x140" src="http://lorempixel.com/140/140/"></div>
							<div  style="background:black; width:73%;margin-left:26px;">
								<div class="text-center" style="color:rgb(255,166,105)"><u><a href="" class="anchor" data-placement="top" data-toggle="tooltip"   title="View Profile" class="tooltip">candidate1</a></u></div>
								<div style="color:white;">
									<a href="" class="anchor1"data-toggle="tooltip"  data-placement="top" title="View Profile" class="tooltip"><i class="glyphicon glyphicon-star" style="padding-left:13px;padding-right:10px; "></i></a>
                                   <a href="" class="anchor1"data-toggle="tooltip" data-placement="top"  title="View Profile" class="tooltip"> <i class="glyphicon glyphicon-picture" style="padding-left:10px; "></i></a>
                                  <a href="" class="anchor1"data-toggle="tooltip"  data-placement="top" title="View Profile" class="tooltip"> <span style="padding-left:10px; "> <span class="recorder" style="display:inline-block;margin-top:-3px;"></span></span></a>
                                 <a href="" class="anchor1"data-toggle="tooltip"  data-placement="top" title="View Profile" class="tooltip">  <i class="glyphicon glyphicon-file" style="padding-left:5px; "></i></a>
                                 <a href="" class="anchor1"data-toggle="tooltip"  data-placement="top" title="View Profile" class="tooltip"><i class="glyphicon glyphicon-phone-alt" style="padding-left:10px;"></i></a>
								</div>
							</div>
							
							
                            <center><div class="linelightgrey" style="width:73% !important"></div>
                           
                       <div style="height:5px; display:block;clear:both;"></div>
                            <div style="height:20px;width:140px;padding-top:0px" class="divbg"> <p style="font-size: 80%;padding-top:4px" class="font10">INVITE TO AUDITION</p></div>
                             <div style="height:20px;width:140px;padding-top:0px" align="center"> <p style="" class="font1"> <h6>0 auditions done</h6></p></div>
                             <center><div class="linelightgrey" style="width:73% !important"></div>
                             <div style="height:30px;width:140px"><div class="font7" style="font-size:14px !important;float:left" > Rating </div><div class="rating" style="float:left;padding-left:16px">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div> </div>              
                            <div class="col-md-4 column " style="padding-left:26px;"><div class="round font3" style="width:45px;">3</div></div>
                            <div class="col-md-8 column" style="padding-left:0px;">
                            <div class="round" style="width:90px;"><a href="#" data-target="#ChangeRoleModal" data-toggle="modal" class="font3 anchor2">change role</a></div>
                            </div>
                            <div class="col-md-4 column " style="padding-left:26px;"><div class=" " style="width:45px;"></div></div>
                            <div class="col-md-8 column" style="padding-left:0px;">
                            <div class="" style="width:90px;"><h6>(+91)9129110120</h6></div>
                            </div>
                              <div class="col-md-3 column " style=""><div class=" " style="width:45px;"></div></div>
                            <div class="col-md-9 column" style="padding-left:0px;">
                            <div class="" style="width:130px;"><h6 class="font1">ASK talent agency</h6></div>
                            </div>
                             
         

                            </center>
                          
                         
						  
                     </center>
						</div>
   

						<div class="col-md-3 column">
							

						</div>
						<div class="col-md-3 column">
					
						</div>
						<div class="col-md-3 column">
							
						</div>
				</div>
				<div class="col-md-1 column">
				</div>
			</div>
		
		</div>
	</div>
</div>
<script type="text/javascript">




$(".rating>div").hover(function(){
var index=$(this).index();
   // alert(index);
    if(index==0)
    {
        $(this).siblings().html("");
    $(this).nextAll().css("background","rgb(242,242,242)");
    $(this).css("background","#EDD614").html("0");
    }
     if(index==1)
    {
    $(this).siblings().html("");
    /*$(this).prev().css("background","yellow");*/
    $(this).nextAll().css("background","rgb(242,242,242)");
   $(this).css("background","#9ACD32").html("1");
    }
     if(index==2)
    {
    $(this).siblings().html("");
    /*$(this).prev().css("background","green");*/
    /* $(this).prev().prev().css("background","yellow");*/
    $(this).nextAll().css("background","rgb(242,242,242)");
   $(this).css("background","#3F7E00").html("2");
    }
   if(index==3)
    {
    $(this).siblings().html("");
    /*$(this).prev().css("background","blue");*/
    /*$(this).prev().prev().css("background","green");
     $(this).prev().prev().prev().css("background","yellow");*/
    $(this).nextAll().css("background","rgb(242,242,242)");
   $(this).css("background","#305D02").html("3");
    }



});








	$(".confirm-group input[name='f']").change(function(){
//alert("sds");
    var sel=$(this).val();
        $(".confirm + label").css("background","grey");
    if(sel=='y'){
     
        $(".confirm#yes + label").css("background","rgb(51,153,51)");
    
    }
    else if(sel=='m'){
         
        $(".confirm#maybe + label").css("background","rgb(255,51,0)");
    
    }
     else if(sel=='n'){
       
        $(".confirm#no + label").css("background","rgb(192,0,0)");
    
    }
    

});
</script>
<?php include 'footer.php'; ?>



