<?php include 'header.php'; ?>
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
					<br/>
					<br/>
						<div class="col-md-2 column">
						</div>
						<div class="col-md-8 column">
						<br/>
						<form action="<?php echo base_url();?>index.php?/castingfox/loadSignup" method="post" id="commentForm" >
							<div class="row clearfix">
								<div class="col-md-6 column">
								<input type="text" class="paddingtopbottom " requireVal="true" name="email"  placeholder="Email Id" style="width:240px;"/>
								</div>
								<div class="col-md-6 column">
									 <input type="text" class="paddingtopbottom " name="password" requireVal="true" placeholder="Password(Min. 8 character)" style="width:240px;"/>
								</div>
							</div><br/>
							<div class="row clearfix">
								<div class="col-md-4 column">
									 <input type="text" class="paddingtopbottom " name="first" requireVal="true" placeholder="First name" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom " name="middle" placeholder="Middle name" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom " name="last" placeholder="Last name" style="width:155px;height:26px;"/>
								</div>
							</div><br/>
							<div class="row clearfix">
								<div class="col-md-4 column">
										 <select class="font7 paddingtopbottom " name="dropdown" requireVal="true" style="width:155px;height:26px;">
										 <option>Gender</option>
										 <option >Male</option>
										 <option >Female</option>	</select>		
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom " name="companyname" requireVal="true" placeholder="Company name" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom" id="pincode" name="pincode" requireVal="true" placeholder="pincode" style="width:155px;height:26px;"/>
								</div>
							</div><br/>
							<div class="row clearfix">
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom " name="mobileno" requireVal="true" placeholder="Mobile no" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-8 column">
									<p class="font5 fontsize12">
										Your mobile no. will not be shared with actors.
									</p>
								</div>
							</div><br/>
							<div style="display:table;padding-left: 15px;" ><input id="chkSignUp"  class="myCheckBox" type="checkbox" name="informed" required value="true" /><label for="chkSignUp"><span></span></label>&nbsp;&nbsp;<span class="font1" style="vertical-align:middle;display:table-cell;">
							 Keep me informed about new features on Casting Fox.
							</span></div><br/><br/>
							<div class="text-center"><button type="submit" class="myBtn button1 fontsize12">Sign Up</button></div>
							<br/></form>
							<p class="text-center font3" style="font-size:10px;">
								By signing up, you agree to our <a class="anchortext" href="#">Privacy Policy</a> and <a class="anchortext" href="#">Terms of Service</a>.
							</p>
						</div>
						<div class="col-md-2 column">
						</div>
					</div>
					<br/>
				</div>
				<div class="col-md-2 column">
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
//$("#commentForm").validate();
</script>
<script>
/*function validateMe(){



        var mobile = $('#mobileno').val();
        var pattern =/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if (pattern.test(mobile)) {
            alert("Your mobile number : " + mobile);
            return true;
        }
        else{
        alert("It is not valid mobile number.input 10 digits number!");
        return false;
    }
    }*/

/*
var mobile = $('#mobileno').val();
if (validatePhone(mobile)) {
return true;
}
else {
alert('Provide Valid Phone Number');
return false;
}
}
//Phone Number
function validatePhone(mobile) {
   // var mob = /^[1-9]{1}[0-9]{9}$/;
var a= /^[0-9-+]+$/;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
   if (a.test(mobile)){
   	return true;
   }
   else
   {
   	return false;
   	   }
   	
    /*if (filter.test($.trim(mobile).length) ==0 || filter.test($.trim(mobile).length)<10 || filter.test($.trim(mobile).length)>10)
    {
        return false;
    }
    else {
        return true;
    }*/
//}


function isPinCode(evt) 
{ 
  var charCode = (evt.which) ? evt.which : event.keyCode 
   if ((charCode < 44 || charCode == 46 || charCode == 47 || charCode == 48 || charCode > 57) && charCode!=32 && charCode != 48 && charCode !=8) 
   return false; 
   return true; 
}
</script>
<?php include 'footer.php';?>