<?php include 'header.php';?>
<div class="container1 containerBG2">
	<div class="row clearfix">
	<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
		<div class="col-md-8 column">
			<h1 class="text-center font9" style="padding: 15px 0px">
					  Sign Up.
					</h1>
			<div class="row clearfix" style="background-color:#fbfbfb;">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-1 column">
						</div>
						<div class="col-md-10 column">
							<div class="row clearfix text-center">
								<div class="col-md-6 column">
									 <button type="button" class="btn btn-default btn-twitter"><i class="fa fa-twitter" style="color:grey;"></i>Facebook</button>
								</div>
								<div class="col-md-6 column">
									 <button type="button" class="btn btn-default">Twitter</button>
								</div>
							</div>
							<div class="row clearfix" style="padding-bottom: 16px;">
								<div class="col-md-5 column linelightgrey" style="padding-bottom: 9px;width:41% !important;">
								</div>
								<div class="col-md-2 column">
									<p class="text-center">
										OR
									</p>
								</div>
								<div class="col-md-5 column linelightgrey" style="padding-bottom: 9px;width:41% !important;">
								</div>
							</div>
							<form action="<?php echo base_url();?>auditionfox/signup" method="post"  onsubmit="return validateMe();">
							<div class="row clearfix">
								<div class="col-md-12 column">
								<input type="text" id="email" class="paddingtopbottom"  name="email" requireVal="true" placeholder="<?php if($email=='') {echo'E-Mail Id';} else{ echo $email;} ?>"
								  style="width: 270px;height: 38px;" />&nbsp;&nbsp;
								 <input type="text" class="paddingtopbottom " id="password" name="password" requireVal="true" placeholder="Select your password (min. 8 characters)" style="width: 287px;height: 38px;"/><br><br><br>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-md-12 column">
								<div class="font1">Screen Name</div><br>
								<input type="text" class="paddingtopbottom " id="first" requireVal="true" name="first" placeholder="First name" style="width:188px;height:38px;"/>
								<input type="text" class="paddingtopbottom " id="middle" requireVal="false" name="middle" placeholder="Middle name(optional)" style="width:185px;height:38px;"/>
								<input type="text" class="paddingtopbottom " id="last" requireVal="false" name="last" placeholder="Last name(optional)" style="width:188px;height:38px;"/><br/><br/><br/>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-md-2 column">
									 <div class="font1">Gender</div>
									 <select class="font7 paddingtopbottom " requireVal="true" id="dropdown" name="dropdown" style="width:100px;height:38px;">
										 <option>Select</option>
										 <option >Male</option>
										 <option >Female</option>	
									 </select>
								</div>	 
							<div class="col-md-4 column" style="padding: 0px 15px 0px;">
									 <div class="font1 datepickerDiv">&nbsp;&nbsp;Date of birth</div>
									 &nbsp;&nbsp;<input type="text" class="paddingtopbottom datepicker1" id="dd" requireVal="true" name="dd" placeholder="DD" style="width:48px;height:38px;"/>
									 <input type="text" class="paddingtopbottom datepicker1" id="mm" name="mm" requireVal="true" placeholder="MM" style="width:48px;height:38px;"/>
									 <input type="text" class="paddingtopbottom datepicker1" id="yy" name="yy" requireVal="true" placeholder="YYYY" style="width:59px;height:38px;"/>
								</div>
								<div class="col-md-3 column">	 
                                     <div class="font1">Pin Code</div>
                                     <input type="text" class="paddingtopbottom " id="pincode" name="pincode" requireVal="true" placeholder="pincode" style="width:155px;height:38px;"/>
                                </div>
                                <div class="col-md-3 column" style="padding: 0px 38px 15px;">     
								     <div class="font1">Invite Code</div>
								     <input type="text" class="paddingtopbottom " id="invitecode" requireVal="true" name="invitecode" placeholder="AB29DE23" style="width:155px;height:38px;"/>
								</div>     
							</div><br>
							<div class="row clearfix">
								<div class="col-md-12 column" style="padding: 0px;">
								<div style="display:table;padding-left: 15px;" class=""><input id="chkAlert"  class="myCheckBox"type="checkbox" name="alert" value="1" /><label for="chkAlert"><span></span></label>&nbsp;&nbsp;
								<span class="font1" style="vertical-align:middle;display:table-cell;">
							    Send me alerts about roles that match my profile.
							    </span>
							    </div>

								<div style="display:table;padding-left: 15px;" class=""><input id="chkSignUp"  class="myCheckBox"type="checkbox" name="informed" value="1" /><label for="chkSignUp"><span></span></label>&nbsp;&nbsp;
								<span class="font1" style="vertical-align:middle;display:table-cell;">
							    Keep me informed about new features on Audition Fox.
							    </span>
							    </div><br/>
							    <div class="pull-right"><button type="submit" class="myBtn button1 " style="width:190px;" >Sign Up</button></div>
							    <br><br><br>
							    </form>
								 <p class="pull-right font3" style="font-size:12px;">
								By signing up, you agree to our <a class="anchortext" href="#">Privacy Policy</a> and <a class="anchortext" href="#">Terms of Service</a>.
       							</p>
								</div>
							</div>
						</div>
						<div class="col-md-1 column">
						</div>
					</div>
				</div>
				<div class="col-md-2 column">
				</div>
			</div>
		</div>
	</div>
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

