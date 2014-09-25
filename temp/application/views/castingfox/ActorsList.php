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
							<div style="height:5px; display:block;clear:both;"></div>
							<div class="confirm-group text-center" >
                                 <input class="confirm" type="radio" name="f" value="y" id="yes"><label for="yes" style="font-weight:500px !important;">Yes</label>
                                 <input class="confirm" type="radio" name="f" value="m" id="maybe"><label for="maybe" style="font-weight:500px">Maybe</label>
                                 <input class="confirm" type="radio" name="f" value="n" id="no"><label for="no" style="font-weight:500px !important;">No</label>
                            </div>
                            <center><div class="linelightgrey" style="width:73% !important"></div>
                           
<div style="height:5px; display:block;clear:both;"></div>

                            <div class="col-md-4 column " style="padding-left:26px;"><div class="round font3" style="width:45px;">3</div></div>
                            <div class="col-md-8 column" style="padding-left:0px;"><div class="round" style="width:90px;"><a href="#" data-target="#ChangeRoleModal" data-toggle="modal" class="font3 anchor2">change role</a></div></div></center>
						    <div style="padding-left:18px;padding-right:5px;"><a href="" class="orangeanchor fontsize12"><u>“I have extensive experience in drama and recently playe”</u></a></div>
                            <div class="text-center fontsize11 font5" style="padding-top: 5px;">Audition Fox</div>

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