$(".datepicker1").click(function(){
   $(".ui-datepicker-inline").css('display',"block");
   
   $( ".datepickerDiv" ).datepicker({
  changeMonth: true,
  changeYear: true,
  onSelect:function(){
    var date=$(this).val(); 
    var dateArray=date.split('/');
    $( "#dd" ).attr("value",dateArray[1]);
    $( "#mm" ).attr("value",dateArray[0]);
    $( "#yy" ).attr("value",dateArray[2]);
    $(".ui-datepicker-inline").css('display',"none");

}
  

});
});






</script>
<script>

function validateMe(){
var sEmail = $('#email').val(); //add your id here
var pincode = $('#pincode').val();

// Checking Empty Fields in signup

/*if ($.trim(sEmail).length ==0) {

alert('All fields are mandatory');
$("#email").addClass("has-error1");
return false;
//e.preventDefault();
}
if($("#password").val()==""){
	alert('All fields are mandatory');
$("#password").addClass("has-error1");
return false;
}
if($("#first").val()==""){
	alert('All fields are mandatory');
$("#first").addClass("has-error1");
return false;
}
if($('#dropdown option:selected').length == 0){
	alert('All fields are mandatory');
$("#dropdown").addClass("has-error1");
return false;
}
if($("#dd").val()==""){
	alert('All fields are mandatory');
$("#dd").addClass("has-error1");
return false;
}
if($("#mm").val()==""){
	alert('All fields are mandatory');
$("#mm").addClass("has-error1");
return false;
}
if($("#yy").val()==""){
	alert('All fields are mandatory');
$("#yy").addClass("has-error1");
return false;
}*/
/*if($("#pincode").val()==""){
	alert('All fields are mandatory');
$("#pincode").addClass("has-error1");

return false;
}*/
 if (($.trim(pincode).length)< 6 || ($.trim(pincode).length)>6 ){
        alert('*Pincode should only be 6 digits');
        return false;
    }
    else if ( pincode!=( "^[0-9]+$" )){
        alert('*Pincode should be numbers only');
        //return true;
    }



/*if($("#invitecode").val()==""){
	alert('All fields are mandatory');
$("#invitecode").addClass("has-error1");
return false;
}*/


if (validateEmail(sEmail)) {

//alert('Nice!! your Email is valid, now you can continue..');
return true;
}

else {

alert('Provide Valid Email Address');
return false;
}



}
// Function that validates email address through a regular expression.

function validateEmail(sEmail) {

var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

if (filter.test(sEmail)) {

return true;

}

else {

return false;

}

}

//Pincode
function isPinCode(pincode) 
{ 
  var charCode = (pincode.which) ? pincode.which : event.keyCode 
   if (charCode < 44 )
   return false; 
else
   return true; 
}


</script>

<?php include 'footer.php';?>